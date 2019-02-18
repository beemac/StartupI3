/**
 * Window components
 */
score.window = {};
score.window.timerFunction = null;

/* Create a new window */
score.window.popout = function(url, height, width) {
    // Set a default size if not provided
    if (arguments.length < 3) {
        height=700;
        width=800;
    }

    newWindow=window.open(url,'name','height='+height+',width='+width+',scrollbars=yes,menubar=no,resizable=yes');

     if (window.focus) newWindow.focus();
};

score.window.tab = function(url) {
    console.log("opening tab");
    newWindow=window.open(url,'_blank');
    if (window.focus) newWindow.focus();
};

score.window.Modal = {

    create: function(title, contentUrl, postContent, buttonName, buttonClass, options) {

        if ( ! title) {
            title = 'Title not set';
        }
        if ( ! buttonName) {
            buttonName = 'Submit';
        }
        if ( ! buttonClass) {
            buttonClass = 'btn btn-primary';
        }
        if ( ! postContent) {
            postContent = '';
        }

        scoreModal = $('#ScoreModal');

        if( ! scoreModal.length) {

            modal =
                "<div class=\"modal fade\" id=\"ScoreModal\" >"
                    +"<div class=\"modal-dialog modal-lg\">"
                         +"<div class=\"modal-content\">"
                            +"<div class=\"modal-header\" style=\"display:block\">"
                                +"<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>"
                                +"<h3 id=\"ScoreModalTitle\"></h3>"
                            +"</div>"
                            +"<div class=\"modal-body\" >"
                                +"<div class=\"alert alert-info\" id=\"dialogMessageBox\" style=\"display:none;\">"
                                    +"<a class=\"close\" onclick=\"$('.alert').hide()\" href=\"#\">x</a>"
                                    +"<div id=\"dialogMessage\"></div>"
                                +"</div>"
                                +"<div id=\"ScoreModalContent\" style=\"min-height: 40px;\">"
                                +"</div>"
                            +"</div>"
                            +"<div class=\"modal-footer\">"
                                +"<a href=\"#\" class=\"btn btn-default\" data-dismiss=\"modal\" id=\"ScoreModalCancel\">Cancel</a>"
                                +"<a href=\"#\" class=\"btn btn-success\" id=\"ScoreModalOptionalButton\" data-loading-text=\"Processing...\" style=\"display: none\"></a>"
                                +"<a href=\"#\" class=\"btn btn-primary\" id=\"ScoreModalSubmit\" data-loading-text=\"Saving...\"></a>"
                            +"</div>"
                         +"</div>"
                    +"</div>"
                +"</div>";

            $(modal).appendTo('body');

            scoreModal = $('#ScoreModal');

        }

        // unregister any previous event listener
        $('#ScoreModal input').unbind();
        $('#ScoreModal .btn').unbind();

        $('#dialogMessageBox').hide();
        $('#ScoreModalTitle').text(title);
        $('#ScoreModalOptionalButton').hide().text('Option');
        $('#ScoreModalSubmit').attr('class', buttonClass).text(buttonName);
        $('#ScoreModalContent').html('<div class="ds-loader-container"><div class="ds-loader ds-loader-blue"></div></div>');

        $('#ScoreModalCancel').click( function(event){
            event.preventDefault();
            score.window.Modal.destroy();
        });

        if ( ! contentUrl) {
            $('#ScoreModalContent').text('URL was not provided so no content was loaded');
        } else {
            $('#ScoreModalContent').load(contentUrl, postContent, function() {
                if( $('.modal-backdrop').height() < $('.modal-content').height() * 1.1 ) {
                    $('.modal-backdrop').css('height', $('.modal-content').height() * 1.1 +'px');
                }
            });
            score.window.timerFunction = setInterval(function(){
                if( $('.modal-backdrop').height() < $('.modal-content').height() * 1.1 ) {
                    $('.modal-backdrop').css('height', $('.modal-content').height() * 1.1 +'px');
                } else {
                    if( $('.modal-content').height() * 1.1 < $(window).height() ) {
                        $('.modal-backdrop').css('height', $(window).height() +'px');
                    }
                }
            }, 200);
        }

        if ( options ) {
            scoreModal.modal(options);
        }

        $('#ScoreModal').scrollTop(0);
//        scoreModal.on('show.bs.modal', function () {
//            scoreModal.css('width',$( window ).width());
//        });

        dojo.addClass(dojo.byId('ScoreModal'), 'in');

        scoreModal.modal('show');
    },

    destroy: function() {
        if (score.window.timerFunction) {
            clearInterval(score.window.timerFunction);
            score.window.timerFunction = null;
        }
        modal = $('#ScoreModal');
        $('#ScoreModalSubmit').off('click');

        dojo.removeClass(dojo.byId('ScoreModal'), 'in');

        if (modal.length) {
            modal.modal('hide');
        }

    }

};

/* Create a modal dialog */
score.window.Dialog = {

    create: function(title, requestedUrl, postContent) {
        // optional POST args
        if ( ! postContent ) {
            postContent = '';
        }

        console.log("post content", postContent);

        var dialog;

        // Open the dialog
        dojo.xhrPost({
            url: requestedUrl,
            postData: postContent,
            handleAs: "text",
            load: function(data, args) {
                // Create new dialog if it does not exist
                if ( ! dijit.byId('ScoreDialog') ) {

                    console.log("creating new dialog");

                    // dialog = new dijit.Dialog({id: 'ScoreDialog',
                    dialog = new dojox.widget.DialogSimple({id: 'ScoreDialog',
                        title: title,
                        draggable: false,
                        executeScripts: true,
                        content: data,
                        "class": score.constants.DIJIT_THEME
                    });

                    dialog.connect(dialog, 'onHide', function() {
                        dojo.forEach(dijit.findWidgets(dijit.byId('ScoreDialog')), function(w) {
                            w.destroyRecursive();
                    });

                    setTimeout(function() {
                        dialog.destroyRecursive(); }, 0);
                    });

                    //dialog.setContent(data);
                    dojo.body().appendChild(dialog.domNode);
                    //dojo.parser.parse(dialog.domNode);
                } else {

                    console.log('reusing existing dialog');

                    dialog = dijit.byId('ScoreDialog');
                    dialog.attr('title', title);
                    dialog.setContent(data);
                    dojo.parser.parse(dialog);
                }

                dialog.show();
                // Initialize tooltips after dialog is opened
                $("[rel=tooltip]").tooltip();
            },
            error: function(error, args) {
                console.log('score.window.Dialog xhr error', error);
            }
        });
    },

    destroy: function() {
        dialog = dijit.byId('ScoreDialog');

        if (dialog) {
            dialog.hide();
        }
    },

    refresh: function(title,url) {
        dialog = dijit.byId('ScoreDialog');

        if (dialog) {
            dialog.hide();
        }

        score.window.Dialog.create(title,url);
    }
};

/* Determine if a dialog is open */
score.window.isDialogOpen = function() {
    if (dijit.byId('ScoreDialog')) {
        return true;
    } else if (dojo.byId('ScoreModal') && dojo.hasClass('ScoreModal','in')) {
        return true;
    }
    return false;
};

score.window.siteMessage = function() {
        return {
            messageContainer: 'messageBox',
            messageText: 'siteMessage'
        }
}();

score.window.dialogMessage = function() {
    return {
        messageContainer: 'dialogMessageBox',
        messageText: 'dialogMessage'
    }
}();

/* Generic notify */
score.window.Notify = function(text, messageType) {

    var messageType = (undefined == messageType) ? 'info' : messageType,
        isDialog = score.window.isDialogOpen(),
        messageContainer = null,
        messageText = null;

    messageContainer = (isDialog) ? score.window.dialogMessage.messageContainer : score.window.siteMessage.messageContainer;
    messageText = (isDialog) ? score.window.dialogMessage.messageText : score.window.siteMessage.messageText;


    if (dojo.byId(messageContainer)) {

        // set style
        dojo.removeClass(dojo.byId(messageContainer));
        // Reset opacity in case the last message was faded out
        dojo.style(dojo.byId(messageContainer), 'opacity', 1);
        
        if (isDialog) {
        	dojo.addClass(dojo.byId(messageContainer), 'alert-msgbox')
        } else {
        	dojo.addClass(dojo.byId(messageContainer), 'alert-fixed')
        }

        switch (messageType) {
            case "info":
                dojo.addClass(dojo.byId(messageContainer), 'alert alert-info');
                break;
            case "success":
                dojo.addClass(dojo.byId(messageContainer), 'alert alert-success');
                setTimeout(function() {
             		$('.closealert').trigger("click");
                }, 3000);
                break;
            case "success-fade":
                dojo.addClass(dojo.byId(messageContainer), 'alert alert-success');
                break;
            case "infofade":
                dojo.addClass(dojo.byId(messageContainer), 'alert alert-infofade');
                break;
            case "alert":
                dojo.addClass(dojo.byId(messageContainer), 'alert alert-warning');
                break;
            case "error":
                dojo.addClass(dojo.byId(messageContainer), 'alert alert-danger');
                if (undefined==text || text == '')
                    text = score.constants.ERROR_GENERIC_ERROR;
                break;
        }

        dojo.byId(messageText).innerHTML = text;
        dojo.style(dojo.byId(messageContainer), 'display', '');
    } else {
        console.log('Tried to log a message but ' + messageContainer + ' was not present:', text);
    }
};

/* Notify error encountered */
score.window.ErrorMsg = function(text) {
    score.window.Notify(text, 'error');
};

/* Notify of success */
score.window.SuccessMsg = function(text, fade) {
    // Pass any value for fade to enable message timeout
    if (fade == undefined) {
        score.window.Notify(text, 'success');
    } else {
        score.window.Notify(text, 'success-fade');
    }
};

/* Notify of info with a fade */
score.window.InfoMsg = function(text) {
    score.window.Notify(text, 'infofade');
};

/* Notify of warning */
score.window.AlertMsg = function(text) {
    score.window.Notify(text, 'alert');
};

/* Notify save in progress */
score.window.Saving = function(customText) {
    customText = (customText == undefined) ? 'Saving ...' : customText;
    score.window.Notify(customText);
};

/* Clear any notification messages */
score.window.ClearNotice = function(id) {

    if (id == undefined) {
        if (score.window.isDialogOpen()) {
            if (dojo.byId('dialogMessage')) {
                dojo.byId('dialogMessage').innerHTML = "";

                if (dojo.byId('dialogMessageBox')) {
                    dojo.style(dojo.byId('dialogMessageBox'), 'display', 'none');
                }
            }
        } else {

            if (dojo.byId('messageBox')) {
                dojo.style(dojo.byId('messageBox'), 'display', 'none');
            }
        }
    } else {
        if (dojo.byId(id)) {
            dojo.byId(id).innerHTML = "";
            dojo.style(dojo.byId(id), 'display', 'none');
        }
    }
};

score.window.addSingleColumn = function(showProfile) {

    showProfile = (undefined == showProfile) ? score.constants.PROFILE_HIDE : score.constants.PROFILE_SHOW;

    html = '<div id="center-pane"> '
         + '<div class="pane-title-bar" id="main-pane-title-bar">'
         + '<h3 id="main-pane-title">'
         + '</h3>'
         + '<div id="profile" class="btn-group">'
         + '<button class="btn btn-sm btn-default" id="maximize-minimize-center-pane-button" title="Collapse/Expand Menu">'
         + '    <span class="glyphicon glyphicon-resize-small" style="vertical-align:middle"></span>'
         + '</button>';

    if (showProfile == score.constants.PROFILE_SHOW) {
        html = html + score.window.getProfileMenu();
    }

    html = html
         + '</div>'
         + '</div>'
         + '  <div style="position: absolute; top: 46px; left: 10px; right: 30px; z-index: 999;">'
         + '    <div class="alert alert-info" id="messageBox" style="display:none;"> '
         + '      <a class="close" onclick="$(\'.alert\').hide()" href="#">x</a> '
         + '      <div id="siteMessage"></div>'
         + '    </div>'
         + '  </div>'
         + '<div class="pane-content" id="main-pane-content" data-dojo-type="dojox.layout.ContentPane">'
         + '</div>'
         + '</div>';

    dijit.byId('content').attr('content', html);

    if (showProfile == score.constants.PROFILE_SHOW) {
        score.window.setupProfileConnections();
    }
};

score.window.getProfileMenu = function() {

    html = '    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">'
         + '        <span id="active-profile-name">' + score.data.currentProfile + '</span>'
         + '        <span class="caret"></span> '
         + '    </a> '
         + '    <ul id="profileSelection" class="dropdown-menu pull-right"> ';

    profiles = score.data.userProfiles.categorizedProfiles;
    categoryName = null;
    dojo.forEach(profiles, function(profile){
        if (categoryName != profile.category) {
            if (categoryName != null) {
                html = html + '<li class="divider"></li>';
            }
            categoryName = profile.category;
            html = html + '<li class="dropdown-header profileCategory">' + categoryName + '</li>';
            html = html + '        <li><a href="#">'+ profile.name +'</a></li> ';
        } else {
            html = html + '        <li><a href="#">'+ profile.name +'</a></li> ';
        }
    });
    if (categoryName != null) {
        html = html + '<li class="divider"></li>';
    }

    profiles = score.data.userProfiles.nonCategorizedProfiles;
    categoryName = null;
    dojo.forEach(profiles, function(profile){
        html = html + '        <li><a href="#">'+ profile.name +'</a></li> ';
    });

    html = html + '    </ul> ';
    return html;
}

score.window.resetProfileMenu = function() {
    if (dojo.byId('profile')) {
        dojo.byId("profile").innerHTML = score.window.getProfileMenu();
        // Establish events again
        score.window.setupProfileConnections();
    }

    // Refresh the Profile Menu
    dijit.byId('profile-action-content').set('href', '/score/profile/my-profiles');
    dojo.removeClass('new-profile-pill', 'active');
    dojo.addClass('my-profiles-pill', 'active');
}

score.window.setupProfileConnections = function() {

    if (dojo.byId('profileSelection')) {
        dojo.connect(dojo.byId('profileSelection'), "onclick", function(event){
            event.preventDefault();

            var selectedProfile = event.target.innerHTML;
            console.log("You clicked on: ", selectedProfile);
            console.log("Is profileCategory: ", dojo.hasClass(event.target, 'profileCategory'));
            if (! dojo.hasClass(event.target, 'profileCategory')) {

                // dojo xhrget
                dojo.xhrGet({
                    url: score.constants.URL_PROFILE_CHANGE,
                    content: {name : selectedProfile },
                    load: function(data) {
                        console.log('Profile switch successful');
                        dojo.byId('active-profile-name').innerHTML = selectedProfile;
                        score.data.currentProfile = selectedProfile;
                        score.window.SuccessMsg(selectedProfile + ' is now your active profile.', true);

                        dojo.publish(score.constants.EVENT_PROFILE_CHANGE);
                    },
                    error: function(error) {
                        console.log('Profile switch failed');
                        score.window.ErrorMsg('Unable to set profile.  Please try again and contact support if error persists.');
                    }
                });
            }
        });
    }
};

score.window.editProfile = function(profileName) {
    console.log('You want to edit profile ' + profileName);
    dijit.byId('profile-action-content').set('href', '/score/profile/form?id='+encodeURIComponent(profileName));
    dojo.removeClass('my-profiles-pill', 'active');
    //dojo.addClass('new-profile-pill', 'active');
    //console.log('Clicked on pill');
}

score.window.deleteProfile = function(profileName, profileId) {
    console.log('You want to delete profile ' + profileName);

    dojo.xhrGet({
        url: '/score/profile/delete?id='+encodeURIComponent(profileName),
        load: function(data) {

            score.data.userProfiles = dojo.fromJson(data);
            dojo.style(dojo.byId('profile'+profileId), 'display', 'none');
            score.window.resetProfileMenu();
            score.window.SuccessMsg('Profile has been deleted', true);

        },
        error: function(error) {
            score.window.ErrorMsg(error.responseText);
        }
    });
}

score.window.removeCredential = function(sid, credentialType,rowId) {
    var IMG_LOADING_SMALL = '<img src="/bio/ui/custom/images/mozilla_blu.gif" height="16" width="16" align="left" />';
    score.window.Notify(IMG_LOADING_SMALL + '&nbsp;&nbsp;Requesting credential removal ... please wait.','info');
    dojo.xhrPost({
        url: score.constants.URL_REMOVE_CREDENTIALS + "?sid=" + sid + "&type=" + credentialType,
        handleAs: "text",
        load: function(data, args) {
            score.window.SuccessMsg('The credentials were successfully removed.');

            //var str = "score.window.Dialog.refresh('Credentials','/score/host/dialog/credentials?id=" + sid + "')";
            //setTimeout(str,2000);
            var row = document.getElementById(rowId);
            row.parentNode.removeChild(row);
        },
        error: function(error, args) {
            score.window.ErrorMsg('Failed to remove credentials.');
        }
    });
}

/**
 * Store the results of searches for people through Faces.
 * Each array element holds a (faces) person object
 */
score.window.personCache = [];

/**
 * Fetches a (faces) person object and caches on success
 */
score.window.getBluepagesPerson = function(userEmail, searchEmail) {
    // Initialize search result
    var person = undefined;
    if(!searchEmail) {
        return person;
    }

    // Check cache
    $.each(score.window.personCache, function() {
        if (this.email.toLowerCase() == searchEmail.toLowerCase()) {
            person = this;
            return false; // Break the for-each loop
        }
    });

    // Return if cache hit
    if (person != undefined) {
        return person;
    }

    // Cache miss, lookup
    response = $.parseJSON($.ajax({
        type: 'GET',
        url: 'https://faces.tap.ibm.com/api/find/?q=email:"' + searchEmail + '"&limit=1&images=true&imageSize=55&user=' + userEmail,
        async: false
    }).responseText);

    // valid the result, search faces again if required
    if (response != undefined && response[0].email.toLowerCase() == searchEmail.toLowerCase()) {
        person = response[0];
    }
    else {
        response = $.parseJSON($.ajax({
            type: 'GET',
            url: 'https://faces.tap.ibm.com/api/find/?q=email:"' + searchEmail + '"&images=true&imageSize=55&user=' + userEmail,
            async: false
        }).responseText);

        if (response != undefined) {
            $.each(response, function() {
                if (this.email.toLowerCase() == searchEmail.toLowerCase()) {
                    person = this;
                    return false; // Break the for-each loop
                }
            });
        }
    }

    // Cache user
    if(person != undefined) {
        score.window.personCache.push(person);
    }

    return person;
}

/**
 * Applies a template to a (faces) person object. To be used
 * anywhere an IBMers name is displayed.
 */
score.window.getBluepagesPopover = function(userEmail, searchEmail) {
    // Get the person object
    var person = score.window.getBluepagesPerson(userEmail, searchEmail);

    if (person == undefined) {
        return 'Oops ... this person was not found in BluePages';
    }

    return '<div style="width: 240px;"><img src="' + person["image-url"] + '" style="float: right;" />' +
                       'Name: ' + person.name + '<br />' +
                       'Email: ' + person.email + '<br />' +
                       'Office: ' + person.office + '<br />' +
                       'Phone: ' + person["office-phone"] + '</div>' +
                       '<a href="http://w3.ibm.com/jct03019wt/bluepages/searchByName.wss?uid=' + person.uid + '&task=viewrecord" target="_blank">BluePages Profile</a>';
};

/**
 * Initializes name fields so that bluepages info will be
 * displayed on hover.
 */
score.window.bluepagesConnect = function(userEmail) {
    $('.bluepages-connect').popover({
        title: 'BluePages Info',
        content: function() {
            return score.window.getBluepagesPopover(userEmail, $(this).attr('data-bluepages-email'));
        },
        trigger: 'manual',
        html: true,
        delay: {
            show: 500,
            hide: 100
        }
    }).on('mouseenter', function() {
        var _this = this;
        $(this).popover("show");
        $(this).siblings(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });
    }).on('mouseleave', function() {
        var _this = this;
        setTimeout(function() {
            if (! $('.popover:hover').length) {
                $(_this).popover('hide');
            }
        }, 100);
    }).on('click', function(event) {
        event.preventDefault ? event.preventDefault() : event.returnValue = false;
    });
}


/**
 * Applies a template to a SEP information. To be used
 * on the reports antivirus page.
 */
score.window.getSepPopover = function(autoprotect, insightstatus, bashstatus, proactivestatus) {
    // Get the person object

    return '<div style="width: 240px;">' +
                       'Auto Protect: ' + autoprotect + '<br />' +
                       'Insight Status: ' + insightstatus + '<br />' +
                       'SONAR Status: ' + bashstatus + '<br />' +
                       'Proactive Threat Status: ' + proactivestatus + '<br />' + '</div>';
};

/**
 * Initializes name fields so that SEP Status information will be
 * displayed on hover.
 */
score.window.sepstatusDisplay = function(userEmail) {
    $('.sep-display').popover({
        title: $(this).attr('data-original-title'),
        content: function() {
            return score.window.getSepPopover($(this).attr('data-sep-autoprotect'), $(this).attr('data-sep-insight'), $(this).attr('data-sep-bash'), $(this).attr('data-sep-proactive'));
        },
        trigger: 'manual',
        html: true,
        placement: "left",
        delay: {
            show: 500,
            hide: 100
        }
    }).on('mouseenter', function() {
        var _this = this;
        $(this).popover("show");
        $(this).siblings(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });
    }).on('mouseleave', function() {
        var _this = this;
        setTimeout(function() {
            if (! $('.popover:hover').length) {
                $(_this).popover('hide');
            }
        }, 100);
    }).on('click', function(event) {
        event.preventDefault ? event.preventDefault() : event.returnValue = false;
    });
}




/**
 *
 */
score.search = {};

score.search["feddb"] = new dojo.data.ItemFileReadStore({url: score.constants.STORE_FEDDB});
score.search["schedules"] = new dojo.data.ItemFileReadStore({url: score.constants.STORE_SCHEDULES});
score.search["pools"] = new dojo.data.ItemFileReadStore({url: score.constants.STORE_POOLS});
score.search["groups"] = new dojo.data.ItemFileReadStore({url: score.constants.STORE_GROUPS});
score.search["eamt"] = new dojo.data.ItemFileReadStore({url: score.constants.STORE_EAMT});
score.search["itsas"] = new dojo.data.ItemFileReadStore({url: score.constants.STORE_ITSAS});
score.search["score"] = new dojo.data.ItemFileReadStore({url: score.constants.STORE_SCORE});
score.search["complete"] = new dojo.data.ItemFileReadStore({url: score.constants.STORE_COMPLETE});
score.search["software"] = new dojo.data.ItemFileReadStore({url: score.constants.STORE_SOFTWARE});
score.search["undocumented"] = new dojo.data.ItemFileReadStore({url: score.constants.STORE_UNDOCUMENTED});
score.search["bluepages"] = new dojo.data.ItemFileReadStore({url: score.constants.STORE_BLUEPAGES});

/* Basic search functionality */
score.search.Base = function(searchType) {
    this.store = score.search[searchType];
    this.searchType = searchType;
    this.defaultSearchKey = "";
    this.searchSelects = 0;
    this.searchView = "";
    this.savedSearchName = "";
    this.attachPoint = "dojo-content-main";
    this.savedSearchDiv = "savedSearchDiv";
};

/**
 *  Submits search criteria entered into form
 */
score.search.Base.prototype.submitSearch = function(forDownload) {
    console.log(this.searchType + " search submit");
    // check for undefined
    query = dojo.objectToQuery(dijit.byId(this.searchType + '-criteria-search-form').getValues());
    console.log("q, ", query);

    var valid = true;
    score.window.ClearNotice();
    dojo.query("input[type=text]").forEach(function(node, index, arr){
        var widgetId = node.id;
        if(widgetId.search(/value/g) != -1) {
            console.log("widgetId = " + widgetId);
            console.log("value = " + node.value);
            if(node.value == null || node.value == "") {
                score.window.ErrorMsg("A search value is required.");
                valid = false;
            }
            /*else if(node.value.length < 3) {
                score.window.ErrorMsg("The search value is invalid.");
                valid = false;
            }*/
        }
    });

    if(valid) {
        if (true == forDownload) {
            window.location = score.constants.SEARCH_BASE + '/' + this.searchType + '/' + this.searchView + '?q=searchType='+this.searchType+ '&' +query + '&format=csv';
        } else {
            dijit.byId(this.searchType + '-search-results').attr('href', score.constants.SEARCH_BASE + '/' + this.searchType + '/' + this.searchView + '?q=searchType='+this.searchType+ '&'+query);
            if ( dojo.byId('advanced-search-container') ) {
                if ('complete' == this.searchType) {
                    dojo.byId('advanced-search-container').style.width = "2400px";
                } else {
                    dojo.byId('advanced-search-container').style.width = dojo.byId('advanced-search-form').style.width;
                }
            }
        }
    }
};

/**
 *  Resets search criteria screen
 */
score.search.Base.prototype.resetSearch = function() {
    console.log(this.searchType + " search reset");
    this.searchSelects = 0;
    score.controller.route(dojo.hash());
};

/**
 *  Return the saved search name
 */
score.search.Base.prototype.returnSavedSearchName = function() {
    savedCriteriaSelect = dijit.byId('savedCriteriaSelect');
    return savedCriteriaSelect.displayedValue;
};

/**
 *  Handles an enter key event
 */
score.search.Base.prototype.submitListener = function(event) {
    if ( event.keyCode == dojo.keys.ENTER ) {
        // Unset focus of textbox otherwise value is still empty
        dijit.focus(dijit.byId('search-button').domNode);
        dijit.byId('search-button').onClick();
    }
};

/**
 * Initializes name fields so that bluepages info will be
 * displayed on hover.
 */
score.search.searchTips = function() {
    $('.search-tip').popover({
        title: 'Search Tip',
        content: '<p><strong>Multiple terms</strong><br/>' +
            'Separate multiple search terms with a comma: "dev1, dev2"</p>' +
            '<p><strong>Wildcards</strong><br/>' +
            'Include a * in search value as a wildcard:  "sds*"</p>' +
            '<p><strong>Blank search</strong><br/>' +
            '"blank" is a special search term used to look a field that has NULL or blanks. ' +
            'It only works as a standalone search term.</p>' +
            '<p><strong>Negation search</strong><br/>' +
            'Put "!" as the first character followed by search term for exclusion: "!bobj@us.ibm.com", "!blue*", "!blank"</p>',
        placement: 'bottom',
        trigger: 'manual',
        html: true,
        delay: {
            show: 500,
            hide: 250
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
 *  Handles request to add more search criteria
 */
score.search.Base.prototype.addCriteria = function(key, value) {
    console.log('User requested to add criteria to selection');

    this.searchSelects++;

    console.log('searchSelects', this.searchSelects);

    // Destroy the key and value widgets if present
    field = dijit.byId("field"+this.searchSelects);
    if (field != undefined ) {
        field.destroy();
    }

    field = dijit.byId("value"+this.searchSelects);
    if (field != undefined ) {
        field.destroy();
    }

    // Add div to "-search-select-box" so that we can add fields to it
    dojo.place('<div id="'+this.searchType+'-search-criteria-div-'+this.searchSelects+'"></div>',
            dojo.byId(this.searchType+'-search-select-box'),
            "last");

    // Add another select and text input
    select = new dijit.form.FilteringSelect({ store: this.store,
                                              name: "field"+this.searchSelects,
                                              id: "field"+this.searchSelects
    });
    textbox = new dijit.form.TextBox({ name: "value"+this.searchSelects,
                                       id: "value"+this.searchSelects,
                                       onKeyPress: dojo.hitch(this, this.submitListener)
    });

    searchDiv = dojo.byId(this.searchType+'-search-criteria-div-'+this.searchSelects);

    if (key != undefined) {
        name = this.getStoreItemName(key);
        if ( name != null) {
            select.set('displayedValue', name);
        }
    } else {
        select.set('displayedValue', this.defaultSearchKey);
    }

    if (value != undefined) {
        textbox.set('displayedValue', value);
    }

    select.placeAt(searchDiv, "last");
    textbox.placeAt(searchDiv, "last");

    select.startup();
    textbox.startup();


    this.addMoreCriteriaButton(this.searchSelects);

    if (this.searchSelects > 1 ) {
        this.addRemoveCriteriaButton(this.searchSelects);
    }
};

/**
 *  Handles request to remove more search criteria
 */
score.search.Base.prototype.removeCriteria = function(key, value) {
    console.log('User requested to delete criteria from selection');
    console.log('Deleting criteria: ', this.searchType+'-search-criteria-div-'+key);

    // Destroy the key and value widgets if present
    searchDiv = dojo.byId(this.searchType+'-search-criteria-div-'+key);
    dojo.destroy(searchDiv);

    //Find out if the "search-more" anchor has been deleted
    button = dojo.byId(this.searchType+'-search-more');
    if ( button == undefined) {

        //Remove the "remove-search" button from the last serach div row
        $("[id^=remove-search]").last().remove();

        //Retrieve the last div row in the search collection
         lastDiv = $("[id^="+this.searchType+"-search-criteria-div]").last();

         //Get the "id" attribute from the last div row
         lastId = lastDiv.attr('id');

         //Get the row key from the "id" attribute
         rowKey = lastId.split('-').pop();

         //Add a new "Add more criteria" button to the div defined by the rowKey
         this.addMoreCriteriaButton(rowKey);

         //Add a new "remove row" button to the div defined by the rowKey unless
         // the rowKey value equals 1
         if (rowKey > 1 ) {
             this.addRemoveCriteriaButton(rowKey);
         }
    };
};

/**
 *  Add "Add more criteria" button to last search div
 */
score.search.Base.prototype.addMoreCriteriaButton = function(key) {

    button = dojo.byId(this.searchType+'-search-more');
    if ( button != undefined) {
        dojo.destroy(button);
    };

    searchDiv = dojo.byId(this.searchType+"-search-criteria-div-"+key);
    dojo.place('<a class="btn btn-default btn-xs" id="'+this.searchType+'-search-more" href="#'+dojo.hash()+'"><span class="glyphicon glyphicon-plus"></span> Add more criteria</a>', searchDiv, "last");

    // Connect the add more criteria
    dojo.connect(dojo.byId(this.searchType+'-search-more'), "onclick", this, function() {
        this.addCriteria();
    });
}

/**
 *  Add "Remove criteria" button to last search div
 */
score.search.Base.prototype.addRemoveCriteriaButton = function(key) {

    searchDiv = dojo.byId(this.searchType+"-search-criteria-div-"+key);
    var removeButton = 'remove-search'+key;
    dojo.place('<a class="btn btn-default btn-xs" id="'+removeButton+'" href="#'+dojo.hash()+'"><span class="glyphicon glyphicon-minus"></span></a>', searchDiv, "last");

    // Connect the add remove criteria
    dojo.connect(dojo.byId(removeButton), "onclick", this, function() {
        this.removeCriteria(key);
    });
}

/**
 *  Sets up initial search form
 */
score.search.Base.prototype._initForm = function(node, view) {
    console.log('Initform');

    // The id of a dijit content pane to place search form
    this.attachPoint = (undefined==node) ? this.attachPoint : node;
    // Set when we want the search results to have columns other than default
    this.searchView = (undefined==view) ? '' : view;

    container1 = dijit.byId(this.attachPoint).domNode;

    // Create form
    searchForm = new dijit.form.Form({id: this.searchType+"-criteria-search-form"});

    dojo.place(searchForm.domNode, container1, "last");

    dojo.place('<div id="'+this.searchType+'-search-select-box"></div>', searchForm.domNode, "first");

    // Add buttons
    resetButton = new dijit.form.Button({
        label: "Reset",
       id: "search-reset",
        onClick: dojo.hitch(this, this.resetSearch)
    });

    searchButton = new dijit.form.Button({
        label: "Search",
        id: 'search-button',
        // Need to use hitch so that "this" is this in the submitSearch function
        // instead of this being the search button
        onClick: dojo.hitch(this, this.submitSearch)
    });

    this.searchSelects = 0;
    this.addCriteria();

    dojo.place('<div id="search-buttons"></div>', searchForm.domNode, "last");
    buttonContainer = dojo.byId('search-buttons');
    searchButton.placeAt(buttonContainer, "first");
    resetButton.placeAt(buttonContainer, "first");
    dojo.place('<div style="width:245px; text-align: right; display: inline-block;"><span class="search-tip glyphicon glyphicon-info-sign lightblue" style="font-size: 15px; cursor:help"></span></div>', buttonContainer, "last");

    searchForm.startup();

    // Place results container
    resultsContainer = new dojox.layout.ContentPane({id: this.searchType+"-search-results"});
    dojo.place(resultsContainer.domNode, container1, "last");
    score.search.searchTips();

    console.log("Done starting form!");

};

/**
 *  Saved this search
 */
score.search.saveSearchCriteria = function(searchName) {

    console.log('Save search name -> ', searchName);

    if (searchName == '') {
        score.window.ErrorMsg('You must provide a name in order to save a search');
        return false;
    }

    if (searchName.indexOf('"') !== -1 || searchName.indexOf("'") !== -1) {
        score.window.ErrorMsg('Quotes are not allowed in the search name.');
        return false;
    }

    var _searchType;

    // Get the search type
    dijit.registry.byClass('dijit.form.RadioButton').forEach(function(w){
        if (w.attr("checked") == true) {
            _searchType = w.attr("value");
        }
    });

       searchForm = _searchType + '-criteria-search-form';
    searchParams = dojo.formToJson(searchForm);

    json = '{' +
          '"type":"' + _searchType + '",' +
           '"name":"' + searchName + '",' +
           '"parameters":[' + searchParams + ']}';

    console.log("PUT URL: " + score.constants.SEARCH_ADVANCED + '/' + searchName);
    console.log("PUT Body: " + json);

       score.window.Saving('Saving search criteria');

    dojo.xhrPut({
        url: score.constants.SEARCH_ADVANCED,
        postData: json,
        load: function(data) {
            score.window.SuccessMsg('Search criteria successfully saved.', 3000);
            $("#saveSearchResults").popover("hide");
        },
        error: function(error) {
            score.window.ErrorMsg(error.responseText);
        }
    });
};

/**
 * Rebuilds search form and submits
 */
score.search.Base.prototype.buildSavedSearchParams = function(savedSearch) {
    /* Empty out the search criteria fields */
    div = dojo.byId(this.searchType+'-search-select-box');
    dojo.empty(div);

    first = true;

    dojo.forEach(savedSearch.parameters, dojo.hitch(this, function(criteria) {

        var keys = [];
        for (var property in criteria) {
            keys.push(property);
        }

        key = keys[0];
        value = criteria[key];

        if (dojo.isArray(value)) {
            value = value[0];
        }

        if (first == true) {
            this.searchSelects = 0;
            this.addCriteria(key, value);
            first = false;
        } else {
            this.addCriteria(key, value);
        }
    }));

    this.submitSearch();
};

/**
 *  Return the display name for the supplied key
 */
score.search.Base.prototype.getStoreItemName = function(key) {

    for (var ix in this.store._arrayOfAllItems) {
        record = this.store._arrayOfAllItems[ix];
        if (record.value[0] == key) {
            return record.name[0];
        }
    }

    return null;
};

/**
 *  Delete current selection - pop a confirmation dialog box with the savedCriteria name
 */
score.search.deleteSavedCriteria = function(name) {
    console.log('delete url',score.constants.SEARCH_ADVANCED + '/' + name )
    // @todo remove the return statement below
    // return;

       score.window.Saving();

       dojo.xhrDelete({
           url: score.constants.SEARCH_ADVANCED + '/' + name,
        load: function(data) {
            score.window.SuccessMsg(name + ' successfully deleted.', 3000);
            dojo.destroy(name);
        },
        error: function(error) {
            score.window.ErrorMsg(error.responseText);
        }
    });
};

/**
 * Run saved search from passed in object
 */
score.search.runSavedSearch = function(savedSearch) {
    // Set the radio
    dijit.registry.byClass('dijit.form.RadioButton').forEach(function(w){
        if (w.value == savedSearch.type && w.attr("checked") == false) {
            w.attr("checked", true);
        }
    });

    // Initialize the child search form
    score.search.Advanced.resetForm(savedSearch.type);

    // Run the saved search
    if (savedSearch.type == 'itsas') {
        score.search.Itsas.runSavedSearch(savedSearch);
    }
    if (savedSearch.type == 'score') {
        score.search.Score.runSavedSearch(savedSearch);
    }
    if (savedSearch.type == 'eamt') {
        score.search.Eamt.runSavedSearch(savedSearch);
    }
};

/**
 * Form for user to save their search criteria
 */
score.search.saveSearchDialog = function() {
    return "Give your search a name so you quickly run it again.<br /><br />"
         + "<strong>Name:</strong> <input type='text' name='savedSearchName' id='savedSearchName' /> <br /><br />"
         + "<button class='btn btn-default' onClick='$(\"#saveSearchResults\").popover(\"hide\");'>Cancel</button> "
         + "<button class='btn btn-primary' onClick='score.search.saveSearchCriteria(dojo.attr(\"savedSearchName\", \"value\"));'>Save</button>";
}

/**
 *  Search for systems based off ITSASREP table
 */
score.search.Itsas = function() {
    var searchType = "itsas";
    var _base = new score.search.Base(searchType);
    _base.defaultSearchKey = 'Hostname';

    return {
        addAuditSelection: function(node) {

            dojo.place('<ul id="satAuditPeriod" class="nav nav-pills sat-links">'
                    + '		<li id="current-month-list" class="active" data-month-list-value="current">'
                    + '			<a href="#" id="current-month">This Month</a>'
                    + '		</li>'
                    + '		<li id="next-month-list" data-month-list-value="next">'
                    + '			<a href="#" id="next-month">Next Month</a>'
                    + '		</li>'
                    + '</ul>', node, "first");

            dojo.connect(dojo.byId('current-month'), "onclick", function(evt) {
                evt.preventDefault();
                dojo.removeClass(dojo.byId('next-month-list'));
                dojo.addClass(dojo.byId('current-month-list'), 'active');
            });

            dojo.connect(dojo.byId('next-month'), "onclick", function(evt) {
                evt.preventDefault();
                dojo.removeClass(dojo.byId('current-month-list'));
                dojo.addClass(dojo.byId('next-month-list'), 'active');
            });

            dojo.place('<div class="alert alert-info">'
                     + '    <div>Selections can also be done in bulk. '
                     + '        <a class="btn btn-primary btn-xs" href="#" id="sat-upload"> '
                     + '          <span class="glyphicon glyphicon-download-alt white"></span> Upload selections '
                     + '        </a> '
                     + '    </div>'
                     + '</div>', node, "first");

            dojo.connect(dojo.byId('sat-upload'), 'onclick', function(event){
                event.preventDefault();
                score.window.Dialog.create('SAT Selection Upload', score.constants.URL_SAT_UPLOAD);
            });
        },
        getSearchTitle: function() {
            string = ' Itsas - ' + _base.returnSavedSearchName();
            return string;
        },
        removeSaveSearchButton: function() {
            console.log('Itsas destroy save search button');
            _base.destroySaveCriteriaButton();
        },
        addSaveSearchButton: function() {
            console.log('Itsas add save search button');
            _base.addSaveCriteriaButton();
            dojo.connect(dijit.byId('save-criteria-button'), "onClick", function(e){
                _base.buildSavedSearchDialog();
            });
        },
        submitSearch: function(forDownload) {
            console.log('forDownload', forDownload);
            _base.submitSearch(forDownload);
        },
        runSavedSearch: function(savedSearch) {
            _base.buildSavedSearchParams(savedSearch);
        },
        initForm: function(node, view) {
            _base._initForm(node, view);

            if (view=="sat") {
                this.addAuditSelection(node);
            }
        }
    };
}();

/**
 *  Search for systems based off EAMT table
 */
score.search.Eamt = function() {
    var searchType = "eamt";
    var _base = new score.search.Base(searchType);
    _base.defaultSearchKey = 'Serial Number';

    return {
        submitSearch: function(forDownload) {
            _base.submitSearch(forDownload);
        },
        removeSaveSearchButton: function() {
            _base.destroySaveCriteriaButton();
        },
        getSearchTitle: function() {
            string = ' Physical Inventory (eAMT) - ' + _base.returnSavedSearchName();
            return string;
        },
        addSaveSearchButton: function() {
            console.log('Eamt add save search button');
            _base.addSaveCriteriaButton(this);
            dojo.connect(dijit.byId('save-criteria-button'), "onClick", function(e){
                _base.buildSavedSearchDialog();
            });
        },
        runSavedSearch: function(savedSearch) {
            _base.buildSavedSearchParams(savedSearch);
        },
        initForm: function(node, view) {
            _base._initForm(node, view);
        }
    };
}();

/**
 *  Search for systems based off HOST table
 */
score.search.Score = function() {
    var searchType = "score";
    var _base = new score.search.Base(searchType);
    _base.defaultSearchKey = 'Hostname';

    return {
        submitSearch: function(forDownload) {
            _base.submitSearch(forDownload);
        },
        getSearchTitle: function() {
            string = '  Compliance - ' + _base.returnSavedSearchName();
            return string;
        },
        removeSaveSearchButton: function() {
            _base.destroySaveCriteriaButton();
        },
        addSaveSearchButton: function() {
            console.log('Score add save search button');
            _base.addSaveCriteriaButton(this);
            dojo.connect(dijit.byId('save-criteria-button'), "onClick", function(e){
                _base.buildSavedSearchDialog();
            });
        },
        runSavedSearch: function(savedSearch) {
            _base.buildSavedSearchParams(savedSearch);
        },
        initForm: function(node, view) {
            _base._initForm(node, view);
        }
    };
}();

/**
 *  Search for systems base on any of ITSASREP, Score, eAMT tables
 */
score.search.Complete = function() {
    var searchType = "complete";
    var _base = new score.search.Base(searchType);
    _base.defaultSearchKey = 'Hostname';

    return {
        submitSearch: function(forDownload) {
            _base.submitSearch(forDownload);
        },
        removeSaveSearchButton: function() {
            _base.destroySaveCriteriaButton();
        },
        getSearchTitle: function() {
            string = ' Complete search name - ' + _base.returnSavedSearchName();
            return string;
        },
        addSaveSearchButton: function() {
            console.log('complete add save search button');
            _base.addSaveCriteriaButton(this);
            dojo.connect(dijit.byId('save-criteria-button'), "onClick", function(e){
                _base.buildSavedSearchDialog();
            });
        },
        runSavedSearch: function(savedSearch) {
            _base.buildSavedSearchParams(savedSearch);
        },
        initForm: function(node, view) {
            _base._initForm(node, view);
        }
    };
}();

/**
 *  Search for systems based off UNDOCUMENTED table
 */
score.search.Undocumented = function() {
    var _base = new score.search.Base("undocumented");
    _base.defaultSearchKey = 'Hostname';

    return {
        initForm: function(node, view) {
            _base._initForm(node, view);
        }
    };
}();

score.search.Apars = function() {

    return {
        /* Handles an enter key event */
        submitListener: function(event) {
            if ( event.keyCode == dojo.keys.ENTER ) {
                // Unset focus of textbox otherwise value is still empty
                dijit.focus(dijit.byId('apars-search-button').domNode);
                dijit.byId('apars-search-button').onClick();
            }
        },
        /* Triggers search request */
        submitAparsSearch: function(forDownload) {
            var searchValue = dijit.byId('apars-search-q').value;

            if(dijit.byId('apars-search-q').isValid() && searchValue != "" && searchValue != null)
            {
                console.log("Submitting search value of " + searchValue);
                searchValue = "*" + searchValue + "*";

                if (true == forDownload) {
                    window.location = '/score/search/apars?q='+searchValue + '&format=csv';
                } else {
                    dijit.byId('search-results').attr('href', '/score/search/apars?q='+searchValue);
                }
            }
            else
                dijit.byId('search-results').attr('content','Enter a search value.');
        },
        upcomingAparsDownload: function(date) {
            window.location = '/score/search/upcoming-apars/details?date=' + date + '&format=csv'
        },
        /* Reset search */
        resetAparsSearch: function() {
            dijit.byId('search-results').attr('content','');
            dijit.byId('apars-search-q').reset();
            dijit.byId('apars-search-q').focus();
        },
        /* Sets up an apars search form */
        initForm: function(query) {

            query = (query) ? query : "";

            var searchHelpDiv = dojo.create("div");
            searchHelpDiv.innerHTML = '<br />Enter GSSD advisories, Microsoft MS numbers, or KB article numbers.<br />' +
                                      'Click <strong>search </strong> to see status across SCORe systems.' +
                                      ' <span id="searchHelp" class="glyphicon glyphicon-info-sign lightblue"></span>';

            textBox = new dijit.form.ValidationTextBox({
                id: "apars-search-q",
                name: "apars-search-q",
                value: query,
                trim: true,
                required: true,
                intermediateChanges: true,
                onKeyPress: this.submitListener
            });

            searchButton = new dijit.form.Button({
                id: 'apars-search-button',
                label: 'Search',
                onClick: this.submitAparsSearch
            });

            resetButton = new dijit.form.Button({
                id: 'apars-reset-button',
                label: 'Reset',
                onClick: this.resetAparsSearch
            });

            resultsPane = new dojox.layout.ContentPane({
                id: 'search-results',
                content: ""
            });

            // Place search field and button
            container1 = dojo.create("div");
            container1.appendChild(searchHelpDiv);
            container1.appendChild(textBox.domNode);
            container1.appendChild(searchButton.domNode);
            container1.appendChild(resetButton.domNode);
            container1.appendChild(resultsPane.domNode);

            textBox.startup();
            searchButton.startup();

            setTimeout(function() {
                $('#searchHelp').popover({
                    title: "<strong>Search Tips</strong>",
                    html: true,
                    trigger: 'hover',
                    placement: "bottom",
                    content: 'The GSSD advisory MSS-OAR-E01-2008:2665.2 is also known as MS08-067 and KB958644 so you can search on any of those for results.<br /><br />' +
                             'Some sample searches that would locate this include: <br />' +
                             '<ul><li>MSS-OAR-E01-2008:2665.2</li><li>2008:2665</li><li>MS08-067</li><li>KB958644</li><li>958644</li></ul><br/>' +
                             'This is a fuzzy search automatically so no need to use "*"</div>'
                });
            }, 500);

            // If the query was already provided, start the search
            if (query) {
                searchButton.onClick();
            }

            return container1;
        }
    };
}();

/**
 *
 */
score.search.Delegation = function() {

    return {
        /* Handles an enter key event */
        submitListener: function(event) {
            if ( event.keyCode == dojo.keys.ENTER ) {
                // Unset focus of textbox otherwise value is still empty
                dijit.focus(dijit.byId('delegation-search-button').domNode);
                dijit.byId('delegation-search-button').onClick();
            }
        },
        /* Triggers search request */
        submitDelegationSearch: function() {
            console.log("Submitting search value of " + dijit.byId('delegation-search-q').value);
            dijit.byId('delegation-results').attr('href', '/score/inventory/delegation/systems?person='+dijit.byId('delegation-search-q').value+'&permissions='+dijit.byId('permissions').value+'&type='+dijit.byId('type').value);
        },
        /* Sets up a quick search form */
        initForm: function(query) {

            query = (query) ? query : "";

            dropdown = new dijit.form.Select({
                name: "doesntMatter",
                id: "type",
                style: "width: 195px;",
                options: [
                          {label: "Delegate to user", value:"delegate"},
                          {label: "Remove delegation for user", value:"undelegate"}
                          ]
            });
            textBox = new dijit.form.TextBox({
                id: "delegation-search-q",
                name: "delegation-search-q",
                value: query,
                intermediateChanges: true,
                onKeyPress: this.submitListener
            });

            hiddenTextBox = new dijit.form.TextBox({
                id: "permissions",
                name: "searchTypeValue",
                value: "owner",
                type: "hidden"
            });

            searchButton = new dijit.form.Button({
                id: 'delegation-search-button',
                label: 'Find Systems',
                onClick: this.submitDelegationSearch
            });

                        // Create radio buttons
            ownerRadio = new dijit.form.RadioButton({
                value: 'owner',
                name: 'searchType',
                id: 'searchTypeOwner',
                checked: true,
                onClick: function(){
                    dijit.byId('permissions').attr('value', 'owner');
                    dijit.byId('delegation-results').setContent('');
                }
            });

            delegateRadio = new dijit.form.RadioButton({
                value: 'delegate',
                name: 'searchType',
                id: 'searchTypeDelegate',
                onClick: function(){
                    dijit.byId('permissions').attr('value', 'delegate');
                    dijit.byId('delegation-results').setContent('');
                }
            });

            resultsPane = new dojox.layout.ContentPane({
                id: 'delegation-results',
                content: ""
            });

            // To be removed ...
            title = dojo.create("div", {innerHTML: "<div class=\"well\">You can delegate and undelegate ITSAS systems where you are the Person Responsible or a Delegate.  Choose your role, the action to take, and then enter the email address of the person you would like to add/remove as a delegate.</div>"},
                    dijit.byId('main-pane-content').domNode, "first");

            // Place search field and button
            container1 = dojo.byId('main-pane-content');

            // Add options
            dojo.place("<span>Systems where I am: </span>", container1, "last");
            ownerRadio.placeAt(container1, "last");
            dojo.place("<span> Person Responsible </span>", container1, "last");
            delegateRadio.placeAt(container1, "last");
            dojo.place("<span> Delegate </span><br><br>", container1, "last");

            container1.appendChild(dropdown.domNode);
            container1.appendChild(hiddenTextBox.domNode);
            container1.appendChild(textBox.domNode);
            container1.appendChild(searchButton.domNode);
            container1.appendChild(resultsPane.domNode);

            textBox.startup();
            searchButton.startup();

            setTimeout(function() {
                FacesTypeAhead.init('delegation-search-q', function(person) {return person.email;});
            }, 250);

            // If the query was already provided, start the search
            if (query) {
                searchButton.onClick();
            }
        }
    };
}();

/**
 * Advanced search is a container that holds another full featured search
 */
score.search.Advanced = function() {

    return {

        _init: function() {
            currentSearchType = "itsas";
            searchSelects = null;
            title = "Advanced search";
            attachPoint = "main-pane-content";
        },

        resetForm: function(searchType) {
            console.log("advanced container:", dijit.byId('advanced-search-container'));
            // destroy all traces of old form
            dojo.forEach(dijit.findWidgets(dojo.byId('advanced-search-container')), function(w) {
                w.destroyRecursive();
            });

            // Initialize form
            if ('score' == searchType) {
                score.search.Score.initForm('advanced-search-container');
            } else if ('itsas' == searchType) {
                score.search.Itsas.initForm('advanced-search-container');
            } else if ('eamt' == searchType) {
                score.search.Eamt.initForm('advanced-search-container');
            } else if ('complete' == searchType) {
                score.search.Complete.initForm('advanced-search-container');
            }
        },
        /* Sets up advanced search form */
        initForm: function() {

            this._init();

            // Initialize stores to prevent race condition when running of saved search
            score.search["eamt"].fetch();
            score.search["itsas"].fetch();
            score.search["score"].fetch();
            score.search["complete"].fetch();

            // Create form
            searchForm = new dijit.form.Form({id: "advanced-search-form"});

            dojo.place(searchForm.domNode, dijit.byId('main-pane-content').domNode, "last");
            dojo.place('<div id="searchTypeGroup"></div>',
                    searchForm.domNode, "first");

            // Create radio buttons
            itsasRadio = new dijit.form.RadioButton({
                value: 'itsas',
                name: 'searchType',
                id: 'searchTypeItsas',
                checked: true
            });

            scoreRadio = new dijit.form.RadioButton({
                value: 'score',
                name: 'searchType',
                id: 'searchTypeScore'
            });

            eamtRadio = new dijit.form.RadioButton({
                value: 'eamt',
                name: 'searchType',
                id: 'searchTypeEamt'
            });

            completeRadio = new dijit.form.RadioButton({
                value: 'complete',
                name: 'searchType',
                id: 'searchTypeComplete'
            });

            container1 = dojo.byId('searchTypeGroup');
            itsasRadio.placeAt(container1, "last");
            dojo.place("<span> ITSAS </span>", container1, "last");
            scoreRadio.placeAt(container1, "last");
            dojo.place("<span> Compliance </span>", container1, "last");
            eamtRadio.placeAt(container1, "last");
            dojo.place("<span> Physical inventory (eAMT) </span>", container1, "last");
            completeRadio.placeAt(container1, "last");
            dojo.place("<span> Complete Search </span>", container1, "last");
            dojo.place('<button id="savedSearchButton" type="button" class="btn btn-default btn-xs">Saved Search List</button>', container1, 'last');

            searchForm.startup();

            searchContainer = new dojox.layout.ContentPane({id: "advanced-search-container"});
            dojo.place(searchContainer.domNode, dijit.byId('main-pane-content').domNode, "last");

            score.search.Itsas.initForm('advanced-search-container');

            // Connect radio button selections
            dojo.connect(dojo.byId('searchTypeGroup'), "onclick", this, function(e){
                if (undefined != e.target.value) {
                    console.log("clicked on radio for ", e.target.value);
                    this.resetForm(e.target.value);
                }
            });

            // Connect saved search list button
            dojo.connect(dojo.byId('savedSearchButton'), "onclick", function(e){
                console.log('Time to work with saved searches!!!');

                score.window.Dialog.create('Saved Search List', score.constants.SEARCH_USER_SAVED);
                // Prevent the radio onClick from firing
                if (e.stopPropagation) {
                    e.stopPropagation();
                } else {
                    window.event.cancelBubble = true;
                }
            });
        }
    };
}();

/**
 * This function is called from the scheduling-poolinggrouping view to initialize the feddb search form for assinging reasources to pools
 */
score.search.Feddb = function()
{
    var searchType = "feddb";
    var _base = new score.search.Base(searchType);
    _base.defaultSearchKey = 'Hostname';

    return {

        _init: function()
        {
            currentSearchType = "feddb";
            searchSelects = null;
            title = "FEDDB";
            attachPoint = "pooling-pane";
        },

        resetForm: function(searchType)
        {
            console.log("feddb container:", dijit.byId('feddb-search-container'));
            // destroy all traces of old form
            dojo.forEach(dijit.findWidgets(dojo.byId('feddb-search-container')), function(w)
            {
                w.destroyRecursive();
            }
            );

            score.search.Feddb.initForm('feddb-search-container');
        },

        submitSearch: function(forDownload) {
            console.log('forDownload', forDownload);
            _base.submitSearch(forDownload);
        },

        /* Sets up advanced search form */
        initForm: function(node, view)
        {

            this._init();

            var headerInfo = "<div class=\"well\">This section of pooling and grouping allows the user " +
                    "to search on a number of different asset fields in order to locate a record or records" +
                    " and assign them to pools.</div>";

            // Add Header
            dojo.place(headerInfo, dijit.byId('pooling-pane').domNode, "last");

            // Create form
            searchForm = new dijit.form.Form({id: "feddb-search-form"});
            dojo.place(searchForm.domNode, dijit.byId('pooling-pane').domNode, "last");

            searchForm.startup();

            searchContainer = new dojox.layout.ContentPane({id: "feddb-search-container"});
            dojo.place(searchContainer.domNode, dijit.byId('pooling-pane').domNode, "last");

            console.log("_base._initForm");
            _base._initForm('feddb-search-container', view);

        }
    };
}();

/**
 * This function is called from the scheduling-scheduling view to initialize the asset search form for scheduling assets
 */
score.search.Schedules = function()
{
    var searchType = "schedules";
    var _base = new score.search.Base(searchType);
    _base.defaultSearchKey = 'Hostname';

    return {

        //console.log("search.js - search.Pools");

        _init: function()
        {
            currentSearchType = "schedules";
            searchSelects = null;
            title = "SCHEDULES";
            attachPoint = "scheduling-pane";
        },

        resetForm: function(searchType)
        {
            console.log("schedules container:", dijit.byId('schedules-search-container'));
            // destroy all traces of old form
            dojo.forEach(dijit.findWidgets(dojo.byId('schedules-search-container')), function(w)
            {
                w.destroyRecursive();
            }
            );

            score.search.Schedules.initForm('schedules-search-container');
        },

        submitSearch: function(forDownload) {
            console.log('forDownload', forDownload);
            _base.submitSearch(forDownload);
        },

        /* Sets up advanced search form */
        initForm: function(node, view)
        {
            this._init();

            var headerInfo = "<div class=\"well\">This area of scheduling allows the user to search on a " +
                    "number of different asset fields in order to locate a record or records and change " +
                    "their current scheduling information.  After searching on one or more asset fields a " +
                    "user will be presented with a table of selectable assets and two buttons for downloading " +
                    "or updating the contact information.  " +
                    "<a href=\"https://w3-connections.ibm.com/wikis/home/wiki/Wf797bcba00be_497e_a48a_db94b0d8060c/page/Scheduling?section=schedulesearch\" target=\"_blank\">More Information</a></div>";

            // Add Header
            dojo.place(headerInfo, dijit.byId('scheduling-pane').domNode, "last");

            // Create form
            searchForm = new dijit.form.Form({id: "schedules-search-form"});
            if (dijit.byId('scheduling-pane') == undefined) console.log("scheduling-pane undefined!");
            dojo.place(searchForm.domNode, dijit.byId('scheduling-pane').domNode, "last");

            searchForm.startup();

            searchContainer = new dojox.layout.ContentPane({id: "schedules-search-container"});
            dojo.place(searchContainer.domNode, dijit.byId('scheduling-pane').domNode, "last");
            _base._initForm('schedules-search-container', view);

        }
    };
}();

/**
 * This function is called from the scheduling-poolinggrouping view to initialize the pool search form for assinging pools to groups
 */
score.search.Pools = function()
{
    var searchType = "pools";
    var _base = new score.search.Base(searchType);
    _base.defaultSearchKey = 'Pool Name';

    return {

        //console.log("search.js - search.Pools");

        _init: function(assignAttachPoint)
        {
            currentSearchType = "pools";
            searchSelects = null;
            title = "POOLS";
            //attachPoint = "pooling-pane";
            attachPoint = assignAttachPoint;
            console.log("pools.search init attachpoint set to " + attachPoint);
        },

        resetForm: function(searchType)
        {
            console.log("pools container:", dijit.byId('pools-search-container'));
            // destroy all traces of old form
            dojo.forEach(dijit.findWidgets(dojo.byId('pools-search-container')), function(w)
            {
                w.destroyRecursive();
            }
            );

            score.search.Feddb.initForm('pools-search-container');
        },

        submitSearch: function(forDownload) {
            console.log('forDownload', forDownload);
            _base.submitSearch(forDownload);
        },

        /* Sets up advanced search form */
        initForm: function(node, view)
        {
            if (view == "assigngrouppools") {
                assignAttachPoint = "pooling-pane";
            }
            else if (view == "grouppools") {
                assignAttachPoint = "grouppools-pane";
            }
            else {
                assignAttachPoint = "poollist-pane";
            }

            console.log("...pools search view passed in " + view);
            console.log("...assignAttachPoint set to " + assignAttachPoint);

            this._init(assignAttachPoint);

            // Create form
            searchForm = new dijit.form.Form({id: "pools-search-form"});
            dojo.place(searchForm.domNode, dijit.byId(assignAttachPoint).domNode, "last");

            searchForm.startup();

            searchContainer = new dojox.layout.ContentPane({id: "pools-search-container"});
            dojo.place(searchContainer.domNode, dijit.byId(assignAttachPoint).domNode, "last");
            console.log("_base._initForm");
            _base._initForm('pools-search-container', view);

        }
    };
}();


/**
 * This function is called from the scheduling-poolinggrouping view to initialize the group search form for assinging pools to groups
 */
score.search.Groups = function()
{
    var searchType = "groups";
    var _base = new score.search.Base(searchType);
    _base.defaultSearchKey = 'Group Name';
    console.log("search.Groups Starting...");

    return {

        _init: function()
        {
            currentSearchType = "groups";
            searchSelects = null;
            title = "GROUPS";
            attachPoint = "grouping-pane";
            console.log("search.Groups initialized vars");
        },

        resetForm: function(searchType)
        {
            console.log("groups container:", dijit.byId('groups-search-container'));
            // destroy all traces of old form
            dojo.forEach(dijit.findWidgets(dojo.byId('groups-search-container')), function(w)
            {
                w.destroyRecursive();
            }
            );

            score.search.Feddb.initForm('groups-search-container');
        },

        submitSearch: function(forDownload) {
            console.log("search.Groups submitSearch for download");
            console.log('forDownload', forDownload);
            _base.submitSearch(forDownload);
        },

        /* Sets up advanced search form */
        initForm: function(node, view)
        {

            this._init();

            // Create form
            searchForm = new dijit.form.Form({id: "groups-search-form"});
            dojo.place(searchForm.domNode, dijit.byId('pooling-pane').domNode, "last");

            searchForm.startup();

            searchContainer = new dojox.layout.ContentPane({id: "groups-search-container"});
            dojo.place(searchContainer.domNode, dijit.byId('pooling-pane').domNode, "last");

            console.log("search.Groups _base._initForm");
            _base._initForm('groups-search-container', view);

        }
    };
}();


/**
 *
 */
score.search.Software = function() {
    var title = "Software search",
    attachPoint = "main-pane-content";

    return {

        _init: function() {
            title = "Software search";
            attachPoint = "main-pane-content";
        },
        /* Handles an enter key event */
        submitListener: function(event) {
            if ( event.keyCode == dojo.keys.ENTER ) {
                // Unset focus of textbox otherwise value is still empty
                dijit.focus(dijit.byId('search-button').domNode);
                dijit.byId('search-button').onClick();
            }
        },
        /* Triggers search request */
        submitSearch: function(forDownload) {
            searchValue = dijit.byId('softwareValue').value;

            if((searchValue != null && searchValue != "" && searchValue != undefined) &&
                dijit.byId('softwareSelect').isValid())
            {
                query = dojo.objectToQuery(dijit.byId('software-search-form').getValues());
                console.log("query = ", query);
                searchType = dijit.byId('softwareSelect').get('displayedValue');
                console.log("searchType = ", searchType);

                if(searchType == 'Application')
                    searchType = 'Middleware';

                if (true == forDownload) {
                    window.location = '/score/search/' + searchType.toLowerCase() + '?q='+dijit.byId('softwareValue').value + '&format=csv';
                } else {
                    dijit.byId('search-results').attr('href', '/score/search/' + searchType.toLowerCase() + '?q='+dijit.byId('softwareValue').value);
                }
            }
            else
                score.window.ErrorMsg("Please enter search values before submitting.");
        },
        /* Sets up advanced search form */
        initForm: function() {

            this._init();

            //Create page title
            //title = dojo.create("div", {innerHTML: "<p class=\"ibm-intro\"><em>Software search</em></p>"},
            //    dijit.byId('main-pane-content').domNode, "last");

            // Create form
            searchForm = new dijit.form.Form({id: "software-search-form"});

            dojo.place(searchForm.domNode, dijit.byId('main-pane-content').domNode, "last");
            dojo.place('<div id="searchTypeGroup"></div><div id="search-select-box"><div id="primary-criteria"></div></div>',
                    searchForm.domNode, "first");

            // Create select and text inputs
            primarySelect = new dijit.form.FilteringSelect({ id: "softwareSelect", name: "softwareSelect", store: score.search["software"] });
            primarySelect.set('displayedValue', 'Application');
            primaryInput = new dijit.form.TextBox({ id: "softwareValue", name: "softwareValue", onKeyPress: score.search.Software.submitListener, intermediateChanges: true });

            // Add buttons
            resetButton = new dijit.form.Button({
                label: "Reset",
                id: "search-reset",
                onClick: function(){score.controller.route('security-software');}
            });

            searchButton = new dijit.form.Button({
                label: "Search",
                id: 'search-button',
                onClick: this.submitSearch
            });

            container1 = dojo.byId('searchTypeGroup');
            dojo.place("<span>Search type:</span>", container1, "last");

            container1 = dojo.byId('primary-criteria');
            primaryInput.placeAt(container1, "first");
            primarySelect.placeAt(container1, "first");

            dojo.place('<div id="search-buttons"></div>', searchForm.domNode, "last");
            buttonContainer = dojo.byId('search-buttons');
            searchButton.placeAt(buttonContainer, "first");
            resetButton.placeAt(buttonContainer, "first");

            searchForm.startup();

            // Place results container
            resultsContainer = new dojox.layout.ContentPane({id: "search-results"});
            dojo.place(resultsContainer.domNode, dijit.byId('main-pane-content').domNode, "last");
        }
    };
}();

/**
 *
 */
score.search.Bluepages = function() {
    var attachPoint = "pop-content";

    return {

        _init: function() {
            attachPoint = "pop-content";
        },
        /* Handles an enter key event */
        submitListener: function(event) {
            if ( event.keyCode == dojo.keys.ENTER ) {
                // Unset focus of textbox otherwise value is still empty
                dijit.focus(dijit.byId('search-button').domNode);
                dijit.byId('search-button').onClick();
            }
        },
        /* Triggers search request */
        submitSearch: function() {
            searchValue = dijit.byId('searchValue').value;

            if((searchValue != null && searchValue != "" && searchValue != undefined) &&
                dijit.byId('searchTypeSelect').isValid() && dijit.byId('searchValue').isValid())
            {
                query = dojo.objectToQuery(dijit.byId('bluepages-search-form').getValues());
                console.log("query = ", query);

                dijit.byId('search-results').attr('href', '/score/search/bluepages/search?' + query);
            }
            else {
                //score.window.ErrorMsg("Please enter search values before submitting.");
                dijit.byId('search-results').attr('content','<div class="alert alert-danger"><a class="close" onclick="$(\'.alert\').hide()"  href="#">x</a><div>Please enter a value before searching.</div></div>');
            }
        },
        /* Sets up advanced search form */
        initForm: function() {

            this._init();

            // Create form
            searchForm = new dijit.form.Form({id: "bluepages-search-form"});

            dojo.place(searchForm.domNode, dijit.byId('pop-content').domNode, "last");
            dojo.place('<div id="searchTypeGroup"></div><div id="search-select-box"><div id="primary-criteria"></div></div>',
                    searchForm.domNode, "first");

            // Create select and text inputs
            primarySelect = new dijit.form.FilteringSelect({ id: "searchTypeSelect", name: "searchTypeSelect", store: score.search["bluepages"] });
            primarySelect.set('displayedValue', 'Name');
            primaryInput = new dijit.form.ValidationTextBox({ id: "searchValue", name: "searchValue", required: true, onKeyPress: score.search.Bluepages.submitListener, intermediateChanges: true });

            // Add buttons
            searchButton = new dijit.form.Button({
                label: "Go",
                id: 'search-button',
                onClick: this.submitSearch
            });

            container1 = dojo.byId('searchTypeGroup');
            dojo.place("<span>Search type:</span>", container1, "last");

            container1 = dojo.byId('primary-criteria');
            primaryInput.placeAt(container1, "first");
            primarySelect.placeAt(container1, "first");

            dojo.place('<div id="search-buttons"></div>', searchForm.domNode, "last");
            buttonContainer = dojo.byId('search-buttons');
            searchButton.placeAt(buttonContainer, "first");

            searchForm.startup();

            // Place results container
            resultsContainer = new dojox.layout.ContentPane({id: "search-results"});
            dojo.place(resultsContainer.domNode, dijit.byId('pop-content').domNode, "last");
        }
    };
}();
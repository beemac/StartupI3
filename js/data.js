/**
 *
 */
score.data = {};

/* Generic object to be extended by other models that use a grid and basic CRUD operations */
score.data.Model = function(url, api) {
    this._storeUrl = url;
    this._store = new dojo.data.ItemFileWriteStore({ url: this._storeUrl});
    this._item = null;
    this._grid = null;
    this._api = api;
    this._layout = null;
    this._contextMenu = null;
};
/* Refreshes grid associated with model */
score.data.Model.prototype.refreshGrid = function() {
    // Ensure this is called with Model as scope, use dojo.hitch(model, refreshGrid) if needed
    this._store = new dojo.data.ItemFileWriteStore({ url: this._storeUrl});
    this._grid.setStore(this._store);
};
/* Calls to delete item from models local store */
score.data.Model.prototype.deleteItemFromStore = function(items, request){
    for (var i=0; i < items.length; i++) {
        this._store.deleteItem(items[i]);
    }

    this._store.save({onComplete: score.data.saveDone, onError: score.data.saveFailed});
    // Display success message
    score.window.SuccessMsg("Item sucessfully removed.");
};
/* What to do when a row is selected */
score.data.Model.prototype.onRowSelect = function(event) {
    // Called in context of score.data.Model ... this == score.data.Model object
    console.log("event", event);
    if (event.rowIndex != null) {
        this._grid.selection.clear();
        this._grid.selection.setSelected(event.rowIndex, true);

        this._item = event.grid.getItem(event.rowIndex);
        this._contextMenu.bindDomNode(event.grid.domNode);
    }
};
/* Start grid associated with model */
score.data.Model.prototype.startGrid = function() {
    // Create div to place grid
    dijit.byId('main-pane-content').attr('content', '<div id="score-grid" style="height: 100%;"></div>');

    this._grid = new dojox.grid.EnhancedGrid({
        id: 'grid',
        store: this._store,
        structure: this._layout,
        "class": "claro",
        plugins: {
                //filter: {closeFilterbarButton: true, ruleCount: 4, itemsName: "articles"},
                nestedSorting: true,
                pagination: { pageSizes: ["25", "50", "100", "All"],
                              description: true,
                              sizeSwitch: true,
                              pageStepper: true,
                              position: "top" }
            }
    }, document.createElement('div'));

    dojo.byId('score-grid').appendChild(this._grid.domNode);
    this._grid.startup();
};
/* What to do when we edit an item */
score.data.Model.prototype._editItem = function(json) {
    // Keep scope in xhrPut
    self = this;
    // Notify of activity
    score.window.Saving();

    dojo.xhrPut({ url: self._api,
                  putData: json,
                  load: function(data) {
                      // We enter this callback when the request generates a 200 success
                      // The body contained in data is the JSON of our new article (id is now added)
                      // Close dialog
                      score.window.Dialog.destroy();
                      // Refresh the store
                      self.refreshGrid();
                      // Display success message
                      setTimeout("score.window.SuccessMsg('Item successfully updated.')",1500);
                  },
                  error: function(error) {
                      // We enter this callback when our request generates a non-200 response
                      console.log(error.repsonseText);
                      score.window.ErrorMsg(error.responseText);
                  }
    });
};
/* When to do when adding an item */
score.data.Model.prototype._addItem = function(json) {
    // Keep scope in xhrPost
    console.log("Supplied json:", json);
    self = this;
    // Notify of activity
    score.window.Saving();

    dojo.xhrPost({
        url: self._api,
        postData: json,
        load: function(data) {
            // We enter this callback when the request generates a 200 success
            // The body contained in data is the JSON of our new article (id is now added)
            // Add the new article to our store
            console.log("response json:", data);
            self._store.newItem(dojo.fromJson(data));
            self._store.save({onComplete: score.data.saveDone, onError: score.data.saveFailed});
            // Close dialog
            score.window.Dialog.destroy();
            self.refreshGrid();
            // Display success message
            setTimeout("score.window.Notify('Item successfully added.')",1000);
        },
        error: function(error) {
            // We enter this callback when our request generates a non-200 response
            console.log(error.repsonseText);
            score.window.ErrorMsg(error.responseText);
        }
    });
};
/* What to do when deleting an item */
score.data.Model.prototype._deleteItem = function() {
    // Keep scope in xhrDelete
    self = this;
    
    if(confirm("Do you want to delete this item?")){
    	score.window.Saving();
    	// Call REST service to delete
        dojo.xhrDelete({
            url: self._api + '/id/' + self._item.id[0],
            load: function(data) {
                // We enter this callback when the request generates a 200 success
                // The body contained in data is the JSON of our new article (id is now added)
                self._store.fetch({
                    query: {id: self._item.id[0]},
                    onComplete: dojo.hitch(self, self.deleteItemFromStore)
                });
            },
            error: function(error) {
                // We enter this callback when our request generates a non-200 response
                console.log(error.repsonseText);
                score.window.ErrorMsg(error.responseText);
            }
        });
    }
};

/* Generic callback for successful data store saves */
score.data.saveDone = function() {
    console.log("Done saving");
};
/* Generic callback for failed data store saves */
score.data.saveFailed = function() {
    console.log("Save failed");
};
/* Generic Y/N to Yes/No formatter */
score.data.formatYesNo = function(value) {
    return ((value.replace(/^\s\s*/, '').replace(/\s\s*$/, ''))=='Y') ? "Yes" : "No";
};
/* Generic email to html mailto anchor */
score.data.formatMailTo = function(value) {
    if((value.replace(/^\s\s*/, '').replace(/\s\s*$/, '')) != '')
        return '<a href="mailto:' + value + '">' + value + '</a>';
    else
        return value;
};

score.data.formatViews = function(value) {
    var viewsStr = "";
    var arr = value.split(",");
    for(var i = 0; i < arr.length; i++)
        viewsStr+=arr[i]+'<br />';
    return viewsStr;
};

// Need to ensure data stores, grids, etc are available from dojo
dojo.ready(function(){
    /* News model */
    score.data.News  = function() {

        var model = new score.data.Model("news/?data-store=1", score.constants.API_NEWS),
            layout = [  {name: "Headline", field: "headline", width: "240px"},
                        {name: "Content", field: "content", width: "100%"},
                        {name: "Important", field: "important", formatter: score.data.formatYesNo},
                        {name: "Archived", field: "archived", formatter: score.data.formatYesNo},
                        {name: "Created", field: "created"}
                     ];

        return {
            /* Dialog for a new item */
            newDialog: function() {
                score.window.Dialog.create('New Article', score.constants.DIALOG_NEWS);
            },
            /* Calls to create new item on server */
            newItem: function(json) {
                model._addItem(json);
            },
            /* Dialog to edit an item */
            editDialog: function() {
                score.window.Dialog.create('Edit Article', score.constants.DIALOG_NEWS, '{"id": ' + model._item.id[0] + ' }');
            },
            /* Calls to edit item on server */
            editItem: function(json) {
                model._editItem(json);
            },
            /* Calls to delete item from server */
            deleteItem: function() {
                model._deleteItem();
            },
            /* Create context menu for grid */
            addContextMenu: function() {
                // Menu is specific to News
                if (model._contextMenu == null) {
                    model._contextMenu = new dijit.Menu({targetNodeIds: ["score-grid"], style: 'display: none;'});

                    model._contextMenu.addChild(new dijit.MenuItem({label: "New Article", onClick: this.newDialog}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Edit Article", onClick: this.editDialog}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Delete Article", onClick: this.deleteItem}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Refresh", onClick: dojo.hitch(model, model.refreshGrid)}));
                    model._contextMenu.startup();
                }
                // Attach context menu specific to News
                dojo.connect(model._grid, "onRowContextMenu", null, dojo.hitch(model, model.onRowSelect));
            },
            /* Create CRUD grid */
            showGrid: function() {
                // Setup the grid
                model._layout = layout;
                model.startGrid();
                this.addContextMenu();
            }
        };
    }();


    /* Locations model */
    score.data.Locations  = function() {

        var model = new score.data.Model("location/?data-store=1", score.constants.API_LOCATION),
            layout = [  {name: "Org", field: "view" },
                        {name: "Site", field: "description", width: "100%" },
                        {name: "Power 9", field: "power9", formatter: score.data.formatYesNo},
                        {name: "Cflocation", field: "cfLocation" },
                        {name: "Focal", field: "focal"},
                        {name: "Region", field: "region"},
                        {name: "Country", field: "country"},
                        {name: "Queue 1", field: "queue1" },
                        {name: "Queue 2", field: "queue2" }
                     ];

        return {
            /* Dialog for a new item */
            newDialog: function() {
                score.window.Dialog.create('New Location', score.constants.DIALOG_LOCATIONS);
            },
            /* Calls to create new item on server */
            newItem: function(json) {
                model._addItem(json);
            },
            /* Dialog to edit an item */
            editDialog: function() {
                score.window.Dialog.create('Edit Location', score.constants.DIALOG_LOCATIONS, '{"id":"' + model._item.id[0] + '"}');
            },
            /* Calls to edit item on server */
            editItem: function(json) {
                model._editItem(json);
            },
            /* Calls to delete item from server */
            deleteItem: function() {
                model._deleteItem();
            },
            /* Create context menu for grid */
            addContextMenu: function() {
                // Menu is specific to News
                if (model._contextMenu == null) {
                    model._contextMenu = new dijit.Menu({targetNodeIds: ["score-grid"], style: 'display: none;'});

                    model._contextMenu.addChild(new dijit.MenuItem({label: "New Location", onClick: this.newDialog}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Edit Location", onClick: this.editDialog}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Delete Location", onClick: this.deleteItem}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Refresh", onClick: dojo.hitch(model, model.refreshGrid)}));
                    model._contextMenu.startup();
                }
                // Attach context menu specific to News
                dojo.connect(model._grid, "onRowContextMenu", null, dojo.hitch(model, model.onRowSelect));
            },
            /* Create CRUD grid grid */
            showGrid: function() {
                // Setup the grid
                model._layout = layout;
                model.startGrid();
                this.addContextMenu();
            }
        };
    }();


    /* OSSupport model */
    score.data.OSSupport  = function() {

        var model = new score.data.Model("osdefinition/?data-store=1", score.constants.API_OSSUPPORT),
            layout = [  {name: "OS Name", field: "os"},
                        {name: "EOL Date", field: "eol"},
                        {name: "Compliant", field: "flag", formatter: score.data.formatYesNo},
                        {name: "Reference", field: "reference", width: "50%"},
                     ];

        return {
            /* Dialog for a new item */
            newDialog: function() {
                score.window.Notify("");
                score.window.Dialog.create('New OS Definition', score.constants.DIALOG_OSSUPPORT);
            },
            /* Calls to create new item on server */
            newItem: function(json) {
                score.window.Notify("");
                model._addItem(json);
            },
            /* Dialog to edit an item */
            editDialog: function() {
                score.window.Notify("");
                score.window.Dialog.create('Edit OS Definition', score.constants.DIALOG_OSSUPPORT, '{"id":"' + model._item.id[0] + '"}');
            },
            /* Calls to edit item on server */
            editItem: function(json) {
                score.window.Notify("");
                model._editItem(json);
            },
            /* Calls to delete item from server */
            deleteItem: function() {
                score.window.Notify("");
                model._deleteItem();
            },
            /* Create context menu for grid */
            addContextMenu: function() {
                // Menu is specific to News
                if (model._contextMenu == null) {
                    model._contextMenu = new dijit.Menu({targetNodeIds: ["score-grid"], style: 'display: none;'});

                    model._contextMenu.addChild(new dijit.MenuItem({label: "New OS Definition", onClick: this.newDialog}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Edit OS Definition", onClick: this.editDialog}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Delete OS Definition", onClick: this.deleteItem}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Refresh", onClick: dojo.hitch(model, model.refreshGrid)}));
                    model._contextMenu.startup();
                }
                // Attach context menu specific to News
                dojo.connect(model._grid, "onRowContextMenu", null, dojo.hitch(model, model.onRowSelect));
            },
            /* Create CRUD grid */
            showGrid: function() {
                // Setup the grid
                model._layout = layout;
                model.startGrid();
                this.addContextMenu();
            }
        };
    }();

    /* Todos model */
    score.data.Todos  = function() {

        var model = new score.data.Model("todos/definition/?data-store=1", score.constants.API_TODOS),
            layout = [  {name: "Category", field: "category"},
                        {name: "Description", field: "description", width: "25%"},
                        {name: "Resolution", field: "resolution", width: "25%"},
                        {name: "Assertion Based", field: "assertion", formatter: score.data.formatYesNo},
                        {name: "Reassert", field: "reassert"}
                     ];

        return {
            /* Dialog for a new item */
            newDialog: function() {
                score.window.Notify("");
                score.window.Dialog.create('New Todo Definition', score.constants.DIALOG_TODOS);
            },
            /* Calls to create new item on server */
            newItem: function(json) {
                score.window.Notify("");
                model._addItem(json);
            },
            /* Dialog to edit an item */
            editDialog: function() {
                score.window.Notify("");
                score.window.Dialog.create('Edit Todo Definition', score.constants.DIALOG_TODOS, '{"id":"' + model._item.id[0] + '"}');
            },
            /* Calls to edit item on server */
            editItem: function(json) {
                score.window.Notify("");
                model._editItem(json);
            },
            /* Calls to delete item from server */
            deleteItem: function() {
                score.window.Notify("");
                model._deleteItem();
            },
            /* Create context menu for grid */
            addContextMenu: function() {
                // Menu is specific to News
                if (model._contextMenu == null) {
                    model._contextMenu = new dijit.Menu({targetNodeIds: ["score-grid"], style: 'display: none;'});

                    model._contextMenu.addChild(new dijit.MenuItem({label: "New Todo Definition", onClick: this.newDialog}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Edit Todo Definition", onClick: this.editDialog}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Delete Todo Definition", onClick: this.deleteItem}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Refresh", onClick: dojo.hitch(model, model.refreshGrid)}));
                    model._contextMenu.startup();
                }
                // Attach context menu specific to News
                dojo.connect(model._grid, "onRowContextMenu", null, dojo.hitch(model, model.onRowSelect));
            },
            /* Create CRUD grid */
            showGrid: function() {
                // Setup the grid
                model._layout = layout;
                model.startGrid();
                this.addContextMenu();
            }
        };
    }();

    /* User model */
    score.data.User  = function() {

        var model = new score.data.Model("user/?data-store=1", score.constants.API_USER),
            layout = [  {name: "Lotus Notes ID", field: "empNotesId", width: "18%"},
                        {name: "Email", field: "id", width: "17%", formatter: score.data.formatMailTo},
                        {name: "Role", field: "role",width: "10%"},
                        {name: "Division", field: "divisions",width: "15%"},
                        {name: "Updated On", field: "updateTimestamp",width: "10%"},
                        {name: "Justification", field: "justification", width: "25%"},
                        {name: "Is Mgr", field: "mgrFlag",width: "5%"}
                     ];

        return {
            /* Dialog for a new item */
            newDialog: function() {
                score.window.Notify("");
                score.window.Modal.create('New User', score.constants.DIALOG_USERS,'','Save','');
            },
            /* Calls to create new item on server */
            newItem: function(json) {
                score.window.Notify("");
                model._addItem(json);
            },
            /* Dialog to edit an item */
            editDialog: function() {
                score.window.Notify("");
                score.window.Modal.create('Edit User', score.constants.DIALOG_USERS,'{"id":"' + model._item.id[0] + '"}','Save','');
            },
            /* Calls to edit item on server */
            editItem: function(json) {
                score.window.Notify("");
                model._editItem(json);
            },
            /* Calls to delete item from server */
            deleteItem: function() {
                score.window.Notify("");
                model._deleteItem();
            },
            /* Create context menu for grid */
            addContextMenu: function() {
                // Menu is specific to News
                if (model._contextMenu == null) {
                    model._contextMenu = new dijit.Menu({targetNodeIds: ["score-grid"], style: 'display: none;'});

                    model._contextMenu.addChild(new dijit.MenuItem({label: "New User", onClick: this.newDialog}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Edit User", onClick: this.editDialog}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Delete User", onClick: this.deleteItem}));
                    model._contextMenu.addChild(new dijit.MenuItem({label: "Refresh", onClick: dojo.hitch(model, model.refreshGrid)}));
                    model._contextMenu.startup();
                }
                // Attach context menu specific to News
                dojo.connect(model._grid, "onRowContextMenu", null, dojo.hitch(model, model.onRowSelect));
            },
            /* Create CRUD grid */
            showGrid: function() {
                // Setup the grid
                model._layout = layout;
                model.startGrid();
                this.addContextMenu();
            }
        };
    }();

    score.data.Todo = function() {
        return {
            assert: function(sid, id) {
                console.log("You would like to asset " + sid + " with id " + id);

                dojo.xhrPut({
                    url: score.constants.API_TODO_ASSERT,
                    putData: '{"sid": ' + sid + ', "id":' + id + '}',
                    load: function(data, args) {
                        dojo.byId('todo-'+id+'-'+sid).innerHTML =
                            '<img src="/score/ui/v8/images/icon-system-status-ok.gif" title="To Do asserted" width="12" height="10"/> To Do item has been asserted.';
                    },
                    error: function(error, args) {
                        console.log('Failed to assert todo item ' + id + ' with sid ' + sid);
                        console.log(error.responseText);
                        score.window.ErrorMsg('Failed to assert to do item.');
                    }
                });
            }
        }
    }();

    score.data.CountFieldCharacters = function() {
        return {
            count: function(counterId,fieldId,max,fieldValue) {
                var valLength = fieldValue.length;

                if(valLength >= max)
                {
                    dojo.html.set(dojo.byId(counterId), "0 characters remaining");
                    dijit.byId(fieldId).set('value',fieldValue.substring(0, max));
                    return;
                }
                else if(valLength < max)
                {
                    var remain = max - valLength;
                    if(remain > 1)
                    {
                        var str = remain + " characters remaining";
                        dojo.html.set(dojo.byId(counterId), str);
                    }
                    else
                    {
                        var str = remain + " character remaining";
                        dojo.html.set(dojo.byId(counterId), str);
                    }
                }
            }
        }
    }();

    score.data.CountFieldChars = function() {
        return {
            count: function(counterId,fieldId,max) {
                var valLength = $("#"+fieldId).val().length;

                if(valLength >= max)
                {
                    $("#"+counterId).text("0 characters remaining");
                    $("#"+fieldId).val($("#"+fieldId).val().substring(0, max));
                    return;
                }
                else if(valLength < max)
                {
                    var remain = max - valLength;
                    var sStr = (remain > 1 ? "s" : "")
                    var str = remain + " character" + sStr + " remaining";
                    $("#"+counterId).text(str);
                }
            }
        }
    }();

    score.data.isEmail = function(email) {
        var emailRegex =  /^([a-zA-Z0-9_.+-/'])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]){2,6}$/;
        if (emailRegex.test(email)) {
            return true;
        } else {
            return false;
        }
    };
});

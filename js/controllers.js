/**
 * Controller code to handle base UI events
 */

// Controller base class
score.Controller = function(name) {
    this.controller = name;
    this.action = false;
    this.params = false;
    this.renderer = false;
    this.actions = [];
};

// Specifies whether or not an action is valid
score.Controller.prototype.isActionValid = function(request) {
    i = this.actions.length;
    while (i--) {
        if (this.actions[i]["action"] == request) {
            return this.actions[i];
        }
    }

    return false;
};

//// Handles activation and deactivation of the main links
//score.Controller.prototype.setupTabs = function() {
//    console.log("Setting up primary links for " + this.controller);
//    // Remove active class from main nav
//    dojo.query('#main-nav li a').forEach(function(node){
//        dojo.removeClass(node, 'active');
//    });
//
////    // Collapse the sub links for all main nav items
////    dojo.query('#main-nav li ul').forEach(function(node){
////        if (node.id != this.controller+'-sub-links') {
////            if (dojo.style(node, 'display') != 'none') {
////                dojo.fx.wipeOut({node: node}).play();
////            }
////        }
////    });

//    // Expand the sub links for the current main nav item
//    dojo.fx.wipeIn({ node: this.controller+'-sub-links'}).play();
//
//    // Set the active class on our main nav item
//    dojo.addClass(dojo.byId(this.controller+'-li'), 'active');
//
//    // Remove active class from all sub links
//    dojo.query('#'+this.controller+'-sub-links li a').forEach(function(node){
//        dojo.removeClass(node, 'active');
//    });
//
//    // Set active class selected sub link
//    if (this.action) {
//        dojo.query('a[href="#'+this.controller+'-'+this.action+'"]').forEach(function(node){
//            dojo.addClass(node, 'active');
//        });
//    }
//};

// Sets the main content for selected controller and action
score.Controller.prototype.setContent = function() {
    // Called in context of score.Controller instance
    url = '/bio/index/'+this.controller;


    if (this.action) url = url + '-' + this.action;
    // When the action will be handled by a js function
    if ( typeof this.renderer == "function") {
        this.renderer(this.params);
    } else {
        // When the action will be handled by setting the href of a container
        score.window.Dialog.destroy();
        if (this.params) url = url + this.params;
        // TODO - Register onError callback, check for 402, redirect to login
        dijit.byId('content').attr('href', url);
        // Clear any messages
        score.window.ClearNotice();
    }
    console.log(url);
};

// Calls relevant controller methods to handle a page event
score.Controller.prototype.route = function() {
    // Style links based on route
 //   this.setupTabs();
    // Update page content
    this.setContent();
};

// Base controller that will bootstrap and allow other controllers to be registered
score.controller = {

    controllers: [],

    bootstrap: function() {
        console.log("in bootstrap");
        // Check hash or default
        hash = dojo.hash() || score.constants.APP_DEFAULT;
        // Grab the action if there is one
        console.log('Page initialized with hash ' + hash);

        this.route(hash);
    },

    register: function(controller) {
        console.log("in register");
        this.controllers[controller.controller] = controller;
        console.log('The ' + controller.controller + ' controller has been registered');
        console.log(controller);
    },

    route: function(hash) {
        console.log('score.controller.route called with hash ' + hash);

        if (hash == 'home-ibmildap') {
            hash = 'accounts-ibmi';
        }

        // Check if we passing in additional parameters
        hasParams = hash.indexOf('?');

        if (hasParams >= 0) {
            params = hash.substring(hasParams);
            hash = hash.substring(0,hasParams);
            console.log("params: ", params);
            console.log("hash: ", hash);
        } else {
            params = false;
        }

        controller = hash;
        action = false;

        // Break up our hash
        pieces = hash.split('-');

        if (pieces.length > 1) {
            controller = pieces.shift();
            action = pieces.join("");

            hash = controller + '-' + action;

            console.log('score.controller.route parsed action ' + action);
        }

        // Ensure controller is valid
        controller = (controller in this.controllers) ? controller : score.constants.APP_DEFAULT;
        // Add any params that may have been passed in
        this.controllers[controller].params = params;
        // Reset any previous action, dialog, or renderer
        this.controllers[controller].action = false;
        this.controllers[controller].renderer = false;
        //this.controllers[controller].dialog = false;

        // Ensure action is valid, if not leave it alone
        if (action) {
            console.log("available actions: ");
            console.log(this.controllers[controller].actions);

            validAction = this.controllers[controller].isActionValid(action);

            if (validAction) {
                //this.controllers[controller].dialog = validAction.dialog;
                this.controllers[controller].action = action;
                this.controllers[controller].renderer = validAction.renderer;
                console.log("action " + action + " is defined");
            } else {
                console.log("action " + action + " is unknown, setting to default action");
                dojo.hash(controller,true);
                hash = controller;
            }
        } else {
            // What if function had a render?
            console.log(controller + ' called with no action.');
            if (controller != 'capital') {
                console.log('Defaulting to ', this.controllers[controller].actions[0].action);
                this.controllers[controller].action = this.controllers[controller].actions[0].action;
                this.controllers[controller].renderer = this.controllers[controller].actions[0].renderer;
            }
        }

        // Let our custom controller take over now
        this.controllers[controller].route();
    }

};

// Container for application specific controllers
score.controllers = {};

score.controllers.Bio = function() {
    // inherit properties
    score.Controller.call(this, 'bio');

    // setup actions
    this.actions.push({ action: 'home' });   
    this.actions.push({ action: 'sessions' }); 
    this.actions.push({ action: 'help' });
    this.actions.push({ action: 'guests'});
    

};

//Inherit score.Controller methods
score.controllers.Bio.prototype = new score.Controller();

// Administration controller
score.controllers.Administration = function() {
    // inherit properties
    score.Controller.call(this, 'administration');

    // setup actions
    this.actions.push({ action: 'users'});
    this.actions.push({ action: 'locations' });
    this.actions.push({ action: 'sessions' });
    this.actions.push({ action: 'conferences' });
    this.actions.push({ action: 'speakers' });
    
    
};

//Inherit score.Controller methods
score.controllers.Administration.prototype = new score.Controller();



// Register controllers

score.controller.register(new score.controllers.Administration());
score.controller.register(new score.controllers.Bio());
// Require Scripts
var Vue          = require('vue');
var VueRouter    = require('vue-router');
var configRouter = require('./routes-config').configRouter;

// Include required scripts
Vue.use(require('vue-resource'));
Vue.use(VueRouter);

// Access Vue Globally
window.Vue = Vue;

// Constants
window.constants = {
    formSelector: '#page-content form'
};

// Create router
var router = new VueRouter({
    hashbang          : false,
    history           : true,
    saveScrollPosition: true
});

// Configure router
configRouter(router);

// Build App
var App = Vue.extend({});

// Start the router
router.start(App, '#app');

/**
 * Configure the router
 *
 * @param {Object} router Vue Router
 */
function configRouter (router) {
    router.map({
        '/': {
            component: require('./components/portal.js'),
            subRoutes: {
                '/eagles': {
                    component: require('./components/eagles.js')
                },
                '/eagleBio/:id': {
                    component: require('./components/eagleBio.js')
                }
            }
        }
    });

    router.redirect({
        '/'         : '/eagles',
        '*'         : '/eagles'
    });
};

// Module export
module.exports = {
    configRouter: configRouter
};

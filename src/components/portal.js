// Declare Partials
Vue.partial('portal-nav-bar', require('../templates/partials/nav.html'));
Vue.partial('portal-side-bar', require('../templates/partials/sidebar.html'));

// Export template
module.exports = {
    template: require('../templates/portal.html'),
    data    : function () {
        return {
            currentView: 'eagles'
        };
    },
    methods: {
        // Filters the list of the eagles based on a search query
        filterList: function(args) {
            // Search query
            var searchQuery = args.target.value;

            // IF query is empty, do not show
            if (searchQuery == '') {
                this.$children[0].Eagles = this.$children[0].ogEagles;

            // Only display eagles that match query
            } else {
                var regex = new RegExp(searchQuery, 'i');
                this.$children[0].Eagles = $.grep(this.$children[0].ogEagles, function(scout) {
                    return regex.test(scout.sc_name);
                });
            }
        }
    }
};

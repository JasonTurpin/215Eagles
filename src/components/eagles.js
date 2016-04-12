// Export template
module.exports = {
    template: require('../templates/eagles.html'),
    data       : function () {
        return {
            ogEagles: [],
            Eagles  : []
        };
    },
    ready      : function () {
        this.$http.get('/api/scouts', {}).then(function(response) {
            this.$set('Eagles', response.data);
            this.$set('ogEagles', response.data);
        }, $.noop);
    },
    directives : {
        // Converts YYYY-MM-DD to MM/DD/YYYY and removes leading zeros
        dateshow : function (value) {
            var regex  = /([^-]+)/g;
            var regex2 = /(^0)/;
            var pieces = value.match(regex);
            this.el.innerText = pieces[1].replace(regex2, '') + '/' + pieces[2].replace(regex2, '') + '/' + pieces[0];
        }
    }
};

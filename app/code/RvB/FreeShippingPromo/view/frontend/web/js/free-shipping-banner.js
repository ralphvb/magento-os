define([
    'uiComponent'
], function (Component) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'RvB_FreeShippingPromo/free-shipping-banner',
            subtotal: 33.00,
            tracks: {
                subtotal: true
            }
        },
        initialize: function () {
            this._super();
            console.log(this.message);
        },
        formatCurrency: function(value) {
            return '$' +  value.toFixed(2);
        }
    });
});
define([
    'uiComponent',
    'Magento_Customer/js/customer-data'
], function (Component, customerData) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'RvB_FreeShippingPromo/free-shipping-banner',
            subtotal: 0.00,
            tracks: {
                subtotal: true
            }
        },
        initialize: function () {
            this._super();
            var self = this;
            var cart = customerData.get('cart');

            customerData.getInitCustomerData().done(function() {
                self.subtotal = formatCurrency(cart().subtotalAmount);
            });
        },
        formatCurrency: function(value) {
            return '$' +  value.toFixed(2);
        }
    });
});
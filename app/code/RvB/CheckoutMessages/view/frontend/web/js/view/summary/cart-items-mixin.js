define([], function () {
    'use strict';

    return function (Component) {
        return Component.extend({
            defaults: {
                template: 'RvB_CheckoutMessages/summary/cart-items'
            },
            /**
             * Returns bool true value as override
             *
             * @returns {Boolean}
             */
            isItemsBlockExpanded: function () {
                return true;
            }
        });
    }
});
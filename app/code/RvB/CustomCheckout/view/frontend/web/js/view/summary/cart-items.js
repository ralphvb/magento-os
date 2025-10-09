define([
    'Magento_Checkout/js/view/summary/cart-items',
], function (Component) {
    'use strict';

    return Component.extend({
    /**
     * Returns bool value for items block state (expanded or not)
     *
     * @returns {*|Boolean}
     */
        isItemsBlockExpanded: function () {
            return true;
        }
    });
})
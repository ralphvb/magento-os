define([
    'uiComponent'
], function(Component) {
    'use strict';
    
    return Component.extend({
        defaults: {
            template: 'RvB_InventoryFulfillment/sku-lookup',
            sku: 'ABC123'
        },
        initialize() {
            this._super();
            console.log('The skuLookup component has been loaded');
        }
    });
});
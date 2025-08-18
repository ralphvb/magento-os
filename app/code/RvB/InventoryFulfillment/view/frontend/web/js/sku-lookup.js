define([
    'uiComponent',
    'ko'
], function(Component, ko) {
    'use strict';
    
    return Component.extend({
        defaults: {
            template: 'RvB_InventoryFulfillment/sku-lookup',
            sku: ko.observable('ABC123'),
            placeholder: ko.observable('Example: 24-MB01')
        },
        initialize() {
            this._super();
            console.log('The skuLookup component has been loaded');
        }
    });
});
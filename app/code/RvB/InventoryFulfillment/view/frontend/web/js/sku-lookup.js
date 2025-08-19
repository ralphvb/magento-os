define([
    'uiComponent',
    'ko',
    'mage/storage'
], function(Component, ko, storage) {
    'use strict';
    
    return Component.extend({
        defaults: {
            template: 'RvB_InventoryFulfillment/sku-lookup',
            sku: ko.observable('24-MB01'),
            placeholder: ko.observable('Example: 24-MB01')
        },
        initialize() {
            this._super();
            console.log('The skuLookup component has been loaded');
        },
        handleSubmit() {
            storage.get(`rest/V1/products/${this.sku()}`).done(response => {
                console.log(response);
            });
        }
    });
});
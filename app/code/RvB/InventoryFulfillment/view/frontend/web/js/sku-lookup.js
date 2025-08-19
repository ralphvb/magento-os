define([
    'uiComponent',
    'ko',
    'mage/storage',
    'jquery'
], function (Component, ko, storage, $) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'RvB_InventoryFulfillment/sku-lookup',
            sku: ko.observable('24-MB01'),
            placeholder: ko.observable('Example: 24-MB01'),
            messageResponse: ko.observable(''),
            isSuccess: ko.observable(false)
        },
        initialize() {
            this._super();
            console.log('The skuLookup component has been loaded');
        },
        handleSubmit() {
            $('body').trigger('processStart');
            this.messageResponse('');
            this.isSuccess(false);

            storage.get(`rest/V1/products/${this.sku()}`)
                .done(response => {
                    this.messageResponse(`Product found! <strong>${response.name}</strong>`);
                    this.isSuccess(true);
                })
                .fail(() => {
                    this.messageResponse('Product not found!');
                    this.isSuccess(false);
                })
                .always(() => {
                    $('body').trigger('processStop');
                });
        }
    });
});
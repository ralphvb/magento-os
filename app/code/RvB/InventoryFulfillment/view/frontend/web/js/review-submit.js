define([
    'uiComponent',
    'ko',
    'RvB_InventoryFulfillment/js/model/sku',
    'RvB_InventoryFulfillment/js/model/box-configurations',
], function(Component, ko, skuModel, boxConfigurationsModel){
    'use strict';

    return Component.extend({
        defaults: {
            shipmentWeight: 0,
            billableWeight: 0,
            isTermsChecked: ko.observable(false),
        },
        initialize() {
            this._super();
            console.log('The reviewSubmit component has been loaded!');
            this.canSubmit = ko.computed(() => {
                return skuModel.isSuccess() && boxConfigurationsModel.isSuccess() && this.isTermsChecked();
            })

            this.numberOfBoxes = ko.computed(() => {
                return boxConfigurationsModel.boxConfigurations().reduce(function(runningTotal, boxConfiguration) {
                    return runningTotal + (boxConfiguration.numberOfBoxes() || 0);
                }, 0);
            })
        },
        handleSubmit() {
            if(this.canSubmit()){
                console.log('The Review Submit has been submitted!');
            } else {
                console.log('The Review Submit has an error!');
            }
        }
    })
})
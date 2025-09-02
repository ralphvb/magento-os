define([
    'uiComponent',
    'ko',
    'RvB_InventoryFulfillment/js/model/sku',
    'RvB_InventoryFulfillment/js/model/box-configurations',
], function(Component, ko, skuModel, boxConfigurationsModel){
    'use strict';

    return Component.extend({
        defaults: {
            numberOfBoxes: boxConfigurationsModel.numberOfBoxes(),
            shipmentWeight: boxConfigurationsModel.shipmentWeight(),
            billableWeight: boxConfigurationsModel.billableWeight(),
            isTermsChecked: ko.observable(false),
            boxConfigurationsIsSuccess: boxConfigurationsModel.isSuccess
        },
        initialize() {
            this._super();
            console.log('The reviewSubmit component has been loaded!');
            this.canSubmit = ko.computed(() => {
                return skuModel.isSuccess() && boxConfigurationsModel.isSuccess() && this.isTermsChecked();
            });
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
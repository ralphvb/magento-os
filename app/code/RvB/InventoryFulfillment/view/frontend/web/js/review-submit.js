define([
    'uiComponent',
    'ko',
    'RvB_InventoryFulfillment/js/model/box-configurations',
], function(Component, ko, boxConfigurationsModel){
    'use strict';

    return Component.extend({
        initialize() {
            this._super();
            console.log('The reviewSubmit component has been loaded!');
        }
    })
})
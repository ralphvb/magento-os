define([
    'uiComponent'
], function (Component){ 
    'use strict';

    return Component.extend({
        defaults: {
            imports: {
                countryId: 'checkoutProvider:shippingAddress.country_id'
            },
            listens: {
                // 'checkoutProvider:shippingAddress.country_id': 'countryId', Same as imports
                'checkoutProvider:shippingAddress.region_id': 'handleRegionChange'
            },
            tracks: {
                countryId: true
            }
        },
        initialize: function() {
            this._super();
            console.log(this.name + ' is initialized.');
        },
        showMessage: function() {
            return this.countryId === 'US';
        },
        handleRegionChange: function(newRegionId) {
            console.log('New Region ID: ' + newRegionId)
        }
    })
})
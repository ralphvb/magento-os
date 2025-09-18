define([
    'uiComponent'
], function (Component){ 
    'use strict';

    return Component.extend({
        defaults: {
            '${ $.name }shippingAddressProvider': '${ $.name }AddressProvider',
            imports: {
                countryId: '${ $.shippingAddressProvider }.country_id'
            },
            listens: {
                // 'checkoutProvider:shippingAddress.country_id': 'countryId', Same as imports
                '${ $.shippingAddressProvider }.region_id': 'handleRegionChange'
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
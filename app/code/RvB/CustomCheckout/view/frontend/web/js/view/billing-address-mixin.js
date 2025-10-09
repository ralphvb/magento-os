define([], function(){
    'use strict';

    return function(subject) {
        return subject.extend({
            defaults: {
                detailsTemplate: 'RvB_CustomCheckout/billing-address/details',
            }
        })
    }

});
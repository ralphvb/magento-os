define([], function() {
    'use strict';

    return function(originalMessages) {
        // originalMessages.defaults.hideTimeout = 1000;
        // return originalMessages;
        return originalMessages.extend({
            defaults: {
                hideTimeout: 2500,
                highSpeed: 100
            }
        });
    }
})
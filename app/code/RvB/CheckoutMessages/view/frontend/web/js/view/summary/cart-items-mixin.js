define([], function () {
    'use strict';

    return function (Component) {
        return Component.extend({
            /**
             * Returns bool true value as override
             *
             * @returns {Boolean}
             */
            isItemsBlockExpanded: function () {
                return true;
            }
        });
    }
});
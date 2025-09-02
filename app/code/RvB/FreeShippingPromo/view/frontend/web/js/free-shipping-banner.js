define([
    'uiComponent'
], function (Component) {
    'use strict';

    return Component.extend({
        defaults: {
            message: 'Free Shipping Message'
        },
        initialize: function () {
            this._super();
            console.log("Free Shipping Banner Ui Component has been loaded!");
            console.log(this.message);
        }
    });
});
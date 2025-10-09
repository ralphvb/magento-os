define([
    'domReady',
    'jquery',
    'Magento_Ui/js/lib/view/utils/dom-observer',
    'RvB_CustomCheckout/js/jquery.inputmask.min'
], function (domReady, $, domObserver) {
    'use strict';

    domReady(function () {
        domObserver.get('input[name="telephone"]', function (element) {
            $(element).inputmask("(999) 999-9999");
        });
    });
})
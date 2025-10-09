let config = {
    deps: [
        'RvB_CustomCheckout/js/mask-telephone-inputs'
    ],
    map: {
        '*': {
            'Magento_Checkout/template/sidebar.html':
                'RvB_CustomCheckout/template/sidebar.html'
        }
    },
    config: {
        mixins: {
            'Magento_Checkout/js/action/set-shipping-information': {
                'RvB_CustomCheckout/js/action/set-shipping-information-mixin': true
            },
            'Magento_Checkout/js/view/billing-address': {
                'RvB_CustomCheckout/js/view/billing-address-mixin': true
            }
        }

    }
}
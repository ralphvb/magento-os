var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/view/summary/cart-items': {
                'RvB_CheckoutMessages/js/view/summary/cart-items-mixin': true
            }
        }
    },
    map: {
        '*': {
            'Magento_Checkout/template/sidebar':
                'RvB_CheckoutMessages/template/sidebar'
        }
    }
}
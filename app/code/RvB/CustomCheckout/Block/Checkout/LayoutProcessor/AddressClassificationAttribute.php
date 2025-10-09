<?php

declare(strict_types=1);

namespace RvB\CustomCheckout\Block\Checkout\LayoutProcessor;

class AddressClassificationAttribute implements \Magento\Checkout\Block\Checkout\LayoutProcessorInterface
{

    public function process($jsLayout): array
    {
        $attributeCode = 'address_classification';
        $attributeData = &$jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children'][$attributeCode];

        $attributeData['config']['customScope'] = 'shippingAddress.custom_attributes';
        $attributeData['dataScope'] = "shippingAddress.custom_attributes.$attributeCode";

        foreach (
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['payments-list']['children'] as &$paymentMethod
        ) {
            $fields = &$paymentMethod['children']['form-fields']['children'];

            if (isset($fields[$attributeCode])) {
                unset($fields[$attributeCode]);
            }

            $fields['city']['sortOrder'] = '72';
            $fields['region_id']['sortOrder'] = '74';
            $fields['postcode']['sortOrder'] = '76';
        };

        return $jsLayout;
    }
}

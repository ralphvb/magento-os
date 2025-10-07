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

        return $jsLayout;
    }
}

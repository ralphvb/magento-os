<?php

declare(strict_types=1);

namespace RvB\CustomCheckout\Block\Checkout\LayoutProcessor;

class UpdateAddressSortOrder implements \Magento\Checkout\Block\Checkout\LayoutProcessorInterface
{

    public function process($jsLayout): array
    {
        foreach (
            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['payments-list']['children'] as &$paymentMethod
        ) {
            $fields = &$paymentMethod['children']['form-fields']['children'];

            if ($fields == null) {
                continue;
            }

            $fields['city']['sortOrder'] = '72';
            $fields['region_id']['sortOrder'] = '74';
            $fields['postcode']['sortOrder'] = '76';
        };

        return $jsLayout;
    }
}

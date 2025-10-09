<?php

declare(strict_types=1);

namespace RvB\CustomCheckout\Plugin;

class ConvertQuoteToOrderAddress {

    public function afterConvert(
        \Magento\Quote\Model\Quote\Address\ToOrderAddress $subject,
        \Magento\Sales\Api\Data\OrderAddressInterface $result,
        \Magento\Quote\Model\Quote\Address $address
    ) {
        if($addressClassification = $address->getData('address_classification')){
            $result->setData('address_classification', $addressClassification);
        }

        return $result;
    }
}
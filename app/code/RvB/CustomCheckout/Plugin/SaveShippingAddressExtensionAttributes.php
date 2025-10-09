<?php

declare(strict_types=1);

namespace RvB\CustomCheckout\Plugin;

class SaveShippingAddressExtensionAttributes
{

    public function beforeSaveAddressInformation(
        \Magento\Checkout\Api\ShippingInformationManagementInterface $subject,
        $cartId,
        \Magento\Checkout\Api\Data\ShippingInformationInterface $addressInformation
    ) {
        $shippingAddress = $addressInformation->getShippingAddress();

        if($extensionAttributes = $shippingAddress->getExtensionAttributes()){
            $shippingAddress->setData('address_classification', $extensionAttributes->getAddressClassification());
        }
    }
}

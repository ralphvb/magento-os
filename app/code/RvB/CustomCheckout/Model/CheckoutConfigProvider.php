<?php

declare(strict_types=1);

namespace RvB\CustomCheckout\Model;

class CheckoutConfigProvider implements \Magento\Checkout\Model\ConfigProviderInterface
{

    public function getConfig() : array
    {
        return [
            'myKey' => 'myValue'
        ];
    }
}

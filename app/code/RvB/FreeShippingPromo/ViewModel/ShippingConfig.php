<?php

declare(strict_types=1);

namespace RvB\FreeShippingPromo\ViewModel;

class ShippingConfig implements \Magento\Framework\View\Element\Block\ArgumentInterface
{

    public function __construct(
        private readonly \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {}

    public function getFreeShippingThreshold(): int
    {
        return (int) $this->scopeConfig->getValue('carriers/freeshipping/free_shipping_subtotal');
    }
}

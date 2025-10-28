<?php

declare(strict_types=1);

namespace RvB\ProductCompare\ViewModel;

use Magento\Framework\Pricing\Helper\Data as PricingHelper;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Pricing implements ArgumentInterface
{/** @var PricingHelper */
    private readonly PricingHelper $pricingHelper;

    /**
     * @param PricingHelper $pricingHelper
     */
    public function __construct(PricingHelper $pricingHelper)
    {
        $this->pricingHelper = $pricingHelper;
    }

    /**
     * Format Currency
     * 
     * @param float $price
     * @return string
     */
    public function formatCurrency(float $price): string {
        return $this->pricingHelper->currency($price);
    }
}

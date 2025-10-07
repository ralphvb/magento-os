<?php

declare(strict_types=1);

namespace RvB\CustomCheckout\Model;

use Magento\Framework\View\LayoutInterface;

class CheckoutConfigProvider implements \Magento\Checkout\Model\ConfigProviderInterface
{
    private $fulfillmentStatus;

    public function __construct(LayoutInterface $layoutInterface)
    {
        $this->fulfillmentStatus = $layoutInterface->createBlock('Magento\Cms\Block\Block')->setBlockId('fulfillment_status')->toHtml();
    }

    public function getConfig() : array
    {
        return [
            'fullfilment_status' => $this->fulfillmentStatus
        ];
    }
}

<?php

declare(strict_types=1);

namespace RvB\CustomCheckout\Model\Config\Source;

class AddressClassification extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource implements \Magento\Framework\Data\OptionSourceInterface
{

    public function getAllOptions(): array
    {
        return [
            [
                'value' => 0,
                'label' => 'Residential'
            ],
            [
                'value' => 1,
                'label' => 'Commercial'
            ]
        ];
    }
}

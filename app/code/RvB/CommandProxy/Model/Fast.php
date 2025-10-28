<?php

declare(strict_types=1);

namespace RvB\CommandProxy\Model;

use Magento\Framework\Model\AbstractModel;

class Fast extends AbstractModel
{
    public function getSomeData(): string
    {
        return 'some fast data';
    }
}

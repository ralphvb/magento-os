<?php

declare(strict_types=1);

namespace RvB\Minerva\Model\ResourceModel\Faq;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \RvB\Minerva\Model\Faq::class,
            \RvB\Minerva\Model\ResourceModel\Faq::class
        );
    }
}

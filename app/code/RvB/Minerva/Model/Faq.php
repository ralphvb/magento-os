<?php

declare(strict_types=1);

namespace RvB\Minerva\Model;

use Magento\CatalogImportExport\Model\Import\Proxy\Product\ResourceModel;
use Magento\Framework\Model\AbstractModel;

class Faq extends AbstractModel
{
    protected function _construct() {
        $this->_init(\RvB\Minerva\Model\ResourceModel\Faq::class);
    }
}

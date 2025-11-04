<?php

declare(strict_types=1);

namespace RvB\Minerva\Ui\DataProvider;

use RvB\Minerva\Model\ResourceModel\Faq\Collection;
use RvB\Minerva\Model\ResourceModel\Faq\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class Faq extends AbstractDataProvider
{
    /** @var Collection */
    protected $collection;

    /** @var array */
    private array $loadedData;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        if (!isset($this->loadedData)) {
            $this->loadedData = [];

            foreach ($this->collection->getItems() as $item) {
                $this->loadedData[$item->getData('id')] = $item->getData();
            }
        }

        return $this->loadedData;
    }
}

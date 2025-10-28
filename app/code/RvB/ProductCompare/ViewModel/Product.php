<?php

declare(strict_types=1);

namespace RvB\ProductCompare\ViewModel;

use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Psr\Log\LoggerInterface;

class Product implements ArgumentInterface
{
    /** @var array */
    private array $products = [];

    /** @var array */
    private array $invalidSkus = [];

    /** @var RequestInterface */
    private readonly RequestInterface $request;

    /** @var ProductRepository */
    private readonly ProductRepository $productRepository;

    /** @var FilterBuilder */
    private readonly FilterBuilder $filterBuilder;

    /** @var SearchCriteriaBuilder */
    private readonly SearchCriteriaBuilder $searchCriteriaBuilder;

    /** @var LoggerInterface */
    private readonly LoggerInterface $logger;

    /**
     * @param RequestInterface $request
     * @param ProductRepository $productRepository
     * @param FilterBuilder $filterBuilder
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param LoggerInterface $logger
     */
    public function __construct(
        RequestInterface $request,
        ProductRepository $productRepository,
        FilterBuilder $filterBuilder,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        LoggerInterface $logger
    ) {
        $this->request = $request;
        $this->productRepository = $productRepository;
        $this->filterBuilder = $filterBuilder;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->logger = $logger;

        $skus = (array)$this->request->getParam('skus');
        $this->setProductsFromSkus($skus);
    }

    /**
     * Set products from SKUs.
     * 
     * @param array $skus
     * @return void
     */
    private function setProductsFromSkus(array $skus): void
    {
        $skuFilter = $this->filterBuilder->setField('sku')->setValue($skus)->setConditionType('in')->create();
        $searchCriteria = $this->searchCriteriaBuilder->addFilters([$skuFilter])->create();

        try {
            $this->products = $this->productRepository->getList($searchCriteria)->getItems();
            $validSkus = array_map(
                static fn($product) => $product->getSku(),
                $this->products
            );

            $this->invalidSkus = array_diff($skus, $validSkus);
        } catch (\Exception $ex) {
            $this->logger->error($ex->getMessage());
        }
    }

    /**
     * Get Products
     * 
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * Get Invalid Sku's
     * 
     * @return array
     */
    public function getInvalidSkus(): array
    {
        return $this->invalidSkus;
    }
}

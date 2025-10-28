<?php

declare(strict_types=1);

namespace RvB\ProductCompare\ViewModel;

use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

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

    /**
     * @param RequestInterface $request
     * @param ProductRepository $productRepository
     * @param FilterBuilder $filterBuilder
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(
        RequestInterface $request,
        ProductRepository $productRepository,
        FilterBuilder $filterBuilder,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->request = $request;
        $this->productRepository = $productRepository;
        $this->filterBuilder = $filterBuilder;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;

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
        $this->products = $this->productRepository->getList($searchCriteria)->getItems();
        $validSkus = array_map(
            static fn($product) => $product->getSku(),
            $this->products
        );
        
        $this->invalidSkus = array_diff($skus, $validSkus);
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

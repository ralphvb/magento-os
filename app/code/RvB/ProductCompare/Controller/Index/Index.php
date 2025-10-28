<?php

namespace RvB\ProductCompare\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;

class Index implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        private readonly PageFactory $resultPageFactory
    ) {}

    /**
     * @return Page
     */
    public function execute(): Page
    {
        $page = $this->resultPageFactory->create();
        $page->getConfig()->getTitle()->set(__("Product Compare"));
        return $page;
    }
}

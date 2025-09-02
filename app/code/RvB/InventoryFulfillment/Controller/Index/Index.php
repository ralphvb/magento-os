<?php

namespace RvB\InventoryFulfillment\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
	/** @var PageFactory */
	private $pageFactory;

	/**
	 * @param PageFactory $pageFactory
	 */
	public function __construct(
		PageFactory $pageFactory
	) {
		$this->pageFactory = $pageFactory;
	}

	/**
	 * @return Page
	 */
	public function execute() {
		$page = $this->pageFactory->create();
		$page->getConfig()->getTitle()->set(__('Shipping Plan'));
		return $page;
	}
}
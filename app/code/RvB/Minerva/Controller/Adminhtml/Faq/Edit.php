<?php

declare(strict_types=1);

namespace RvB\Minerva\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Edit extends Action implements HttpGetActionInterface
{
	/**
	 * Authorization level
	 */
	const ADMIN_RESOURCE = 'RvB_Minerva::faq_save';

	/** @var PageFactory */
	protected PageFactory $pageFactory;

	/**
	 * @param Action\Context $context
	 * @param PageFactory $pageFactory
	 */
	public function __construct(
		Action\Context $context,
		PageFactory $pageFactory
	) {
		parent::__construct($context);
		$this->pageFactory = $pageFactory;
	}

	/**
	 * @return Page
	 */
	public function execute(): Page
	{
		$page = $this->pageFactory->create();
		$page->setActiveMenu('RvB_Minerva::faq');
		$page->getConfig()->getTitle()->prepend(__('Edit FAQs'));
		return $page;
	}
}

<?php

declare(strict_types=1);

namespace RvB\Minerva\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use RvB\Minerva\Model\Faq;
use RvB\Minerva\Model\FaqFactory;
use RvB\Minerva\Model\ResourceModel\Faq as FaqResource;

class Delete extends Action implements HttpGetActionInterface
{
    /**
     * Authorization level
     */
    const ADMIN_RESOURCE = 'RvB_Minerva::faq_delete';

    /** @var FaqFactory */
    protected $faqFactory;

    /** @var FaqResource */
    protected $faqResource;

    /**
     * @param Context $context
     * @param FaqFactory $faqFactory
     * @param FaqResource $faqResource
     */
    public function __construct(
        Context $context,
        FaqFactory $faqFactory,
        FaqResource $faqResource
    ) {
        $this->faqFactory = $faqFactory;
        $this->faqResource = $faqResource;
        parent::__construct($context);
    }

    public function execute() : Redirect
    {
        $id = $this->getRequest()->getParam('id');

        /** @var Faq $faq */
        $faq = $this->faqFactory->create();
        $this->faqResource->load($faq, $id);

        try {
            if ($faq->getId()) {
                $this->faqResource->delete($faq);
                $this->messageManager->addSuccessMessage(__('The record has been deleted.'));
            } else {
                $this->messageManager->addErrorMessage(__('The records does not exist.'));
            }
        } catch (\Exception $ex) {
            $this->messageManager->addErrorMessage($ex->getMessage());
        }

        /** @var Redirect $redirect */
        $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $redirect->setPath('*/*');
    }
}

<?php

declare(strict_types=1);

namespace RvB\Minerva\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\NotFoundException;
use RvB\Minerva\Model\Faq;
use RvB\Minerva\Model\FaqFactory;
use RvB\Minerva\Model\ResourceModel\Faq as FaqResource;

class Save extends Action implements HttpPostActionInterface
{
    /**
     * Authorization level
     */
    const ADMIN_RESOURCE = 'RvB_Minerva::faq_save';

    /** @var FaqFactory */
    private $faqFactory;

    /** @var FaqResource */
    private $faqResource;

    /**
     * @param Action\Context $context
     * @param FaqFactory $faqFactory
     * @param FaqResource $faqResource
     */
    public function __construct(
        Action\Context $context,
        FaqFactory $faqFactory,
        FaqResource $faqResource
    ) {
        $this->faqFactory = $faqFactory;
        $this->faqResource = $faqResource;
        parent::__construct($context);
    }

    /**
     * @return Redirect
     */
    public function execute(): Redirect
    {
        $post = $this->getRequest()->getPost();

        /** @var Faq */
        $faq = $this->faqFactory->create();
        $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $isExistingPost = $post->id;

        if ($isExistingPost) {
            try {
                $this->faqResource->load($faq, $post->id);

                if (!$faq->getData('id')) {
                    throw new NotFoundException(__('This record no longer exists.'));
                }
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
                return $redirect->setPath('*/*/');
            }
        } else {
            unset($post->id);
        }

        $faq->setData(array_merge($faq->getData(), $post->toArray()));

        try {
            $this->faqResource->save($faq);
            $this->messageManager->addSuccessMessage(__('The record has been saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('There was a problem saving the record.'));
        }

        return $redirect->setPath('*/*/');
    }
}

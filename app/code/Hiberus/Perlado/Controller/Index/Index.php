<?php

namespace Hiberus\Perlado\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Context     $context,
        PageFactory $pageFactory
    )
    {
        $this->resultPageFactory = $pageFactory;

        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}

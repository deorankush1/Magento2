<?php
namespace Demo\World\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Demo\World\NotMagento\PencilInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $pencilInterface;

    public function __construct(Context $context, PencilInterface $pencilInterface)
    {
        $this->PencilInterface = $pencilInterface;
        parent::__construct($context);
    }
    public function execute()
    {
        echo "Hello Ankush, Welcome to Magento 2 World ";
        echo "nl2br";
        echo $this->PencilInterface->getPencilType();
    }
}

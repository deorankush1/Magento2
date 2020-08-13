<?php
namespace Ambab\UserCreation\Controller\Hello;

class Lists extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo '<p>You Did It!</p>';
        exit;
        var_dump(__METHOD__);

        /* return $this->_pageFactory->create();*/
        /*$page_object = $this->_pageFactory->create();
        ;
        return $page_object;*/
    }
}

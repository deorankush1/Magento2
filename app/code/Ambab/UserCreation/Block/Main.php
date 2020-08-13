<?php
namespace Ambab\UserCreation\Block;

use Magento\Framework\View\Element\Template;

class Main extends Template
{
    protected function _prepareLayout()
    {
        $this->setMessage('Hello Again World');
    }

    public function getGoodbyeMessage()
    {
        return 'Goodbye World';
    }

    /**
    * Construct
    *
    * @param \Magento\Framework\View\Element\Template\Context $context
    * @param array $data
    */
  
    /**
     * Get form action URL for POST booking request
     *
     * @return string
     */
    public function getFormAction()
    {
        // companymodule is given in routes.xml
        // controller_name is folder name inside controller folder
        // action is php file name inside above controller_name folder

        return 'world';
        // here controller_name is index, action is booking
    }
}

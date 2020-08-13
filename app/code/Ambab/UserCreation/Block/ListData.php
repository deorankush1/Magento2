<?php

namespace Ambab\UserCreation\Block;

use Magento\Framework\View\Element\Template\Context;
use Ambab\UserCreation\Model\NewCustomTable as TestFactory;

/**
 * Test List block
 */
class ListData extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        Context $context,
        TestFactory $test,
        array $data = array()
    ) {
        $this->_test = $test;
        parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__(' Custom Module List Page'));

        return parent::_prepareLayout();
    }

    public function getTestCollection()
    {
        $test = $this->_test->create();
        $collection = $test->getCollection();
        return $collection;
    }
}

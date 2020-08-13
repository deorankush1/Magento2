<?php

namespace Ambab\UserCreation\Model;

use Magento\Framework\Model\AbstractModel;
use Ambab\UserCreation\Model\ResourceModel\CustomerLink as ResourceModel;

class NewCustomTable extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}

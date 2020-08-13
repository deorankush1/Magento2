<?php
namespace Ambab\UserCreation\Model\ResourceModel\NewCustomTable;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Ambab\UserCreation\Model\NewCustomTable as Model;
use Ambab\UserCreation\Model\ResourceModel\CustomerLink as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}

<?php
namespace San\Form\Model\ResourceModel\Car;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use San\Form\Model\Cars as Model;
use San\Form\Model\ResourceModel\Car as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}


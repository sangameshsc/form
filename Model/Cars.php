<?php
namespace San\Form\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use San\Form\Api\Data\CarsInterface;
use San\Form\Model\ResourceModel\Car as ResourceModel;

class Cars extends AbstractModel implements CarsInterface, IdentityInterface
{
    const CACHE_TAG = 'my_cars';
          
    
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(ResourceModel::class);
    }

    
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getcar_id()];
    }

    public function getId()
    {
        return $this->getData('car_id');
    }
    // public function setId($car_id)
    // {
    //     return $this->setData('car_id', $car_id);
    // }

    public function getManufacturer()
    {
        return $this->getData('manufacturer');
    }
    public function setManufacturer($Manufacturer)
    {
        return $this->setData('manufacturer', $Manufacturer);
    }

    public function getModel()
    {
        return $this->getData('model');
    }
    public function setModel($Model)
    {
        return $this->setData('model', $Model);
    }
    
}
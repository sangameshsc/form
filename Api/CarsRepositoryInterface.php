<?php
namespace San\Form\Api;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use San\Form\Api\Data\CarsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;


interface CarsRepositoryInterface
{
    
    public function save(CarsInterface $car);

   
    public function getBycar_id($car_id);

   
    public function getList(SearchCriteriaInterface $criteria);

    
//     public function delete(CarsInterface $car);

   
//     public function deleteById($id);
}
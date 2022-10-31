<?php
namespace San\Form\Api\Data;

interface CarsInterface
{
    Const Id='Id';
    Const Manufacturer='Manufacturer';
    Const Model='Model';
   
    public function getId();
  
    public function getManufacturer();

    
    public function setManufacturer($manufacturer);

   
    public function getModel();

    public function setModel($model);
}
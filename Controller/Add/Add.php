<?php

namespace San\Form\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use San\Form\Model\Cars;
use San\Form\Model\ResourceModel\Car as CarResource;

class Add extends Action
{
    
    private $car;
   
    private $carResource;

    
    public function __construct(
        Context $context,
        Cars $car,
        CarResource $carResource
    )
    {
        parent::__construct($context);
        $this->car = $car;
        $this->carResource = $carResource;
    }

   
    public function execute()
    {
        /* Get the post data */
        $data = $this->getRequest()->getParams();

        
        $carModel = $this->car;
        $carModel->setData($data);

        try {
           
            $this->carResource->save($carModel);
            $this->messageManager->addSuccessMessage("Car saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving car"));
        }

       
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('form');
        return $redirect;
    }
}
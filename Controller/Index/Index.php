<?php
// namespace San\Form\Controller\Index;

//     use Magento\Framework\App\Action\Action;
//     use Magento\Framework\App\Action\Context;
//     use Magento\Framework\Exception\CouldNotSaveException;
//     use Magento\Framework\Exception\LocalizedException;
//     use Magento\Framework\Exception\NoSuchEntityException;
//     use Magento\Framework\View\Result\PageFactory;

//     use San\Form\Api\CarsRepositoryInterface;
//     use San\Form\Api\Data\CarsInterface;

//     class Index extends Action
//     {
//         protected $_pageFactory;

//         protected $_carsRepository;
//         protected $_carsModel;


//         public function __construct(
//             Context $context,
//             PageFactory $pageFactory,
//             CarsRepositoryInterface $carsRepository,
//             CarsInterface $carsInterface
//         ) {
//             $this->_pageFactory = $pageFactory;
//             $this->_carsRepository=$carsRepository;
//             $this->_carsModel = $carsInterface;
//             return parent::__construct($context);
//         }

//         public function execute()
//         { 
//             $data = $this->getRequest()->getParams();
//             // print_r($data);
//             // exit;
//             // $car_id=$data['car_id'];
//             $hello = $data["manufacturer"];
//             $Model = $data["model"];
            
//             $CarsModel = $this->_carsModel;


//         $val= $this->_carsModel->setManufacture("$Manufacturer");
//         $val= $this->_carsModel->setModel("$Model");
        
//         try {
//             /* Use the resource model to save the model in the DB */
//             $this->_carsRepository->save($this->_carsModel);
//             $this->messageManager->addSuccessMessage("Car saved successfully!");
//         } catch (\Exception $exception) {
//             $this->messageManager->addErrorMessage(__("Error saving car"));
//         }

        /* Redirect back to cars page */
//         $redirect = $this->resultRedirectFactory->create();
//         $redirect->setPath('form');
//         return $redirect;
//     }
// }

    //         try {         
    //             $this->_carsRepository->save($this->_carsModel);
    //         } catch (CouldNotSaveException $e) {
    //             echo $e->getMessage();
    //         }
    //         //Read a record
    //         try {
    //             $car = $this->_carsRepository->getById("19");
    //             echo "Car id = " . $car->getId() . "<br>";
    //             echo "Car Manufacture = " . $car->getManufacture();
    //         } catch (NoSuchEntityException $e) {
    //             echo "No such entity exception - " . $e->getMessage();
    //         } catch (LocalizedException $e) {
    //             echo "Localized Exception" . $e->getMessage();
    //         }
    //         //Update a record
    //         try {
    //             $car = $this->_carsRepository->getById("21");
    //             echo "Car id = " . $car->getId() . "<br>";
    //             echo "Car Manufacture = " . $car->getManufacture();
    //             $car->setManufacture("This is the updated Manufacture");
    //             $car->setModel"This is the updated Model");
    //             $this->_carsRepository->save($car);
    //         } catch (NoSuchEntityException $e) {
    //             echo "No such entity exception - " . $e->getMessage();
    //         } catch (LocalizedException $e) {
    //             echo "Localized Exception" . $e->getMessage();
    //         }
    //         //Delete a record
    //         try {
    //             $this->_carsRepository->deleteById("20");
    //             echo "Deleted the record with id = 20" . "<br>" . "Go to database and check.";
    //         } catch (NoSuchEntityException $e) {
    //             echo "No such entity exception - " . $e->getMessage();
    //         } catch (LocalizedException $e) {
    //             echo "Localized Exception" . $e->getMessage();
    //         }
    //         exit;
    //     }
    // }
// namespace San\Form\Controller\Index;


// use Magento\Framework\App\Action\Action;
// use Magento\Framework\App\Action\Context;
// use Magento\Framework\App\ResponseInterface;
// use Magento\Framework\View\Result\PageFactory;


// class Index extends Action {

//     public function __construct(
//         Context $context,
//         PageFactory $pageFactory
//     )
//     {
//         parent::__construct($context);
//         $this->pageFactory = $pageFactory;
//     }
//     public function execute()
//     {
//         $page = $this->pageFactory->create();
        
//         return $page;
      
        
//     }

// } -->

namespace San\Form\Controller\Index;

    use Magento\Framework\App\Action\Action;
    use Magento\Framework\App\Action\Context;
    use Magento\Framework\Exception\CouldNotSaveException;
    use Magento\Framework\Exception\LocalizedException;
    use Magento\Framework\Exception\NoSuchEntityException;
    use Magento\Framework\View\Result\PageFactory;

    use San\Form\Api\CarsRepositoryInterface;
    use San\Form\Api\Data\CarsInterface;

    class Index extends Action
    {
    
        protected $_pageFactory;

        protected $_carsRepository;
        protected $_carsModel;


        public function __construct(
            Context $context,
            PageFactory $pageFactory,
            CarsRepositoryInterface $carsRepository,
            CarsInterface $carsInterface
        ) {
            $this->_pageFactory = $pageFactory;
            $this->_carsRepository=$carsRepository;
            $this->_carsModel = $carsInterface;
            return parent::__construct($context);
        }

        public function execute()
        {
           $data = $this->getRequest()->getParams();
       //   print_r($data);
      //exit;
      //  $Id = $data['emp_id'];
       $Manufacturer = $data["manufacturer"];
        $Model= $data["model"];

        $CarsModel = $this->_carsModel;
        
        $val= $this->_carsModel->setManufacturer($Manufacturer);
        $val= $this->_carsModel->setModel($Model);
          

        try {
            /* Use the resource model to save the model in the DB */
            $this->_carsRepository->save($this->_carsModel);
            $this->messageManager->addSuccessMessage("Car saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving car"));
        }

        /* Redirect back to cars page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('form');
        return $redirect;
    }
    
}



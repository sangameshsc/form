<?php
/**
 *
 * @package     magento2
 * @author      Jayanka Ghosh
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        http://jayanka.me/
 */

namespace San\Form\Block;


use Magento\Framework\View\Element\Template;
use San\Form\Model\ResourceModel\Car\Collection;

class Hello extends Template
{
    private $collection;

    
    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllCars() {
        return $this->collection  ;
    }

    public function getAddCarPostUrl() {
        return $this->getUrl('form/index/index');
    }

}
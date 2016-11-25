<?php

use AppBundle\Business\CategoryBusiness;
use Doctrine\ORM\EntityManager;

class Testing {

    private $categoryBusiness;
    public function __construct(CategoryBusiness $categoryBusiness){
        $this->categoryBusiness = $categoryBusiness;
    }

    public function getAll() {
        $category = $this->categoryBusiness->getAllCategory();
        return $category;
    }
}





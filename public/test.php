<?php

use AppBundle\Business\CategoryBusiness;
use Doctrine\ORM\EntityManager;
use AppBundle\Controller\CategoryController;
class APIClass {

    public function getAllCategory() {
        $category = $this->get('category.business')->getAllCategory();
        return $category;
    }
}

$apiClass = new CategoryController();
$category = $apiClass->allCategoryAction();
var_dump($category,'abc');exit;




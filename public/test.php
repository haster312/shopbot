<?php

use AppBundle\Business\CategoryBusiness;
use Doctrine\ORM\EntityManager;

class APIClass {

    public function getAllCategory() {
        $category = $this->get('category.business')->getAllCategory();
        return $category;
    }
}

$apiClass = new APIClass();
$category = $apiClass->getAllCategory();
var_dump($category,'abc');exit;




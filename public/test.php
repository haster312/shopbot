<?php

use AppBundle\Business\CategoryBusiness;
use Doctrine\ORM\EntityManager;

class APIClass {

    public function getAllCategory() {
        $category = $this->get('category.business')->getAllCategory();
        var_dump($category);
    }
}




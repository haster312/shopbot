<?php
namespace AppBundle\Business;

use AppBundle\Entity\Category;
class CategoryBusiness {

    public static function getCategoryInfo() {


    }

    public function getAllCategory() {
        $categories = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->findAll();
        var_dump($categories,'abc');exit;
        return $categories;
    }
}
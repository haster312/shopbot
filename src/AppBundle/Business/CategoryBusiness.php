<?php
namespace AppBundle\Business;

use AppBundle\Entity\Category;
class CategoryBusiness {

    public static function getCategoryInfo() {


    }

    public function getAllCategory() {
        $categories = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->all();
        var_dump($categories,'abc');exit;
        return $categories;
    }
}
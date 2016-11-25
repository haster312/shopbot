<?php
namespace AppBundle\Business;

use AppBundle\Entity\Category;
class CategoryBusiness {

    public static function getCategoryInfo() {


    }

    public function getAllCategory() {
        echo phpinfo();
        exit;
//        $categories = $this->getDoctrine()
//            ->getRepository('AppBundle:Category')
//            ->all();
//        var_dump($categories);exit;
//        return $categories;
    }
}
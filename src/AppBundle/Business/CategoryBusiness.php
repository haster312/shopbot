<?php
namespace AppBundle\Business;

use AppBundle\Entity\Category;
class CategoryBusiness {

    public static function getCategoryInfo() {


    }

    public static function getAllCategory() {

        $categories = CategoryBusiness::getDoctrine()
            ->getRepository('AppBundle:Category')
            ->all();
        return $categories;
    }
}
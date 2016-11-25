<?php
namespace AppBundle\Business;

use AppBundle\Entity\Category;
class CategoryBusiness {

    public static function getCategoryInfo() {


    }

    public function getAllCategory() {
        $category = new Category();
        var_dump($category,'abc');exit;
        $categories = Category::all();
        return $categories;
    }
}
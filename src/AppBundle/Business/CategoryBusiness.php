<?php
namespace AppBundle\Business;

use AppBundle\Entity\Category;
class CategoryBusiness {

    public static function getCategoryInfo() {


    }

    public function getAllCategory() {
        $category = new Category();
        $categories = Category::all();
        var_dump($category,$categories,'abc');exit;
        return $categories;
    }
}
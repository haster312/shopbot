<?php

namespace Api\Business;
use Api\Model\Category;

class CategoryBusiness extends Business
{
    public static function getAllCategories($length = null, $page = null){
        new static;

        $categories = Category::select('*');
        if($length > 0) {
            $categories->limit($length);
        }

        if($length > 0 && $page > 0) {
            $offset = $length * $page;
            $categories->offset($offset);
        }
        return $categories->get()->toArray();
    }
}
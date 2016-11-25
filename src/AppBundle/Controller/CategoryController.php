<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Business\CategoryBusiness;
class CategoryController extends Controller {

    public function allCategoryAction() {
        $categories = CategoryBusiness::getAllCategory();
        var_dump($categories);exit;
    }
}
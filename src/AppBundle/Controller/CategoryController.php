<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Business\CategoryBusiness;

class CategoryController extends Controller {

    public function allCategoryAction() {
        $categories = $this->get('category.business')->getAllCategory();
        var_dump($categories);
        return $categories;
    }
}
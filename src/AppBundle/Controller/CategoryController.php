<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Business\CategoryBusiness;
class CategoryController extends Controller {

    protected $categoryBusiness;
    function __construct(CategoryBusiness $categoryBusiness) {
        $this->categoryBusiness = $categoryBusiness;
    }

    public function allCategoryAction() {
        var_dump('abc');exit;
        $categories = $this->categoryBusiness->getAllCategory();
        var_dump($categories);exit;
    }
}
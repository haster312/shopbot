<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Business\CategoryBusiness;
class CategoryController extends Controller {

    public function allCategoryAction() {

        $category = $this->get('category.business')->getAllCategory();
        var_dump($category,'test');exit;
        $categories = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->findAll();
        var_dump($categories);exit;
    }
}
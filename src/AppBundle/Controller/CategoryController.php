<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller {

    public function allCategoryAction() {
        $categories = $this->get('category.business')->getAllCategory();
        var_dump($categories);
        return new Response($categories);
    }
}
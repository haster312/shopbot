<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller {

    public function allCategoryAction() {
        $category = new Category();
        $categories = $category->getCategories();
        return new JsonResponse($categories);
    }
}
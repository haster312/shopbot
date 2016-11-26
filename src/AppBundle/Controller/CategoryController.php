<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller {

    public function allCategoryAction() {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('AppBundle:Category')
            ->getCategories();
        return new JsonResponse($categories);
    }
}
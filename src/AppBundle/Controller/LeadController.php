<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class LeadController extends Controller {

    public function allLeadAction() {
        $em = $this->getDoctrine()->getManager();
        $productOrder = $em->getRepository('AppBundle:ProductOrder')->getProductOrderById(1);
        return new JsonResponse($productOrder);
    }
}
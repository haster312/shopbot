<?php
namespace AppBundle\Business;

use Doctrine\ORM\EntityManager;

class ProductOrderBusiness {

    public $entityManager;
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getAllOrder() {
        $categories = $this->entityManager
            ->getRepository('AppBundle:Category')
            ->findAll();
        return $categories;
    }

}
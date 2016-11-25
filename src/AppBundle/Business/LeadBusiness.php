<?php
namespace AppBundle\Business;

use Doctrine\ORM\EntityManager;

class LeadBusiness {

    public $entityManager;
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getAllCategory() {
        $categories = $this->entityManager
            ->getRepository('AppBundle:Category')
            ->findAll();
        return $categories;
    }

}
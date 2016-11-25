<?php
namespace AppBundle\Business;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class CategoryBusiness {

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
<?php
namespace AppBundle\Business;

use Doctrine\ORM\EntityManager;

class PromotionBusiness {

    public $entityManager;
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getAllPromotion() {
        $promotion = $this->entityManager
            ->getRepository('AppBundle:Promotion')
            ->findAll();
        return $promotion;
    }

}
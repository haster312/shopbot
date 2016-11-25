<?php
namespace AppBundle\Business;

use AppBundle\Entity\Category;
use Doctrine\ORM\EntityManager;
class CategoryBusiness {

    public function __construct(EntityManager $manager)
    {
        $this->manager = $manager;
    }

    public function getAllCategory() {
        $categories = $this->manager
            ->getRepository('AppBundle:Category')
            ->findAll();
        var_dump($categories,'abc');exit;
        return $categories;
    }
}
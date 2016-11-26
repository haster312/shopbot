<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository {

    /**
     * Get all category
     * @param null $length
     * @param null $page
     * @return array
     */
    public function getCategories($length = null, $page = null){
        $categories = $this->getEntityManager()
            ->createQuery(
                'SELECT category FROM AppBundle:Category category'
            )
            ->getResult();
        return $categories;
    }
}
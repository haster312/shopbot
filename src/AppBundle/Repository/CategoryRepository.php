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
    public function getCategories($length = 0, $page = 0){

        $skip = $length * $page;

        $query = $this->getEntityManager()
            ->createQuery(
                "SELECT category FROM AppBundle:Category category"
            );

        if($length > 0) {
            $query->setMaxResults($length);
        }

        if($skip > 0) {
            $query->setFirstResult($skip);
        }

        $categories = $query->getResult();
        return $categories;
    }

    public function getCategoryById($categoryId) {

        $category = $this->getEntityManager()
            ->createQuery(
                "SELECT category FROM AppBundle:Category category where category.id = $categoryId"
            )
            ->getSingleResult();
        return $category;
    }

    /**
     * @param $categoryId
     * @param null $length
     * @param null $page
     * @return array
     */
    public function getProducts($categoryId, $length = null, $page = null){

    }
}
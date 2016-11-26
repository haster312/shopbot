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

        $query = $this->getEntityManager()
            ->createQuery(
                "SELECT category FROM AppBundle:Category category"
            );

//        if($length) {
//            $query->setMaxResults($length);
//        }
//
//        if($page) {
//            $offset = $length * $page;
//            $query->setFirstResult($offset);
//        }

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
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

        $skip = $length * $page;
        $limit  = "";
        $offset = "";

        if($length > 0) {
            $limit = " limit $length";
        }

        if($skip > 0) {
            $offset = " offset $offset";
        }

        $categories = $this->getEntityManager()
            ->createQuery(
                "SELECT category FROM AppBundle:Category category" . $limit . $offset
            )
            ->getResult();
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
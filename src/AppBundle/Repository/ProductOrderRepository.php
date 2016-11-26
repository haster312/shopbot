<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class OrderProductRepository extends EntityRepository
{
    /**
     * get product order
     * @param $productId
     * @return mixed
     */
    public function productOrder($productId) {

        $order = $this->getEntityManager()
            ->createQuery(
                "SELECT productorder FROM AppBundle:ProductOrder productorder 
                where productorder.productid__c = $productId"
            )
            ->getResult();

        if($order) {
            return $order;
        } else {
            return false;
        }
    }

    /**
     * get product order
     * @param $productOrderId
     * @return mixed
     */
    public function getProductOrderById($productOrderId) {

        $order = $this->getEntityManager()
            ->createQuery(
                "SELECT productorder FROM AppBundle:ProductOrder productorder 
                where productorder.id = $productOrderId"
            )
            ->getSingleResult();
        return $order;
    }

}
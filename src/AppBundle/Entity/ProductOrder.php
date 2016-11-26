<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="salesforce.productorder__c")
 */
class ProductOrder {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $totalamount__c;

    /**
     * @ORM\Column(type="string")
     */
    private $ordernumber__c;

    /**
     * @ORM\Column(type="string")
     */
    private $description__c;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status__c;

    /**
     * @ORM\Column(type="integer")
     */
    private $leadid__c;

    /**
     * Order product
     * @param $productId
     * @return boolean - success or fail
     */
    public function orderProduct($productId){

    }
}
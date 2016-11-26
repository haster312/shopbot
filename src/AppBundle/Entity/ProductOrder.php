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
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $name;

    /**
     * @ORM\Column(type="float")
     */
    public $totalamount__c;

    /**
     * @ORM\Column(type="string")
     */
    public $ordernumber__c;

    /**
     * @ORM\Column(type="string")
     */
    public $description__c;

    /**
     * @ORM\Column(type="boolean")
     */
    public $status__c;

    /**
     * @ORM\Column(type="integer")
     */
    public $leadid__c;
}
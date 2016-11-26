<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="salesforce.promotion__c")
 */
class Promotion {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $sfid;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $discount__c;

    /**
     * @ORM\Column(type="string")
     */
    private $promotionproduct__c;

    /**
     * Get all current promotion
     * @return array
     */
    public function getCurrentPromotions(){

    }

    /**
     * @param $promotionId
     * @param null $length
     * @param null $page
     * @return array
     */
    public function getProducts($promotionId, $length = null, $page = null){

    }
}
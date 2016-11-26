<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="salesforce.promotion__c")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromotionRepository")
 */
class Promotion {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $sfid;

    /**
     * @ORM\Column(type="string")
     */
    public $name;

    /**
     * @ORM\Column(type="float")
     */
    public $discount__c;

    /**
     * @ORM\Column(type="string")
     */
    public $promotionproduct__c;

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
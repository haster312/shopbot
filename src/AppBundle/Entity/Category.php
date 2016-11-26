<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="salesforce.category__c")
 */
class Category {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    public $sfid;

    /**
     * @ORM\Column(type="string", length=100)
     */
    public $name;

    /**
     * @ORM\Column(type="boolean")
     */
    public $status__c;


    /**
     * Get all category
     * @param null $length
     * @param null $page
     * @return array
     */
    public function getCategories($length = null, $page = null){
        $categories = $this->findAll();
        return $categories;
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
<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="salesforce.category__c")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
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
     * @ORM\Column(type="string")
     */
    public $imageUrl;

    /**
     * @ORM\Column(type="text")
     */
    public $description;

}
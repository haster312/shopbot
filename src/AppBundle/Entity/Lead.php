<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="salesforce.lead")
 */
class Lead {

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
     * @ORM\Column(type="string")
     */
    public $fistname;

    /**
     * @ORM\Column(type="string")
     */
    public $lastname;

    /**
     * @ORM\Column(type="string")
     */
    public $facebookid__c;

    /**
     * @ORM\Column(type="string")
     */
    public $phone;

    /**
     * @ORM\Column(type="string")
     */
    public $email;

    /**
     * @ORM\Column(type="string")
     */
    public $company;

    /**
     * @ORM\Column(type="string")
     */
    public $website;

    /**
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @ORM\Column(type="string")
     */
    public $city;

    /**
     * @ORM\Column(type="string")
     */
    public $state;

    /**
     * @ORM\Column(type="string")
     */
    public $country;

    /**
     * @ORM\Column(type="string")
     */
    public $postalcode;

}

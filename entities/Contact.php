<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 * 
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"Supplier" = "Supplier", "User" = "User", "Manufacturer" = "Manufacturer", "Client" = "Client", "ContactAudit" = "ContactAudit", "Contractor" = "Contractor"})
 */
class Contact{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var None
     *
     * @ORM\Column(name="name", type="None")
     */
    private $name;
    /**
     * @var None
     *
     * @ORM\Column(name="surname", type="None")
     */
    private $surname;
    /**
     * @var None
     *
     * @ORM\Column(name="company", type="None")
     */
    private $company;
    /**
     * @var None
     *
     * @ORM\Column(name="rank", type="None")
     */
    private $rank;
    /**
     * @var None
     *
     * @ORM\Column(name="email", type="None")
     */
    private $email;
    /**
     * @var None
     *
     * @ORM\Column(name="phone", type="None")
     */
    private $phone;
    /**
     * @var None
     *
     * @ORM\Column(name="city", type="None")
     */
    private $city;
    /**
     * @var None
     *
     * @ORM\Column(name="address", type="None")
     */
    private $address;
    /**
     * @var None
     *
     * @ORM\Column(name="postcode", type="None")
     */
    private $postcode;
    /**
     * @var None
     *
     * @ORM\Column(name="country", type="None")
     */
    private $country;
    /**
     * @var None
     *
     * @ORM\Column(name="nip", type="None")
     */
    private $nip;
}

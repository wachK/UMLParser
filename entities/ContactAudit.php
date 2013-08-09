<?php

namespace MasterKush\CoffeeshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactAudit
 * 
 * @ORM\Entity
 */
class ContactAudit extends Contact{
    /**
     * @var None
     *
     * @ORM\Column(name="timestamp", type="None")
     */
    private $timestamp;
    /**
     * @var Contact
     *
     * @ORM\Column(name="contact", type="Contact")
     */
    private $contact;
}

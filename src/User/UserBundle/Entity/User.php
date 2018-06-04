<?php
// src/AppBundle/Entity/User.php

namespace User\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/*
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /*
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    // protected $firstname;
    // protected $lastname;


    public function construct()
    {
        parent::construct();
        // your own logic
    }
}
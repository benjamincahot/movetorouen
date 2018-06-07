<?php
// src/AppBundle/Entity/User.php

namespace User\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="mtr_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="User\UserBundle\Entity\Avatar", cascade={"persist"})
     */
    private $avatar;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set avatar.
     *
     * @param \UserBundle\Entity\Avatar|null $avatar
     *
     * @return User
     */
    public function setAvatar(\User\UserBundle\Entity\Avatar $avatar = null)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar.
     *
     * @return \UserBundle\Entity\Avatar|null
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
}

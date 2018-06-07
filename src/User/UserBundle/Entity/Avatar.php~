<?php

namespace User\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avatar
 *
 * @ORM\Table(name="mtr_avatar")
 * @ORM\Entity(repositoryClass="User\UserBundle\Repository\AvatarRepository")
 */
class Avatar
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_of_file", type="string", length=255)
     */
    private $nameOfFile;

    /**
     * @var string
     *
     * @ORM\Column(name="new_file", type="string", length=255)
     */
    private $newFile;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="mine_type", type="string", length=255)
     */
    private $mineType;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameOfFile.
     *
     * @param string $nameOfFile
     *
     * @return Avatar
     */
    public function setNameOfFile($nameOfFile)
    {
        $this->nameOfFile = $nameOfFile;

        return $this;
    }

    /**
     * Get nameOfFile.
     *
     * @return string
     */
    public function getNameOfFile()
    {
        return $this->nameOfFile;
    }

    /**
     * Set newFile.
     *
     * @param string $newFile
     *
     * @return Avatar
     */
    public function setNewFile($newFile)
    {
        $this->newFile = $newFile;

        return $this;
    }

    /**
     * Get newFile.
     *
     * @return string
     */
    public function getNewFile()
    {
        return $this->newFile;
    }

    /**
     * Set path.
     *
     * @param string $path
     *
     * @return Avatar
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set mineType.
     *
     * @param string $mineType
     *
     * @return Avatar
     */
    public function setMineType($mineType)
    {
        $this->mineType = $mineType;

        return $this;
    }

    /**
     * Get mineType.
     *
     * @return string
     */
    public function getMineType()
    {
        return $this->mineType;
    }
}

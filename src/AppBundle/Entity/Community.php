<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User\User;

/**
 * Community
 *
 * @ORM\Table(name="community")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommunityRepository")
 */
class Community
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
     * @var Community
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\UserCommunity", mappedBy="community")
     */
    private $users;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User\User")
     * @ORM\JoinColumn(name="created_by")
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * CUSTOM METHODS
     */
    public function imageAbsoluteUrl($size = "medium")
    {
        switch ($size) {
            case "large":
                $file = "800x150";
                break;
            case "medium":
                $file = "400x150";
                break;
            case "small":
                $file = "200x150";
                break;
        }
        return "http://placehold.it/" . $file;
    }

    /**
     * GETTERS & SETTERS
     */

    /**
     * Community constructor.
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Community
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Community
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createdBy
     *
     * @param User $createdBy
     *
     * @return Community
     */
    public function setCreatedBy(User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\UserCommunity $user
     *
     * @return Community
     */
    public function addUser(\AppBundle\Entity\UserCommunity $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\UserCommunity $user
     */
    public function removeUser(\AppBundle\Entity\UserCommunity $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}

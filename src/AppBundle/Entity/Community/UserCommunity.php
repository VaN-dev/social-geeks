<?php

namespace AppBundle\Entity\Community;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User\User;

/**
 * UserCommunity
 *
 * @ORM\Table(name="user_community")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Community\UserCommunityRepository")
 */
class UserCommunity
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
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @var Community
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Community\Community", inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $community;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;


    /**
     * Constructor
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
     * @return UserCommunity
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
     * Set user
     *
     * @param User $user
     *
     * @return UserCommunity
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set community
     *
     * @param Community $community
     *
     * @return UserCommunity
     */
    public function setCommunity(Community $community)
    {
        $this->community = $community;

        return $this;
    }

    /**
     * Get community
     *
     * @return Community
     */
    public function getCommunity()
    {
        return $this->community;
    }
}

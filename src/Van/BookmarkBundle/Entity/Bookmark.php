<?php

namespace Van\BookmarkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bookmark
 *
 * @ORM\Table(name="bookmarks")
 * @ORM\Entity(repositoryClass="Van\BookmarkBundle\Repository\BookmarkRepository")
 */
class Bookmark
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
     * @ORM\ManyToOne(targetEntity="Van\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", nullable=false)
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Scope")
     * @ORM\JoinColumn(name="scope_id", nullable=false)
     */
    protected $scope;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text")
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * Bookmark constructor.
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * GETTERS & SETTERS
     */

    /**
     * Get id
     *
     * @return integer
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
     * @return Bookmark
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
     * Set url
     *
     * @param string $url
     *
     * @return Bookmark
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Bookmark
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
     * Set user
     *
     * @param \Van\UserBundle\Entity\User $user
     *
     * @return Bookmark
     */
    public function setUser(\Van\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Van\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set scope
     *
     * @param \AppBundle\Entity\Scope $scope
     *
     * @return Bookmark
     */
    public function setScope(\AppBundle\Entity\Scope $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope
     *
     * @return \AppBundle\Entity\Scope
     */
    public function getScope()
    {
        return $this->scope;
    }
}

<?php

namespace AppBundle\Entity\Bookmark;

use AppBundle\Entity\Core\Scope;
use AppBundle\Entity\User\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Bookmark
 *
 * @ORM\Table(name="bookmarks")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Bookmark\BookmarkRepository")
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User\User")
     * @ORM\JoinColumn(name="user_id", nullable=false)
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bookmark\Category", inversedBy="bookmarks")
     * @ORM\JoinColumn(name="category_id", nullable=true)
     */
    protected $category;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Core\Scope")
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
     * @param User $user
     *
     * @return Bookmark
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
     * Set Category
     *
     * @param Category|null $category
     *
     * @return Bookmark
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set scope
     *
     * @param Scope $scope
     *
     * @return Bookmark
     */
    public function setScope(Scope $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope
     *
     * @return Scope
     */
    public function getScope()
    {
        return $this->scope;
    }
}

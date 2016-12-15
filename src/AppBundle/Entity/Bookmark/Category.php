<?php

namespace AppBundle\Entity\Bookmark;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="bookmark_categories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Bookmark\CategoryRepository")
 */
class Category
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
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bookmark\Category", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", nullable=true)
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Bookmark\Category", mappedBy="parent")
     */
    private $children;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Bookmark\Bookmark", mappedBy="category")
     */
    private $bookmarks;


    /**
     * GETTERS & SETTERS
     */
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->bookmarks = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return Category
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
     * Set parent
     *
     * @param Category $parent
     *
     * @return Category
     */
    public function setParent(Category $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return Category
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add child
     *
     * @param Category $child
     *
     * @return Category
     */
    public function addChild(Category $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param Category $child
     */
    public function removeChild(Category $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Add bookmark
     *
     * @param Bookmark $bookmark
     *
     * @return Category
     */
    public function addBookmark(Bookmark $bookmark)
    {
        $this->bookmarks[] = $bookmark;

        return $this;
    }

    /**
     * Remove bookmark
     *
     * @param Bookmark $bookmark
     */
    public function removeBookmark(Bookmark $bookmark)
    {
        $this->bookmarks->removeElement($bookmark);
    }

    /**
     * Get bookmarks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBookmarks()
    {
        return $this->bookmarks;
    }
}

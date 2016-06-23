<?php

namespace Van\BookmarkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="bookmark_categories")
 * @ORM\Entity(repositoryClass="Van\BookmarkBundle\Repository\CategoryRepository")
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
     * @ORM\ManyToOne(targetEntity="Van\BookmarkBundle\Entity\Category")
     * @ORM\JoinColumn(name="category_id", nullable=true)
     */
    protected $category;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set category
     *
     * @param \Van\BookmarkBundle\Entity\Category $category
     *
     * @return Category
     */
    public function setCategory(\Van\BookmarkBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Van\BookmarkBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}

<?php

namespace Van\FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;
use Van\UserBundle\Entity\User;

/**
 * PostLike
 *
 * @ORM\Table(name="post_like", uniqueConstraints={@UniqueConstraint(name="user_unique", columns={"user_id", "post_id"})})
 * @ORM\Entity(repositoryClass="Van\FeedBundle\Repository\PostLikeRepository")
 */
class PostLike
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
     * @ORM\ManyToOne(targetEntity="Van\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", nullable=false)
     */
    private $user;

    /**
     * @var Post
     *
     * @ORM\ManyToOne(targetEntity="Van\FeedBundle\Entity\Post")
     * @ORM\JoinColumn(name="post_id", nullable=false)
     */
    private $post;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;


    /**
     * GETTERS & SETTERS
     */

    /**
     *
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return PostLike
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
     * @param \Van\UserBundle\Entity\User $user
     *
     * @return PostLike
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
     * Set post
     *
     * @param \Van\FeedBundle\Entity\Post $post
     *
     * @return PostLike
     */
    public function setPost(\Van\FeedBundle\Entity\Post $post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \Van\FeedBundle\Entity\Post
     */
    public function getPost()
    {
        return $this->post;
    }
}

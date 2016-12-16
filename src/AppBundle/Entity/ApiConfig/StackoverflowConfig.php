<?php

namespace AppBundle\Entity\ApiConfig;

use AppBundle\Entity\User\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * StackoverflowConfig
 *
 * @ORM\Table(name="api_config_stackoverflow")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ApiConfig\StackoverflowConfigRepository")
 */
class StackoverflowConfig
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
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User\User")
     * @ORM\JoinColumn(name="user_id")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="remote_id", type="integer", unique=true)
     */
    private $remoteId;

    /**
     * @var array
     *
     * @ORM\Column(name="tags", type="array", nullable=true)
     */
    private $tags;

    /**
     * @var bool
     *
     * @ORM\Column(name="self_questions", type="boolean")
     */
    private $selfQuestions;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status = false;

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
     * Set user
     *
     * @param integer $user
     *
     * @return StackoverflowConfig
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set remoteId
     *
     * @param integer $remoteId
     *
     * @return StackoverflowConfig
     */
    public function setRemoteId($remoteId)
    {
        $this->remoteId = $remoteId;

        return $this;
    }

    /**
     * Get remoteId
     *
     * @return int
     */
    public function getRemoteId()
    {
        return $this->remoteId;
    }

    /**
     * Set tags
     *
     * @param array $tags
     *
     * @return StackoverflowConfig
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set selfQuestions
     *
     * @param boolean $selfQuestions
     *
     * @return StackoverflowConfig
     */
    public function setSelfQuestions($selfQuestions)
    {
        $this->selfQuestions = $selfQuestions;

        return $this;
    }

    /**
     * Get selfQuestions
     *
     * @return bool
     */
    public function getSelfQuestions()
    {
        return $this->selfQuestions;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return StackoverflowConfig
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }
}


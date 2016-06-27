<?php

namespace Van\FeedBundle\Event;

use Symfony\Component\EventDispatcher\Event;

use Van\FeedBundle\Entity\Post;

class PostEvent extends Event
{
    /**
     * @var \Van\FeedBundle\Entity\Post
     */
    protected $post;

    /**
     * @var
     */
    protected $errors;

    /**
     * @var
     */
    protected $warnings;

    /**
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
        $this->errors = array();
        $this->warnings = array();
    }

    /**
     * @return Post
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param $error
     */
    public function setError($error)
    {
        $this->errors[] = $error;
    }

    /**
     * @return mixed
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * @param $warning
     */
    public function setWarning($warning)
    {
        $this->warnings[] = $warning;
    }
}
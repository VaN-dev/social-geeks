<?php

namespace Van\FeedBundle\Service;
use Van\FeedBundle\Entity\Post;

/**
 * Class PostParser
 * @package Van\FeedBundle\Service
 */
class PostParser
{
    /**
     * @var PostUrifier
     */
    private $postUrifier;

    /**
     * PostParser constructor.
     * @param PostUrifier $postUrifier
     */
    public function __construct(PostUrifier $postUrifier)
    {
        $this->postUrifier = $postUrifier;
    }

    /**
     * @param Post $post
     */
    public function parse(Post $post)
    {
        $urifiedString = $this->postUrifier->urify($post->getContent());
        
        echo '<pre>';
        \Doctrine\Common\Util\Debug::dump($urifiedString);
        echo '</pre>';
        die();
    }
}
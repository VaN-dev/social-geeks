<?php

namespace AppBundle\Service\Feed;
use AppBundle\Entity\Feed\Post;


/**
 * Class PostParser
 * @package AppBundle\Service\Feed
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
<?php

namespace Van\FeedBundle\EventListener;

use Van\FeedBundle\Event\PostEvent;
use Van\FeedBundle\Service\PostParser;

/**
 * Class PostListener
 * @package Van\FeedBundle\EventListener
 */
class PostListener
{
    /**
     * @var PostParser
     */
    private $postParser;

    /**
     * PostListener constructor.
     * @param PostParser $postParser
     */
    public function __construct(PostParser $postParser)
    {
        $this->postParser = $postParser;
    }

    /**
     * @param PostEvent $event
     */
    public function prePostInserted(PostEvent $event)
    {
        $this->postParser->parse($event->getPost());
    }
}
<?php

namespace AppBundle\EventListener\Feed;

use AppBundle\Event\Feed\PostEvent;
use AppBundle\Service\Feed\PostParser;

/**
 * Class PostListener
 * @package AppBundle\EventListener\Feed
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
<?php

namespace Van\BookmarkBundle\Service\TreeBuilder;

/**
 * Interface TreeBuilderInterface
 * @package Van\BookmarkBundle\Service\TreeBuilder
 */
interface TreeBuilderInterface
{
    /**
     * Build a tree from an ArrayCollection
     *
     * @param array $collection
     * @return mixed
     */
    public function build(array $collection);
}
<?php

namespace AppBundle\Service\TreeBuilder;

/**
 * Interface TreeBuilderInterface
 * @package AppBundle\Service\TreeBuilder
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
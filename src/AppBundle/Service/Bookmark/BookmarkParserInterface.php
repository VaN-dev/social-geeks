<?php

namespace AppBundle\Service\Bookmark;

/**
 * Interface BookmarkParserInterface
 * @package AppBundle\Service\Bookmark
 */
interface BookmarkParserInterface
{
    /**
     * Parse a file
     *
     * @param $filename
     * @return array
     */
    public function parseFile($filename);

    /**
     * Parse a string
     *
     * @param $string
     * @return array
     */
    public function parseString($string);
}
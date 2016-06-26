<?php

namespace Van\BookmarkBundle\Service\Parser;

/**
 * Interface ParserInterface
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
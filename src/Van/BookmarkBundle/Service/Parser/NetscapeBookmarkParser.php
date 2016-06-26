<?php

namespace Van\BookmarkBundle\Service\Parser;

/**
 * Class NetscapeBookmarkParser
 * @package Van\BookmarkBundle\Service\Parser
 */
class NetscapeBookmarkParser implements BookmarkParserInterface
{
    /**
     * Parses a Netscape bookmark file
     *
     * @param string $file Bookmark file to parse
     * @return array An associative array containing parsed links
     */
    public function parseFile($file)
    {
        return $this->parseString(file_get_contents($file));
    }

    /**
     * Parses a string containing Netscape-formatted bookmarks
     *
     * @param string $string String containing Netscape bookmarks
     * @return array An associative array containing parsed links
     */
    public function parseString($string)
    {
        $tree = [];

        $lines = explode("\n", $this->sanitizeString($string));

        foreach ($lines as $line_no => $line) {
            var_dump($line);
//            $tree = $this->parseLine($line);
        }

        return $tree;
    }

//    public function parseLine($line)
//    {
//        if (preg_match('/^<dl>/i', $line)) {
//            $lines =
//        }
//        if (preg_match('/^<h\d+(.*?)>(.*?)<\/h\d+>/i', $line, $m1)) {
//            $tree[$line_no] = $m1[2];
//        }
//        elseif (preg_match('/<a(.*?)>(.*?)<\/a>/i', $line, $m2)) {
//            $tree[$line_no][] = $m2[2];
//        }
//
//        return $tree;
//    }

    /**
     * Sanitizes the content of a string containing Netscape bookmarks
     *
     * @param string $bookmarkString Original bookmark string
     * @return string Sanitized bookmark string
     */
    private function sanitizeString($bookmarkString)
    {
        $sanitized = $bookmarkString;
        $sanitized = str_replace(array("\r", "\t"), array('',' '), $sanitized);

        $sanitized = preg_replace_callback(
            '@<DD>(.*?)(<A|<\/|<DL|<DT|<P)@mis',
            function($match) {
                return '<DD>'.str_replace("\n", '<br>', trim($match[1])).'</';
            },
            $sanitized
        );

        $sanitized = preg_replace('@>(\s*?)<@mis', ">\n<", $sanitized);
        $sanitized = preg_replace('@<br>\n<br>@mis', "<br><br>", $sanitized);
        $sanitized = preg_replace('@(<!DOCTYPE|<META|<!--|<TITLE|<H1|<P)(.*?)\n@i', '', $sanitized);
        $sanitized = trim($sanitized);
        $sanitized = preg_replace('@\n<dd@i', '<dd', $sanitized);

        return $sanitized;
    }
}
<?php

namespace Van\BookmarkBundle\Service\TreeBuilder;


/**
 * Class DefaultTreeBuilder
 * @package Van\BookmarkBundle\Service\TreeBuilder
 */
class DefaultTreeBuilder implements TreeBuilderInterface
{
    /**
     * @param array $collection
     * @return array
     */
    public function build(array $collection)
    {
        $tree = [];

        foreach ($collection as $category) {
            $tree = $this->buildRow($tree, $category);
        }

        return $tree;
    }

    /**
     * @param $tree
     * @param $object
     * @return array
     */
    public function buildRow($tree, $object)
    {
        $row = [
            "id" => $object->getId(),
            "name" => $object->getName(),
        ];

        $reflect = new \ReflectionClass($object);
        $row["type"] = $reflect->getShortName();

        if (method_exists($object, "getUrl")) {
            $row["url"] = $object->getUrl();
        }

        if (method_exists($object, "getChildren")) {
            foreach ($object->getChildren() as $category) {
                $row["children"] = $this->buildRow($tree, $category);
            }
        }

        if (method_exists($object, "getBookmarks")) {
            foreach ($object->getBookmarks() as $bookmark) {
                $row["children"] = $this->buildRow($tree, $bookmark);
            }
        }

        $tree[] = $row;

        return $tree;
    }
}
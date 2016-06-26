<?php

namespace Van\FeedBundle\Form\DataTransformer;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Van\FeedBundle\Entity\Post;

class PostToNumberTransformer implements DataTransformerInterface
{
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Transforms an object (Post) to a string (number).
     *
     * @param  Post|null $post
     * @return string
     */
    public function transform($post)
    {
        if (null === $post) {
            return '';
        }

        return $post->getId();
    }

    /**
     * Transforms a string (number) to an object (Post).
     *
     * @param  string $postNumber
     * @return Post|null
     * @throws TransformationFailedException if object (Post) is not found.
     */
    public function reverseTransform($postNumber)
    {
        // no Post number? It's optional, so that's ok
        if (!$postNumber) {
            return;
        }

        $post = $this->manager
            ->getRepository('VanFeedBundle:Post')
            // query for the Post with this id
            ->find($postNumber)
        ;

        if (null === $post) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'A Post with number "%s" does not exist!',
                $postNumber
            ));
        }

        return $post;
    }
}
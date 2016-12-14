<?php

namespace AppBundle\Form\Type\Feed;

use AppBundle\Form\DataTransformer\Feed\PostToNumberTransformer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextType::class, [
                'attr' => [
                    'placeholder' => 'Comment this post...',
                ],
            ])
            ->add('post', HiddenType::class)
        ;

        $builder->get('post')
            ->addModelTransformer(new PostToNumberTransformer($this->em));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Feed\Comment'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'van_feedbundle_commenttype';
    }
}

<?php

namespace AppBundle\Form\Type\Feed;

use AppBundle\Form\Type\Core\ScopeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class PostType
 * @package AppBundle\Form\Type\Feed
 */
class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', null, [
                'attr' => [
                    'placeholder' => 'Share something with the community...',
                ],
            ])
            ->add('scope', ScopeType::class)
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Feed\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'van_feedbundle_posttype';
    }
}

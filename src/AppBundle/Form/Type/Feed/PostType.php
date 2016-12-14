<?php

namespace AppBundle\Form\Type\Feed;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('scope', EntityType::class, [
                'class' => 'AppBundle\Entity\Core\Scope',
                'property' => 'name',
            ])
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

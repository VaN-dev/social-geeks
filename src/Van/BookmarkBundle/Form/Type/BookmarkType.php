<?php

namespace Van\BookmarkBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookmarkType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('url', 'text')
            ->add('scope', 'entity', [
                'class' => 'AppBundle\Entity\Scope',
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
            'data_class' => 'Van\BookmarkBundle\Entity\Bookmark'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'van_bookmarkbundle_bookmarktype';
    }
}

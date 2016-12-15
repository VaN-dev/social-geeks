<?php

namespace AppBundle\Form\Type\Bookmark;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class BookmarkType
 * @package AppBundle\Form\Type\Bookmark
 */
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
            ->add('url', TextType::class)
            ->add('category', EntityType::class, [
                'label' => 'Parent category',
                'class' => 'AppBundle\Entity\Bookmark\Category',
                'choice_label' => 'name',
            ])
            ->add('scope', EntityType::class, [
                'class' => 'AppBundle\Entity\Core\Scope',
                'choice_label' => 'name',
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Bookmark\Bookmark'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_bundle_bookmark_type';
    }
}

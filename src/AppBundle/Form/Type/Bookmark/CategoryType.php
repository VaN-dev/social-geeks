<?php

namespace AppBundle\Form\Type\Bookmark;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CategoryType
 * @package AppBundle\Form\Type\Bookmark
 */
class CategoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('parent', EntityType::class, [
                'label' => 'Parent category',
                'class' => 'AppBundle\Entity\Bookmark\Category',
                'choice_label' => 'name',
                'placeholder' => 'None',
                'required' =>  false,
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Bookmark\Category'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'van_bookmarkbundle_categorytype';
    }
}

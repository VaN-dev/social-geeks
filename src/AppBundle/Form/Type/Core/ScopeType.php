<?php

namespace AppBundle\Form\Type\Core;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ScopeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'class' => 'AppBundle\Entity\Core\Scope',
            'property_path' => 'name',
        ));
    }

    public function getName()
    {
        return 'app_bundle_scope_type';
    }

    public function getParent()
    {
        return EntityType::class;
    }
}

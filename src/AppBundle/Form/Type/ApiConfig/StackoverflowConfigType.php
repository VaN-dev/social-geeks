<?php

namespace AppBundle\Form\Type\ApiConfig;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class StackoverflowConfigType
 * @package AppBundle\Form\Type\ApiConfig
 */
class StackoverflowConfigType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status', ChoiceType::class, [
                'label' => 'Enable Stackoverflow integration',
                'expanded' => true,
                'choices' => [
                    'No' => false,
                    'Yes' => true,
                ],
            ])
            ->add('remoteId')
            ->add('tags')
            ->add('selfQuestions')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ApiConfig\StackoverflowConfig'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_bundle_stackoverflow_config_type';
    }
}

<?php

namespace AppBundle\Form\Type\Community;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class JoinCommunityType
 * @package AppBundle\Form\Type\Community
 */
class JoinCommunityType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("community", ChoiceType::class, [
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Community\UserCommunity'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_bundle_join_community_type';
    }
}

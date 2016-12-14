<?php

namespace AppBundle\Form\Type\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class UserRegistrationType
 * @package AppBundle\Form\Type\User
 */
class UserRegistrationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', null, array(
                'label' => 'Your firstname',
                'attr' => [
                    'placeholder' => 'Your firstname',
                ],
            ))
            ->add('lastname', null, array(
                'label' => 'Your lastname',
                'attr' => [
                    'placeholder' => 'Your lastname',
                ],
            ))
            ->add('username', null, array(
                'label' => 'Your Email',
                'attr' => [
                    'placeholder' => 'Your Email',
                ],
            ))
            ->add('passwordPlain', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'required' => true,
                'first_options'  => [
                    'label' => 'Password',
                    'attr' => [
                        'placeholder' => 'Password',
                    ],
                ],
                'second_options' => [
                    'label' => 'Repeat password',
                    'attr' => [
                        'placeholder' => 'Repeat password',
                    ],
                ],
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_user_registration_type';
    }
}

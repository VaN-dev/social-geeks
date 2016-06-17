<?php

namespace Van\SecurityBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResetPasswordType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'hidden')
            ->add('passwordToken', 'hidden')
            ->add('passwordPlain', 'repeated', [
                'type' => 'password',
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'first_options'  => array(
                    'label' => 'Mot de passe',
                    'attr' => array(
                        'placeholder' => 'Votre mot de passe (8 caractères min.)',
                        'required' => true,
                    ),
                ),
                'second_options'  => array(
                    'label' => 'Confirmez votre mot de passe',
                    'attr' => array(
                        'placeholder' => 'Confirmez votre mot de passe',
                        'required' => true,
                    ),
                ),
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Van\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'van_securitybundle_resetpassword';
    }
}

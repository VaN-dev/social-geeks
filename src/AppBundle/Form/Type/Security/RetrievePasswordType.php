<?php

namespace AppBundle\Form\Type\Security;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrievePasswordType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("username", null, array(
                "label" => "E-mail",
                "attr" => [
                    "placeholder" => "Votre adresse e-mail",
                ],
            ))
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
        return 'van_securitybundle_retrievepassword';
    }
}

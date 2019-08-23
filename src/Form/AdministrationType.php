<?php

namespace App\Form;

use App\Entity\Administration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdministrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noms_administration')
            ->add('prenoms_administration')
            ->add('pseudo_administration')
            ->add('mot_de_passe_administration')
            ->add('email_administration')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Administration::class,
        ]);
    }
}

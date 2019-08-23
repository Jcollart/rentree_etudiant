<?php

namespace App\Form;

use App\Entity\ListePoint;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListePointType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code_point')
            ->add('question_point')
            ->add('reponse1_point')
            ->add('reponse2_point')
            ->add('reponse3_point')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ListePoint::class,
        ]);
    }
}

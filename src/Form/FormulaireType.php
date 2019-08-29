<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Formulaire;
use App\Entity\Etudiant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormulaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Type_Formulaire')
            ->add('Etablissement')
            ->add('Nom_Equipe')
            ->add('Nom')
            ->add('Prenom')
            ->add('Mot_De_Passe')
            ->add('Email')
            ->add('Mobile')
            ->add('save', SubmitType::class, [
                'label'=>'Valider Enregistrement',
                'attr' =>[
                      'class'=> 'btn btn-light'
                ]
                ])
                ->getForm();
            
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}

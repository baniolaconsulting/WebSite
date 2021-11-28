<?php

namespace App\Form;

use App\Entity\Compteutilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompteutilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matriculeutilisateur')
            ->add('nomcompte')
            ->add('prenomcompte')
            ->add('login')
            ->add('pwd')
            ->add('mail')
            ->add('adresse')
            ->add('tel')
            ->add('typeutilisateur')
            ->add('matriculeqcm')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Compteutilisateur::class,
        ]);
    }
}

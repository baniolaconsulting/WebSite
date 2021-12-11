<?php

namespace App\Form;

use App\Entity\Compteutilisateur;
use Doctrine\DBAL\Types\StringType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;

class CompteutilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matriculeutilisateur')
            ->add('nomcompte')
            ->add('prenomcompte')
            ->add('login')
            ->add('pwd',PasswordType::class)
            ->add('confirm_pwd', PasswordType::class)
            ->add('mail')
            ->add('adresse')
            ->add('tel');
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Compteutilisateur::class,
        ]);
    }
}

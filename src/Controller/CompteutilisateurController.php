<?php

namespace App\Controller;
use App\Entity\Compteutilisateur;


use App\Form\CompteutilisateurType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompteutilisateurController extends AbstractController
{
    #[Route('/compteutilisateur', name: 'compteutilisateur')]
    public function index(): Response
    {
        return $this->render('compteutilisateur/index.html.twig', [
            'controller_name' => 'CompteutilisateurController',
        ]);
    }

    #[Route('/addutilisateur', name : 'addutil')]
    public function formAddUtilisateur(Request $request): Response
    {
        $Compteutilisateur = new Compteutilisateur;
        
        
       

        $form = $this->createForm(CompteutilisateurType::class,$Compteutilisateur);

        return $this->render('compteutilisateur/index.html.twig',array(
            'form'=>$form->createView()));
        
    }
}

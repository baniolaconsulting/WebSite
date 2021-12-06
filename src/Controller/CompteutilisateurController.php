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
   

    #[Route('/addutilisateur', name : 'addutil')]
    public function formAddUtilisateur(Request $request): Response
    {
        $Compteutilisateur = new Compteutilisateur;
        $manager = $this->getDoctrine()->getManager();
        
       

        $form = $this->createForm(CompteutilisateurType::class,$Compteutilisateur);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
           $Compteutilisateur = $form->getData();
            $manager->persist($Compteutilisateur);
            $manager->flush();

        }
       

        return $this->render('compteutilisateur/index.html.twig',array(
            'form'=>$form->createView()));
        
    }
}

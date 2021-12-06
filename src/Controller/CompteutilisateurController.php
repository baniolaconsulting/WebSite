<?php

namespace App\Controller;
use App\Entity\Compteutilisateur;


use App\Form\CompteutilisateurType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class CompteutilisateurController extends AbstractController
{
   

    #[Route('/addutilisateur', name : 'addutil')]
    public function formAddUtilisateur(Request $request ,UserPasswordEncoderInterface $encoder): Response
    {
       
        $manager = $this->getDoctrine()->getManager();
        
        $Compteutilisateur = new Compteutilisateur; 
       

        $form = $this->createForm(CompteutilisateurType::class,$Compteutilisateur);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
           $Compteutilisateur = $form->getData();

           $cript = $encoder->encodePassword($Compteutilisateur, $Compteutilisateur->getPwd());
           $Compteutilisateur->setPwd($cript);
           
            $manager->persist($Compteutilisateur);
            $manager->flush();

        }
       

        return $this->render('compteutilisateur/index.html.twig',array(
            'form'=>$form->createView()));
        
    }
}

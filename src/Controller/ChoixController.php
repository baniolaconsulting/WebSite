<?php

namespace App\Controller;

use App\Entity\Choix;
use App\Form\ChoixType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChoixController extends AbstractController
{
    #[Route('/choix', name: 'choix')]
    public function index(): Response
    {
        return $this->render('choix/index.html.twig', [
            'controller_name' => 'ChoixController',
        ]);
    }


    #[Route('/addchoix', name: 'choix')]
    public function formAddUtilisateur(Request $request): Response
    {
        $choix = new Choix;
        
        $form = $this->createForm(ChoixType::class, $choix);

        return $this->render('choix/index.html.twig', array(
            'form' => $form->createView()
        ));
    }
}

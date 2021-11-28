<?php

namespace App\Controller;

use App\Entity\Marque;
use App\Form\MarqueType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MarqueController extends AbstractController
{
    #[Route('/marque', name: 'marque')]
    public function index(): Response
    {
        return $this->render('marque/index.html.twig', [
            'controller_name' => 'MarqueController',
        ]);
    }

    #[Route('/addmarque', name : 'add.marque')]
    public function formAddMarque(Request $request): Response
    {
        $marque = new Marque;
        
        $form = $this->createForm(MarqueType::class,$marque);

        return $this->render('marque/index.html.twig',array(
            'form'=>$form->createView()));
        
    }
}

<?php

namespace App\Controller;

use App\Entity\Modele;
use App\Form\ArticleType;
use App\Form\ModeleType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ModeleController extends AbstractController
{
    #[Route('/modele', name: 'modele')]
    public function index(): Response
    {
        return $this->render('modele/index.html.twig', [
            'controller_name' => 'ModeleController',
        ]);
    }

    #[Route('/addmodele', name : 'add.modele')]
    public function formAddModele(Request $request): Response
    {
        $modele = new Modele;
        
        $form = $this->createForm(ModeleType::class,$modele);
        

        return $this->render('modele/index.html.twig',array(
            'form'=>$form->createView()));
        
    }
}


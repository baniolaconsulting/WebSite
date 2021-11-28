<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AvisController extends AbstractController
{
    #[Route('/avis', name: 'avis')]
    public function index(): Response
    {
        return $this->render('avis/index.html.twig', [
            'controller_name' => 'AvisController',
        ]);
    }


    #[Route('/addavis', name : 'add.avis')]
    public function formAddArticle(Request $request): Response
    {
        $avis = new Avis;
        
        $form = $this->createForm(AvisType::class,$avis);

        return $this->render('avis/index.html.twig',array(
            'form'=>$form->createView()));
        
    }

}

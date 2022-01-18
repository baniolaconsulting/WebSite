<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Repository\AnnonceRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home', methods: ['GET'])]
   

    public function index(AnnonceRepository $annonceRepository): Response
    
    {
        $annonces=  $annonceRepository->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        'annonces' =>$annonces,
       
       
       
 
     ]);
    }

    

}

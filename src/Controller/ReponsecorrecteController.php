<?php

namespace App\Controller;

use App\Entity\Reponsecorrecte;
use App\Form\ReponsecorrecteType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReponsecorrecteController extends AbstractController
{
    #[Route('/reponsecorrecte', name: 'reponsecorrecte')]
    public function index(): Response
    {
        return $this->render('reponsecorrecte/index.html.twig', [
            'controller_name' => 'ReponsecorrecteController',
        ]);
    }

    #[Route('/addreponse', name: 'add.reponse')]
    public function formAddModele(Request $request): Response
    {
        $reponsecorrecte = new Reponsecorrecte;

        $form = $this->createForm(ReponsecorrecteType::class, $reponsecorrecte);


        return $this->render('reponsecorrecte/index.html.twig', array(
            'form' => $form->createView()
        ));
    }
}

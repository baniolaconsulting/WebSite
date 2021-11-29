<?php

namespace App\Controller;

use App\Entity\Qcm;
use App\Form\QcmType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QcmController extends AbstractController
{
    #[Route('/qcm', name: 'qcm')]
    public function index(): Response
    {
        return $this->render('qcm/index.html.twig', [
            'controller_name' => 'QcmController',
        ]);
    }

    #[Route('/addqcm', name: 'add.qcm')]
    public function formAddModele(Request $request): Response
    {
        $qcm = new Qcm;

        $form = $this->createForm(QcmType::class, $qcm);


        return $this->render('qcm/index.html.twig', array(
            'form' => $form->createView()
        ));
    }
}

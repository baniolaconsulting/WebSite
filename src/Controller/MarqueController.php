<?php

namespace App\Controller;

use App\Entity\Marque;
use App\Form\MarqueType;
use Doctrine\Persistence\ObjectManager;
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
    public function formAddMarque(Request $request)
    {

        $manager = $this->getDoctrine()->getManager();
        $marque = new Marque;
        $form = $this->createForm(MarqueType::class,$marque);
        
        $form->handleRequest($request);
        
        

if ($form->isSubmitted()) {
$marque = $form->getData();

$manager->persist($marque);
$manager->flush();
}

       
       
       
       
      //  $data = $form->getData();
        //dd($form->getData());
        

        //$marque->setNommarque($data->nommarque);
       // $marque->setMatriculemarque($request->request->matriculemarque);
//
       // dd($marque);
      //  $marque->setGroupeconstructeur('volvo');

      //  $article->setTitle($data['title']);
       // $article->setContent($data['content']);
       // $article->setAuthor($this->getUser());

       // $manager->persist($marque);
       // $manager->flush();

        return $this->render('marque/index.html.twig',array(
            'form'=>$form->createView()));
        
    }
}

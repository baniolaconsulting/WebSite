<?php

namespace App\Controller;

use App\Entity\Question;
use App\Form\QuestionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    #[Route('/question', name: 'question')]
    public function index(): Response
    {
        return $this->render('question/index.html.twig', [
            'controller_name' => 'QuestionController',
        ]);
    }

    #[Route('/addquestion', name: 'add.question')]
    public function formAddModele(Request $request): Response
    {
        $question = new Question;

        $form = $this->createForm(QuestionType::class, $question);

        $manager = $this->getDoctrine()->getManager();
       
        
        $form->handleRequest($request);
        

if ($form->isSubmitted() && $form->isValid()) {
$question = $form->getData();

$manager->persist($question);
$manager->flush();
}


        return $this->render('question/index.html.twig', array(
            'form' => $form->createView()
        ));
    }
}

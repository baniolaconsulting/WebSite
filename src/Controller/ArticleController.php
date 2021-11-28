<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'article')]
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    
    #[Route('/addarticle', name : 'add.article')]
    public function formAddArticle(Request $request): Response
    {
        $article = new Article;
        
         $form = $this->createForm(ArticleType::class,$article);

        return $this->render('article/index.html.twig',array(
            'form'=>$form->createView()));
        
    }
}

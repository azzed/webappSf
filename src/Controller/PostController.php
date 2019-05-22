<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class PostController extends AbstractController
{
    /**
     * Afficher la page d'accueil
     * @Route("/", name="home")
     * @return void
     */
    public function home()
    {
        return $this->render("home.html.twig");
    }
     /**
     * Afficher la page d'accueil
     * @Route("/post", name="post")
     * @return void
     */
    public function articles()
    {
        return $this->render("articles.html.twig");
    }
    
    /**
     * Afficher un article
     * @Route("/post/{title}",name="title")
     * @param string $title
     *
     */
    public function post($title)
    {
        return $this->render("post.html.twig");
    }
}
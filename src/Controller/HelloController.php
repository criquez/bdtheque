<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController{
    
    #[Route('hello',name:'hello')] //route au format Symfony 6.2
    function hello() 
    {
        //return new Response('Hello!');          // retourne message
        //return $this->render('base.html.twig'); // retourne un template twig
        //return $this->redirectToRoute('/');      // fait une redirection
        //throw $this->createNotFoundException();    // creer une erreur not found
        $title = "utilisateurs";
        $users = ["Mick","Joh", "Cristian"];
        return $this-> render('hello.html.twig',
            ['title' => $title, 'array' => $users ]); 
        //var_dump($request -> query); die; 
    }

        
    #[Route('hello/{param}',name:'helloYou',requirements: ['param' => '\d+'])] //route au format Symfony 6.2
    function helloYou($param) 
    {
        $title = "utilisateurs";
        $users = ["Mick","Joh", "Cristian",$param];
        return $this-> render('hello.html.twig',
            ['title' => $title, 'array' => $users ]); 
        //var_dump($request -> query); die; 
    }
}
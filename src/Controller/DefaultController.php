<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
   public function indexAction()
   {
      return $this->render('home.html.twig');
   }

   public function contactAction()
   {
      return $this->render('contact.html.twig');
   }
}

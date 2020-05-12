<?php

namespace App\Controller;

use App\Repository\TechnoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
   public function indexAction()
   {
      return $this->render('home.html.twig');
   }

   public function technosReadAction(TechnoRepository $technoRepository)
   {
      // Récupérer les technos pour les afficher ensuite sur la page technos.html.twig
      $technos = $technoRepository->findAll();
      return $this->render('technos.html.twig', ['technos' => $technos]);
   }

   public function contactAction()
   {
      $form = $this->createForm('App\Form\FormulaireType');
      return $this->render('contact.html.twig', ["form1" => $form->createView()]);
      
   }
}

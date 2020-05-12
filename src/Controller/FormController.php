<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\JobRepository;
use Symfony\Component\HttpFoundation\Request;

class FormController extends AbstractController
{
   

   public function formAction($request)
   {
      $form = $this->createForm('App\Form\FormulaireType');
      return $this->render('contact.html.twig', ["form1"=>$form->createView()]);
   }
}


// -------------------------------------

/*
namespace App\Controller;


use App\Entity\Person;
use App\Repository\JobRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class JobController extends AbstractController
{
    public function jobUpdateAction(Request $request, $id, JobRepository $jobRepository){

        $job = $jobRepository->find($id);

        $form = $this->createForm('App\Form\JobType',$job);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $job = $form->getData();
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($job);
            $manager->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('pages/job_update.html.twig', ["jobForm"=>$form->createView()]);

    }
} */
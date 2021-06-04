<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Inscription;

class InscriptionController extends AbstractController
{
    #[Route('/inscription', name: 'inscription')]
    public function index(Request $request): Response
    {
    	   
    
     if ($request ->getMethod()=="POST"){

         $sa= $this->getDoctrine()->getManager();
         
         $nom= $request->get("nomC");
         $prenom= $request->get("prenomC");

         $email= $request->get("emailC");
         $adresse= $request->get("adresseC");
        $codepostale= $request->get("codePostalC");
        $numtel= $request->get("numTelC");
        $mdp= $request->get("passwordC");
         $inscription= new Inscription();
         $inscription->setNom($nom);
         $inscription->setPrenom($prenom);
         $inscription->setEmail($email);
         $inscription->setAdresse($adresse);
         $inscription->setCodepostale($codepostale);
         $inscription->setNumTel($numtel);
         $inscription->setMDP($mdp);      
         $sa->persist($inscription);
         $sa->flush();
          $this->addFlash('success','votre message a ete envoyer');
          $this->redirectToRoute('inscription');

     }
        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'InscriptionController',
        ]);
    }
}

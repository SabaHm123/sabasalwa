<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Contact;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;



class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request): Response
    {
    	   
    dump($request);
    if($request -> get('name') !=null ){
   
     }
     if ($request ->getMethod()=="POST"){

         $sa= $this->getDoctrine()->getManager();
         $nom= $request->get("Name");
         $email= $request->get("email");
         $objet= $request->get("objet");
         $message= $request->get("message");
         $contact= new Contact();
         $contact->setName($nom);
         $contact->setEmail($email);
         $contact->setObjet($objet);
         $contact->setMessage($message);
         $sa->persist($contact);
         $sa->flush();
          $this->addFlash('success','votre message a ete envoyer');
          $this->redirectToRoute('contact');

     }
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }




/**
    *@Route("/email")
    */
    public function sendEmail(MailerInterface $mailer):Response
    {
        $email =(new Email())
        ->from('hello@gmail.com')
        ->to('abdelkadersalwa71@gmail.com')
        ->subject('atelier symfony')
        ->html('<p> ceci est un test d"envoi d"email </p>');
        $mailer -> send($email);
        return new Response("email sent successfully!");

    }
}

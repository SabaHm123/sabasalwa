<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjouterProduitController extends AbstractController
{
    #[Route('/ajouter/produit', name: 'ajouter_produit')]
    public function index(): Response
    {
        return $this->render('ajouter_produit/index.html.twig', [
            'controller_name' => 'AjouterProduitController',
        ]);
    }
}

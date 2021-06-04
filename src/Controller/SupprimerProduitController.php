<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SupprimerProduitController extends AbstractController
{
    #[Route('/supprimer/produit', name: 'supprimer_produit')]
    public function index(): Response
    {
        return $this->render('supprimer_produit/index.html.twig', [
            'controller_name' => 'SupprimerProduitController',
        ]);
    }
}

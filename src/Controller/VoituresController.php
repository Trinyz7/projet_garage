<?php

// src/Controller/VoituresController.php

namespace App\Controller;

use App\Repository\VoituresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoituresController extends AbstractController
{
    #[Route('/voitures-occasion', name: 'voitures_occasion')]
    public function index(VoituresRepository $voituresRepository): Response
    {
        // Récupérer toutes les voitures d'occasion depuis la base de données
        $voitures = $voituresRepository->findAll();

        // Rendre la vue en passant les voitures récupérées
        return $this->render('voitures/occasion.html.twig', [
            'voitures' => $voitures,
        ]);
    }
}

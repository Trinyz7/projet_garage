<?php
// src/Controller/HomeController.php

namespace App\Controller;

use App\Repository\ServiceRepository;
use App\Repository\HorairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ServiceRepository $serviceRepository, HorairesRepository $horairesRepository): Response
    {
        // Récupérer les services et les horaires
        $services = $serviceRepository->findAll();
        $horaires = $horairesRepository->findAll();

        return $this->render('index.html.twig', [
            'services' => $services,
            'horaires' => $horaires,
        ]);
    }
}

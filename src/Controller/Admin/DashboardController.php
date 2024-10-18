<?php

namespace App\Controller\Admin;

use App\Entity\Horaires;
use App\Entity\Service;
use App\Entity\Voitures;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin.index')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Projet Garage Symfony - Administration')
            ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Services', 'fa-solid fa-screwdriver-wrench', Service::class);
        yield MenuItem::linkToCrud('Horaires', 'fa-solid fa-hourglass-start', Horaires::class);
        yield MenuItem::linkToCrud('Voitures', 'fa-solid fa-car', Voitures::class);


    }
}

<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use App\Entity\Conference;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('My dashboard');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
//        yield MenuItem::linkToCrud('Conference', 'fas fa-list', Conference::class);
//        yield MenuItem::linkToCrud('Comment', 'fas fa-list', Comment::class);
//        return [
//            MenuItem::linkToDashboard('Dashboard', 'fa fa-dashboard'),
//
//            MenuItem::section('Conference'),
//            MenuItem::linkToCrud('Conference', 'fa fa-conference', Conference::class),
//
//            MenuItem::section('Comment'),
//            MenuItem::linkToCrud('Comment', 'fa fa-comment', Comment::class),
//        ];
    }
}

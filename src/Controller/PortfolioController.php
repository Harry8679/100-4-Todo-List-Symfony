<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PortfolioController extends AbstractController
{
    // Page d'accueil
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'prenom'      => 'Harry',
            'metier'      => 'Développeur Web & Mobile',
            'disponible'  => true, // true = disponible, false = non disponible
        ]);
    }

    // Page projets
    #[Route('/projets', name: 'app_projets')]
    public function projets(): Response
    {
        $projets = [
            [
                'titre'       => 'Blog Symfony',
                'description' => 'Un blog créé avec Symfony 7 et Twig.',
                'termine'     => true,
            ],
            [
                'titre'       => 'App Météo',
                'description' => 'Application météo en React TypeScript.',
                'termine'     => true,
            ],
            [
                'titre'       => 'Marketplace',
                'description' => 'Plateforme e-commerce en cours de développement.',
                'termine'     => false,
            ],
        ];

        return $this->render('portfolio/projets.html.twig', [
            'projets' => $projets,
        ]);
    }

    // Page contact
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('portfolio/contact.html.twig');
    }
}
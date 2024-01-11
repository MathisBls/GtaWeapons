<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CibleController extends AbstractController {
    #[Route('/cible', name: 'cible')]
    public function index(): Response {
        return $this->render('cible/index.html.twig', [
            'controller_name' => 'CibleController',
        ]);
    }
}

<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use App\Repository\ArmesRepository;
use App\Repository\DegatsRepository;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {
    #[Route('/', name: 'home')]
    public function index(CategoriesRepository $categorieRepository, ArmesRepository $armesRepository, DegatsRepository $degatsRepository): Response {
        $client = new Client(['verify' => false]);

        try {
            $response = $client->get('http://localhost:8000/api/categoriess')->getBody()->getContents();
            $categories = json_decode($response, true);

            $response = $client->get('http://localhost:8000/api/armess')->getBody()->getContents();
            $armes = json_decode($response, true);

            $response = $client->get('http://localhost:8000/api/degatss')->getBody()->getContents();
            $degats = json_decode($response, true);
        } catch (GuzzleException $e) {
            $this->addFlash('error', 'Problème de connexion à l\'API: ' . $e->getMessage());
            return $this->redirectToRoute('home');
        }

        return $this->render('home/index.html.twig', [
            'categories' => $categories['hydra:member'] ?? [],
            'armes' => $armes['hydra:member'] ?? [],
            'degats' => $degats['hydra:member'] ?? []
        ]);
    }
}

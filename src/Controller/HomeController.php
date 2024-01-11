<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArmesRepository;
use App\Repository\DegatsRepository;
use GuzzleHttp\Client;

class HomeController extends AbstractController {
    #[Route('/', name: 'home')]
    public function index(CategoriesRepository $categorieRepository, ArmesRepository $armesRepository, DegatsRepository $degatsRepository): Response {
        $client = new Client(['verify' => false]);
        $response = $client->get('http://localhost:8000/api/categoriess')->getBody()->getContents();
        $categories = json_decode($response, true);
        $response = $client->get('http://localhost:8000/api/armess')->getBody()->getContents();
        $armes = json_decode($response, true);
        $response = $client->get('http://localhost:8000/api/degatss')->getBody()->getContents();
        $degats = json_decode($response, true);
        return $this->render('home/index.html.twig', [
            'categories' => $categories['hydra:member'],
            'armes' => $armes['hydra:member'],
            'degats' => $degats['hydra:member']
        ]);
    }
}


?>

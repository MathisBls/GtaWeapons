<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArmesRepository;
use App\Repository\CategoriesRepository;
use App\Repository\RankRepository;
use GuzzleHttp\Client;

class CibleController extends AbstractController {
    #[Route('/cible', name: 'cible')]
    public function index(ArmesRepository $armesRepository, CategoriesRepository $categorieRepository, RankRepository $rankRepository): Response {
        $client = new Client(['verify' => false]);
        $response = $client->get('https://localhost:8000/api/categoriess')->getBody()->getContents();
        $categories = json_decode($response, true)["hydra:member"];
        $response = $client->get('https://localhost:8000/api/armess')->getBody()->getContents();
        $armes = json_decode($response, true)["hydra:member"];
        $response = $client->get('https://localhost:8000/api/ranks')->getBody()->getContents();
        $ranks = json_decode($response, true)["hydra:member"];

        return $this->render('cible/index.html.twig', [
            'armes' => $armes,
            'categories' => $categories,
            'ranks' => $ranks,
        ]);
    }
}

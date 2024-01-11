<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArmesRepository;
use App\Repository\DegatsRepository;

class HomeController extends AbstractController {
    #[Route('/', name: 'home')]
    public function index(CategoriesRepository $categorieRepository, ArmesRepository $armesRepository, DegatsRepository $degatsRepository): Response {
        $categories = $categorieRepository->findAll();
        $armes = $armesRepository->findAll();
        $degats = $degatsRepository->findAll(); 
        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            'armes' => $armes,
            'degats' => $degats
        ]);
    }
}


?>

<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArmesRepository;
use App\Repository\CategoriesRepository;
use App\Repository\RankRepository;

class CibleController extends AbstractController {
    #[Route('/cible', name: 'cible')]
    public function index(ArmesRepository $armesRepository, CategoriesRepository $categorieRepository, RankRepository $rankRepository): Response {
        $armes = $armesRepository->findAll();
        $categories = $categorieRepository->findAll();
        $ranks = $rankRepository->findAll();

        return $this->render('cible/index.html.twig', [
            'armes' => $armes,
            'categories' => $categories,
            'ranks' => $ranks,
        ]);
    }
}

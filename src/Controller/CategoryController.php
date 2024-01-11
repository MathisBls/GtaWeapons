<?php
namespace App\Controller;

use App\Repository\CategoriesRepository;
use App\Repository\ArmesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController {
    #[Route('/category/{slug}', name: 'category_show')]
    public function show(string $slug, CategoriesRepository $categorieRepository, ArmesRepository $armesRepository) {
        $category = $categorieRepository->findOneBy(['slug' => $slug]);
        if (!$category) {
            throw $this->createNotFoundException('La catégorie n\'existe pas.');
        }
        $armes = $armesRepository->findBy(['categorie' => $category]);

        return $this->render('category/show.html.twig', [
            'category' => $category,
            'armes' => $armes,
        ]);
    }
}
?>

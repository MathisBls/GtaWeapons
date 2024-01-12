<?php
namespace App\Controller;

use App\Repository\CategoriesRepository;
use App\Repository\ArmesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use GuzzleHttp\Client;

class CategoryController extends AbstractController {
    #[Route('/category/{slug}', name: 'category_show')]
    public function show(string $slug, CategoriesRepository $categorieRepository, ArmesRepository $armesRepository) {
        $client = new Client(['verify' => false]);
        $weapons = array();
        $existCategory = false;
        $allWeapons = array();
        $response = $client->get('https://localhost:8000/api/categoriess')->getBody()->getContents();
        $category = json_decode($response, true);
        $category = $category["hydra:member"];
        for($i = 0; $i<count($category); $i++){
            if($category[$i]["slug"] == $slug){
                $weapons = $category[$i]["armes"];
                $existCategory = true;
                $category = $category[$i];
                break;
            }
        }
        if(!$existCategory){
            throw $this->createNotFoundException('La catégorie n\'existe pas.');
        }

        for($i = 0; $i<count($weapons); $i++){
            $response = $client->get('http://localhost:8000'.$weapons[$i])->getBody()->getContents();
            $weaponsJson = json_decode($response, true);
            array_push($allWeapons ,$weaponsJson);
        }
        $degats = array();
        for($i = 0; $i<count($allWeapons); $i++){
            $response = $client->get('http://localhost:8000'.$allWeapons[$i]['degats'][0])->getBody()->getContents();
            $degats[$allWeapons[$i]['id']] =  json_decode($response, true)['degats'];
        }

        return $this->render('category/show.html.twig', [
            'category' => $category,
            'armes' => $allWeapons,
            'degats' => $degats
        ]);
    }
}
?>

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies/{name}',defaults:['name'=>null], name: 'app_movies')]
    public function index($name): Response
    {
        return $this->json([
            'message' => 'Virendra,Welcome to the movies page',
            'path' => 'src/Controller/MoviesController.php',
            'name' => $name
        ]);
        
    }
}

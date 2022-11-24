<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

     
#[Route('/', name: 'app_index')]
class DefaultController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}

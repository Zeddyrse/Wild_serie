<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


#[Route('/program', name: 'program_')]
class ProgramController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Series',
         ]);
    }

    #[Route('/{id}/', name: 'show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(int $id = 1): Response
    {
        return $this->render('program/show.html.twig', ['id' => 4]);
    }
}

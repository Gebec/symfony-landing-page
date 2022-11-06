<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkController extends AbstractController
{
    #[Route('/work', name: 'work')]
    public function index(): Response
    {
        return $this->render('pages/work/work.html.twig', [
            'controller_name' => 'WorkController',
            'pageTitle' => 'My Work'
        ]);
    }
}

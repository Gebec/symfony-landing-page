<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\MyWork;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(MyWork $myWork): Response
    {
        return $this->render('pages/homepage/homepage.html.twig', [
                'controller_name' => 'HomepageController',
                'pageTitle' => 'Symfony landing page',
                'data' => $myWork->getAllWork()
            ]);
    }
}

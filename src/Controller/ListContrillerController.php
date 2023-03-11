<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ListContrillerController extends AbstractController
{
    
    #[Route('/list/contriller', name: 'app_list_contriller')]
    public function index(Request $request): Response
    {
        return $this->render('list_contriller/index.html.twig', [
            'controller_name' => 'ListContrillerController',
        ]);
    }
}

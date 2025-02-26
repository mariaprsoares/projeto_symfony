<?php

namespace App\Controller;

use App\Entity\Dono;
use App\Repository\DonoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DonoController extends AbstractController
{
    #[Route('/dono', name: 'app_dono')]
    public function index(): Response
    {
        return $this->render('dono/index.html.twig', [
            'controller_name' => 'DonoController',
        ]);
    }
}

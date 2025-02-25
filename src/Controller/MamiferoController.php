<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MamiferoController extends AbstractController
{
    public function homepage(): Response
    {
        return new Response('Olá Mundo! Teste Lá');
    }

    public function cadastro(): Response
    {
        return $this->render('mamifero/cadastro.html.twig');
    }
}
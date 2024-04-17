<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route(
        path: '/article/{title}',
        name: 'article',
        methods: ["GET"]
    )]
    public function index(string $title): Response
    {
        $titles = ["jambon", "pain", "carotte"];
        if (!in_array($title, $titles)) {
            throw $this->createNotFoundException('Aucun article');
        }

        return new Response('<h1>Article ' . $title . '</h1>');
    }
}

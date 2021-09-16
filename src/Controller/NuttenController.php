<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class NuttenController extends AbstractController
{

    public function homepage(): Response
    {
        return $this->render('user/articlepage.html.twig', [
        ]);
    }
}
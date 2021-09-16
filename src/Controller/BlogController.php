<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{page}", name="blog_list", requirements={"page"="\d+"})
     */
    public function list(int $page = 1): Response
    {
        return new Response(
            '<html><body> dasdadsa </html></body>'
        );
    }

    /**
     * @Route("/", name="blog_index")
     */
    public function index(): Response
    {
        // ...
    }

    /**
     * @Route("/article/{slug}", name="blog_post")
     */
    public function show(string $slug): Response
    {
        // ...
    }
}
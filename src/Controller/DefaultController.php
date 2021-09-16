<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(): Response
    {
        $rndnumber = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$rndnumber.'</body></html>'
        );
    }
}
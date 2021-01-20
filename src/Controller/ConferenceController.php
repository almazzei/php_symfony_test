<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/controller", name="controller")
     */
    public function index(): Response
    {
                return new Response(<<<EOF
        <html>
            <body>
                <p><b>Текст</b></p>
                <img src="/images/under-construction.gif" />
            </body>
        </html>
        EOF
                );
    }
}

<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function exist() : Response
    {
        return $this->render("homepage.html.twig");
    }
}
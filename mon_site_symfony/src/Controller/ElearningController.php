<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ElearningController extends AbstractController
{
    /**
     * @Route("/elearning", name="elearning")
     */
    public function index()
    {
        return $this->render('elearning/index.html.twig', [
            'controller_name' => 'ElearningController',
        ]);
    }
}

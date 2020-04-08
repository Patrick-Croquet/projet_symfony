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
        $words = ['sky', 'cloud', 'wood', 'rock', 'forest',
        'mountain', 'breeze', 'cat', 'dog'];

        return $this->render('elearning/index.html.twig', [
            //'controller_name' => 'ElearningController',
            'words' => $words
        ]);
    }
}

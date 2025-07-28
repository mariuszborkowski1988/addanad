<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MyAccountController extends AbstractController
{
    #[Route('/my/account', name: 'app_my_account')]
    public function index(): Response
    {

        /* Check login user */
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_main');
        }

        return $this->render('my_account/index.html.twig', [
            'controller_name' => 'MyAccountController',
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\CategoryRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/doctors", name="doctors")
     */
    public function doctors(UserRepository $userRepository)
    {
        return $this->render('home/doctors.html.twig', [
            'doctors' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/profil/{id}'", name="profil")
     */
    public function profil(User $user)
    {
        return $this->render('home/profil.html.twig', [
            'user' => $user,
        ]);
    }
}

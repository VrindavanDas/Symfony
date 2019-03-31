<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    /**
     * @Route("/home")
     * */
    public function home () {
        $testdata = ['test'=>'Home'];


        return $this->render('home.html.twig', $testdata);
    }

    /**
     * @Route("/home/about-us")
     * */
    public function aboutUs () {
        $testdata = ['test'=>'About us'];

        return $this->render('home.html.twig', $testdata);
    }
}
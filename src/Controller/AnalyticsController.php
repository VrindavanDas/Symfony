<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnalyticsController extends AbstractController
{
    /**
     * @Route("/analytics", name="analytics")
     */
    public function analytics()
    {
        $testdata = ['test'=>'Analytics'];
        return $this->render('/analytics.html.twig', $testdata);
    }
}
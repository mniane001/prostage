<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProstageController extends AbstractController
{
    /**
     * @Route("/", name="prostage_accueil")
     */
    public function index(): Response
    {
        return $this->render('prostage/index.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }
    /**
     * @Route("/entreprises", name="pro_stages-entreprises")
     */
    public function entreprises(): Response
    {
        return $this->render('pro_stages/entreprises.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }
    
        /**
     * @Route("/formations", name="pro_stages-formations")
     */
    public function formations(): Response
    {
        return $this->render('pro_stages/formations.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }
    
        /**
     * @Route("/stages/{id}", name="pro_stages-stages")
     */
    public function stages($id): Response
    {
        return $this->render('pro_stages/stages.html.twig',['idRessource '=>$id ]);

    }
}

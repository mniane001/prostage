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
        return $this->render('prostage/entreprises.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }

        /**
     * @Route("/stage_entreprises", name="pro_stages_stage-entreprises")
     */
    public function stageentreprises(): Response
    {
        return $this->render('prostage/stagesEntreprise.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }
    
        /**
     * @Route("/formations", name="pro_stages-formations")
     */
    public function formations(): Response
    {
        return $this->render('prostage/formations.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }
    
        /**
     * @Route("/stages/{id}", name="pro_stages-stages")
     */
    public function stages($id): Response
    {
        return $this->render('prostage/stages.html.twig',['idStages'=>$id ]);

    }
}

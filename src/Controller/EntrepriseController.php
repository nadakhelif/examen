<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Repository\PFERepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntrepriseController extends AbstractController
{
    
    #[Route('/stat', name: 'app.stat')]
    public function index(PFERepository $repo): Response {
        
        $nbrPFEparEntreprise = $repo->nbrPFEparEntreprise();

        return $this->render('entreprise/index.html.twig', [
            'PFEparEntreprise' => $nbrPFEparEntreprise
        ]);
    }
   
}

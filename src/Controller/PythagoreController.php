<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // Utilisez "Annotation\Route" au lieu de "Attribute\Route"
use App\Service\PythagoreUtility;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    #[Route("/pythagore/view", name:"display_pythagore")]
     
    public function DisplayPythagoreAction(): Response
    {
        return $this->render('displayPythagore.html.twig', [
            'table_html' => $this->pythagoreUtility->display(),
        ]);
    }
}

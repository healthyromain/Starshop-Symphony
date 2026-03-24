<?php

namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(): Response
    {
        $starships = [
            new Starship(
                1,
                'USS LeafyCruiser (NCC-0001)',
                'Garden',
                'Jean-Luc Pickles',
                'taken over by Q'
            ),
            new Starship(
                1,
                'USS Espresso (NCC-1234-C)',
                'Latte',
                'James T. Quick',
                'repaired'
            ),
            new Starship(
                1,
                'USS Wanderlust (NCC-2024-W)',
                'Delta Tourist',
                'kathryn Journeyway',
                'under construction'
            ),
        ];
        return $this->json($starships);
    }
}

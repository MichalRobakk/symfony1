<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage():Response
    {
        $myShip=[
            'name'=> 'USS LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jeanm-Luc Pickles',
            'status' => 'under construction',
        ];


        $starshipCount = 457;
        //return new Response('<strong>Starshop</strong>:your monopoly-busting option for Starship parts!');
        return $this->render('main/homepage.html.twig',['numberOfStarships' => $starshipCount, 'myShip' => $myShip]);
    }

}

?>
<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends Controller
{
    /**
     * @Route ("lucky/number")
     */
    public function number(): Response
    {
        $number = mt_rand(0, 100);

        return $this->render("demo/lucky.html.twig", array( 
            'number' => $number
        ));
    }
    
}
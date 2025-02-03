<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController{
       #[Route('/api/cosas')] 
  
    public function home():Response{
        return new Response('Hola Caracola');
    }
}

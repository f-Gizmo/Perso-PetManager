<?php

namespace FG\PetManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FGPetManagerBundle:Default:index.html.twig');
    }
}

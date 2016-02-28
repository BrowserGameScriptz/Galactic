<?php

namespace GalacticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GalacticBundle:Default:index.html.twig');
    }
}

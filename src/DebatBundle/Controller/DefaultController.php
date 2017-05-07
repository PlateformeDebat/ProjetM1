<?php

namespace DebatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DebatBundle\Entity\Debat;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DebatBundle:Default:index.html.twig');
    }
}

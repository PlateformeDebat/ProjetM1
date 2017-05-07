<?php
/**
 * Created by PhpStorm.
 * User: remy
 * Date: 28/04/17
 * Time: 13:17
 */

namespace DebatBundle\Controller;

use AppBundle\Controller\DefaultController;
use DebatBundle\Controller\DebatController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DebatBundle\Entity\Debat;

class HomeGridController extends Controller
{
    public function indexAction()
    {
        return $this->render('DebatBundle:Home:home_grid.html.twig', array('tableau'=>$this->findDebatByHasard()));
    }

    public function findDebatByHasard()
    {
        $array_debat = array();
        for ($i = 0; $i < 3; $i++) {
            $array_debat[$i] = $this->findDebatById(rand(1, 3));
        };
        return $array_debat;
    }

    public function findDebatById($parameter)
    {
        return $this->getDoctrine()->getManager()->getRepository('DebatBundle:Debat')->findOneBy(array('id' => $parameter));
    }
}
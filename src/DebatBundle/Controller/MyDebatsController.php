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
use FOS\UserBundle\Controller\SecurityController;
use DebatBundle\Entity\Debat;

class MyDebatsController extends Controller
{
    public function indexAction()
    {
        return $this->render('DebatBundle:Debat:my_debats.html.twig', array('debats'=>$this->findMyDebats()));
    }

    public function findMyDebats()
    {
        $me = $this->getUser()->getId();

        $debat_all = $this->getDoctrine()->getManager()->getRepository('DebatBundle:Debat')->findAll();
        $my_debats = array();

        for ($i = 0; $i < sizeof($debat_all); $i++) {
            if ($debat_all[$i]->getId() == $me)
            {
                array_push($my_debats, $debat_all[$i]);
                //var_dump($my_debats[0]);
            }
        };
        return $my_debats;
    }
}
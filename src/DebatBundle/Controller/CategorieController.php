<?php
/**
 * Created by PhpStorm.
 * User: remy
 * Date: 28/04/17
 * Time: 13:17
 */

namespace DebatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DebatBundle\Entity\Debat;

class CategorieController extends Controller
{
    public function indexAction()
    {
        return $this->render('DebatBundle:Categorie:categorie.html.twig', array('categories'=>$this->findCategories()));
    }

    public function findCategories()
    {
        return $this->getDoctrine()->getManager()->getRepository('DebatBundle:Categorie')->findAll();
    }
}
<?php

namespace DebatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DebatBundle\Entity\Debat;

class DebatController extends DefaultController
{

    /** NOUVEAU DEBAT */
    public function newDebat($createur, $title, $q, $rep1, $rep2, $category1, $category2, $d1, $d2, $d3)
    {
        $deb = new Debat();
        $deb->setTitre($title);
        $deb->setReponse1($rep1);
        $deb->setReponse2($rep2);
        $deb->setQuestion($q);
        $deb->setCategorie1($category1);
        $deb->setCategorie2($category2);
        $deb->setDateDebut($d1);
        $deb->setDateFin($d2);
        $deb->setDateSuppression($d3);
        $deb->setIdCreateur($createur);

        $em = $this->getDoctrine()->getManager();
        $em->persist($deb);
        $em->flush();
    }


    /** ----------------- FIND -------------------- */

    /** FIND BY ID */
    public function findDebatById($parameter)
    {
        return $this->getDoctrine()->getManager()->getRepository('DebatBundle:Debat')->findOneBy(array('id' => $parameter));
    }

    /** FIND BY CREATEUR */
    public function findDebatByCreateur($parameter)
    {
        return $this->getDoctrine()->getManager()->getRepository('DebatBundle:Debat')->findBy(array('id_createur' => $parameter));
    }

    /** FIND BY CATEGORIES */
    public function findDebatByCategory($parameter)
    {
        return $this->getDoctrine()->getManager()->getRepository('DebatBundle:Debat')->findBy(array('categorie_1' => $parameter, 'categorie_2' => $parameter));
    }


    /** ------------------ MODIFY ---------------------- */

    /** MODIFY DATE DEBUT */
    public function modifyDateDebut($id_debat, $date)
    {
        $em = $this->getDoctrine()->getManager();

        $deb = $this->findDebatById($id_debat);
        $deb->setDateDebut($date);
        $em->flush();
    }

    /** MODIFY DATE FIN */
    public function modifyDateFin($id_debat, $date)
    {
        $em = $this->getDoctrine()->getManager();

        $deb = $this->findDebatById($id_debat);
        $deb->setDateFin($date);
        $em->flush();
    }

    /** MODIFY DATE SUPPRESSION */
    public function modifyDateSuppression($id_debat, $date)
    {
        $em = $this->getDoctrine()->getManager();

        $deb = $this->findDebatById($id_debat);
        $deb->setDateSuppression($date);
        $em->flush();
    }

    /** MODIFY CATEGORIES */
    public function modifyCatagory($id_debat, $cat1, $cat2)
    {
        $em = $this->getDoctrine()->getManager();

        $deb = $this->findDebatById($id_debat);
        $deb->setCategorie1($cat1);
        $deb->setCategorie1($cat2);
        $em->flush();
    }



}

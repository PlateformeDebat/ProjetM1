<?php

namespace DebatBundle\Controller;

use DateTime;
use DateTimeZone;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DebatBundle\Controller\ArgumentsController;
use DebatBundle\Entity\Vote;
use DebatBundle\Entity\Argument;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;


/**
 * Class DebatController
 * @package DebatBundle\Controller
 * classe qui gère le débat
 */
class DebatController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * affiche le template correspondant
     */
    public function indexAction(Request $request)
    {
        $deb = $request->query->get('id');
        return $this->render('DebatBundle:Debat:debat.html.twig', array('debat'=>$this->findDebatById($deb), 'arguments'=>$this->argumentsOfDebat($deb, 1)));
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * action qui permet à l'utilisateur de voter pour un débat
     */
    public function voteAction(Request $request)
    {
        $me = $this->getUser()->getId();
        $id_debat = $request->request->get('id_debat');
        $reponse = $request->request->get('reponse');

        if ($this->noVote($id_debat, $me))
        {
            $vote = new Vote();
            $vote->setIdEmetteur($me);
            $vote->setIdDebat($id_debat);
            $vote->setReponse($reponse);

            $em = $this->getDoctrine()->getManager();
            $em->persist($vote);
            $em->flush();

            return $this->redirectToRoute('debat_home_grid');
        }
        else
            return $this->redirectToRoute('debat_home_grid');
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * fonctions qui permet à l'utilisateur d'argumenter pour une réponse pour laquelle il a déjà voté
     */
    public function argumentAction(Request $request)
    {
        $me = $this->getUser()->getId();
        $id_debat = $request->request->get('id_debat');
        $reponse = $request->request->get('reponse');
        $texte = $request->request->get('argument');

        $date = new DateTime();

        if ($this->voteForCorrectAnswer($id_debat, $me, $reponse))
        {
            $argument = new Argument();
            $argument->setIdEmetteur($me);
            $argument->setIdDebat($id_debat);
            $argument->setContenu($texte);
            $argument->setDatePost($date);
            $argument->setReponse($reponse);


            $em = $this->getDoctrine()->getManager();
            $em->persist($argument);
            $em->flush();

            return $this->redirectToRoute('debat_home_grid');
        }
        else
            return $this->redirectToRoute('debat_home_grid');
    }


    /**
     * @param $id_debat
     * @param $id_votant
     * @return bool
     * test si l'utilisateur courant a déjà voté pour le débat
     */
    public function noVote($id_debat, $id_votant)
    {
        $tab = $this->findVoteByIdDebat($id_debat);

        for ($i = 0; $i < sizeof($tab); $i++) {
            if ($tab[$i]->getIdEmetteur() == $id_votant) {
                return false;
            }
        };
        return true;
    }


    /**
     * @param $id_debat
     * @param $id_votant
     * @param $reponse
     * @return bool
     * cherche si l'utilisateur a voté pour la bonne réponse du bon débat
     */
    public function voteForCorrectAnswer($id_debat, $id_votant, $reponse)
    {
        $tab = $this->findVoteByIdDebat($id_debat);

        for ($i = 0; $i < sizeof($tab); $i++) {
            if (($tab[$i]->getIdEmetteur() == $id_votant) && ($tab[$i]->getReponse() == $reponse)) {
                return true;
            }
        };
        return false;
    }


    public function argumentsOfDebat($idD, $idR)
    {
        $tab = $this->findArgumentByIdDebat($idD);

        $argsofdebat = array();

        for ($i = 0; $i < sizeof($tab); $i++)  {
            if ($tab[$i]->getReponse() == $idR)
            {
                array_push($argsofdebat, $tab[$i]);
            }
        }
        return $argsofdebat;
    }

    public function findArgumentByIdDebat($parameter)
    {
        return $this->getDoctrine()->getManager()->getRepository('DebatBundle:Argument')->findBy(array('idDebat' => $parameter));
    }






    /**
     * FONCTIONS UTILISEES AILLEURS
     */

    /** ----------------- FIND -------------------- */

    public function findVoteByIdDebat($parameter)
    {
        return $this->getDoctrine()->getManager()->getRepository('DebatBundle:Vote')->findBy(array('idDebat' => $parameter));
    }

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

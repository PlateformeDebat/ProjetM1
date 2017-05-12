<?php
/**
 * Created by PhpStorm.
 * User: remy
 * Date: 10/05/17
 * Time: 12:22
 */

namespace DebatBundle\Controller;

use DebatBundle\DebatBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DebatBundle\Entity\Debat;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AddDebatController extends Controller
{
    public function indexAction(Request $request)
    {
        $debat = new Debat();
        $debat->setIdCreateur($this->getUser()->getId());

        $form = $this->get('form.factory')->createBuilder(FormType::class, $debat)
            ->add('titre', TextType::class)
            ->add('question', TextType::class)
            ->add('reponse1', TextType::class)
            ->add('reponse2', TextType::class)
            ->add('categorie1', TextType::class)
            ->add('categorie2', TextType::class)
            ->add('dateDebut', DateType::class)
            ->add('dateFin', DateType::class)
            ->add('dateSuppression', DateType::class)
            ->add('valider', SubmitType::class)
            ->getForm();


        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            $em = $this->getDoctrine()->getManager();

            $em->persist($debat);

            $em->flush();


            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->render('DebatBundle:Default:index.html.twig');
        }

        return $this->render('DebatBundle:Debat:add_debat.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function insertInDatabase($parameter)
    {
        $deb = new Debat();
        $deb->setTitre($parameter->title);
        $deb->setReponse1($parameter->reponse1);
        $deb->setReponse2($parameter->reponse2);
        $deb->setQuestion($parameter->question);
        $deb->setCategorie1($parameter->categorie1);
        $deb->setCategorie2($parameter->categorie2);
        $deb->setDateDebut($parameter->dateDebtut);
        $deb->setDateFin($parameter->dateFin);
        $deb->setDateSuppression($parameter->dateSuppression);
        $deb->setIdCreateur($this->getUser()->getId());

        var_dump($deb);

        $em = $this->getDoctrine()->getManager();
        $em->persist($deb);
        $em->flush();
    }
}
<?php

namespace DebatBundle\Entity;

/**
 * Debat
 */
class Debat
{
    /**
     * @var int
     */
    private $id;


    /**
     * @var string
     */
    private $idCreateur;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $categorie1;

    /**
     * @var string
     */
    private $categorie2;

    /**
     * @var string
     */
    private $question;

    /**
     * @var string
     */
    private $reponse1;

    /**
     * @var string
     */
    private $reponse2;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var \DateTime
     */
    private $dateSuppression;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set idCreateur
     *
     * @param string $idCreateur
     *
     * @return Debat
     */
    public function setIdCreateur($idCreateur)
    {
        $this->idCreateur = $idCreateur;

        return $this;
    }

    /**
     * Get idCreateur
     *
     * @return string
     */
    public function getIdCreateur()
    {
        return $this->idCreateur;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Debat
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set categorie1
     *
     * @param string $categorie1
     *
     * @return Debat
     */
    public function setCategorie1($categorie1)
    {
        $this->categorie1 = $categorie1;

        return $this;
    }

    /**
     * Get categorie1
     *
     * @return string
     */
    public function getCategorie1()
    {
        return $this->categorie1;
    }

    /**
     * Set categorie2
     *
     * @param string $categorie2
     *
     * @return Debat
     */
    public function setCategorie2($categorie2)
    {
        $this->categorie2 = $categorie2;

        return $this;
    }

    /**
     * Get categorie2
     *
     * @return string
     */
    public function getCategorie2()
    {
        return $this->categorie2;
    }

    /**
     * Set question
     *
     * @param string $question
     *
     * @return Debat
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set reponse1
     *
     * @param string $reponse1
     *
     * @return Debat
     */
    public function setReponse1($reponse1)
    {
        $this->reponse1 = $reponse1;

        return $this;
    }

    /**
     * Get reponse1
     *
     * @return string
     */
    public function getReponse1()
    {
        return $this->reponse1;
    }

    /**
     * Set reponse2
     *
     * @param string $reponse2
     *
     * @return Debat
     */
    public function setReponse2($reponse2)
    {
        $this->reponse2 = $reponse2;

        return $this;
    }

    /**
     * Get reponse2
     *
     * @return string
     */
    public function getReponse2()
    {
        return $this->reponse2;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Debat
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Debat
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set dateSuppression
     *
     * @param \DateTime $dateSuppression
     *
     * @return Debat
     */
    public function setDateSuppression($dateSuppression)
    {
        $this->dateSuppression = $dateSuppression;

        return $this;
    }

    /**
     * Get dateSuppression
     *
     * @return \DateTime
     */
    public function getDateSuppression()
    {
        return $this->dateSuppression;
    }
}


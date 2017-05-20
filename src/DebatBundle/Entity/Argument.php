<?php

namespace DebatBundle\Entity;

/**
 * Argument
 */
class Argument
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $idEmetteur;

    /**
     * @var int
     */
    private $idDebat;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var \DateTime
     */
    private $datePost;

    /**
     * @var string
     */
    private $reponse;


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
     * Set idEmetteur
     *
     * @param string $idEmetteur
     *
     * @return Argument
     */
    public function setIdEmetteur($idEmetteur)
    {
        $this->idEmetteur = $idEmetteur;

        return $this;
    }

    /**
     * Get idEmetteur
     *
     * @return string
     */
    public function getIdEmetteur()
    {
        return $this->idEmetteur;
    }

    /**
     * Set idDebat
     *
     * @param integer $idDebat
     *
     * @return Argument
     */
    public function setIdDebat($idDebat)
    {
        $this->idDebat = $idDebat;

        return $this;
    }

    /**
     * Get idDebat
     *
     * @return int
     */
    public function getIdDebat()
    {
        return $this->idDebat;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Argument
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set detePost
     *
     * @param \DateTime $datePost
     *
     * @return Argument
     */
    public function setDatePost($datePost)
    {
        $this->datePost = $datePost;

        return $this;
    }

    /**
     * Get datePost
     *
     * @return \DateTime
     */
    public function getDatePost()
    {
        return $this->datePost;
    }

    /**
     * Set reponse
     *
     * @param string $reponse
     *
     * @return Argument
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string
     */
    public function getReponse()
    {
        return $this->reponse;
    }

}

<?php

namespace DebatBundle\Entity;

/**
 * Commentaire
 */
class Commentaire
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
    private $idArgument;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var \DateTime
     */
    private $datePost;


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
     * @return Commentaire
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
     * Set idArgument
     *
     * @param integer $idArgument
     *
     * @return Commentaire
     */
    public function setIdArgument($idArgument)
    {
        $this->idArgument = $idArgument;

        return $this;
    }

    /**
     * Get idArgument
     *
     * @return int
     */
    public function getIdArgument()
    {
        return $this->idArgument;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Commentaire
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
     * Set datePost
     *
     * @param \DateTime $datePost
     *
     * @return Commentaire
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
}


<?php

namespace DebatBundle\Entity;

/**
 * Jaime
 */
class Jaime
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
     * @var int
     */
    private $idCommentaire;


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
     * @return Jaime
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
     * @return Jaime
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
     * Set idCommentaire
     *
     * @param integer $idCommentaire
     *
     * @return Jaime
     */
    public function setIdCommentaire($idCommentaire)
    {
        $this->idCommentaire = $idCommentaire;

        return $this;
    }

    /**
     * Get idCommentaire
     *
     * @return int
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }
}


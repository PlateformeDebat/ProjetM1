<?php

namespace DebatBundle\Entity;

/**
 * Vote
 */
class Vote
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
     * @return Vote
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
     * @return Vote
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
     * Set reponse
     *
     * @param string $reponse
     *
     * @return Vote
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


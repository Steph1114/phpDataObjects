<?php
class Dragon
{

    private $id_dragon;

    private $dragon;

    private $sexe;

    private $longueur;

    private $nombre_ecailles;

    private $crache_feu;

    private $comportement_amoureux;

    /**
     * Get the value of comportement_amoureux
     */
    public function getComportement_amoureux()
    {
        return $this->comportement_amoureux;
    }

    /**
     * Set the value of comportement_amoureux
     *
     * @return  self
     */
    public function setComportement_amoureux($comportement_amoureux)
    {
        $this->comportement_amoureux = $comportement_amoureux;

        return $this;
    }

    /**
     * Get the value of crache_feu
     */
    public function getCrache_feu()
    {
        return $this->crache_feu;
    }

    /**
     * Set the value of crache_feu
     *
     * @return  self
     */
    public function setCrache_feu($crache_feu)
    {
        $this->crache_feu = $crache_feu;

        return $this;
    }

    /**
     * Get the value of nombre_ecailles
     */
    public function getNombre_ecailles()
    {
        return $this->nombre_ecailles;
    }

    /**
     * Set the value of nombre_ecailles
     *
     * @return  self
     */
    public function setNombre_ecailles($nombre_ecailles)
    {
        $this->nombre_ecailles = $nombre_ecailles;

        return $this;
    }

    /**
     * Get the value of longueur
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set the value of longueur
     *
     * @return  self
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get the value of sexe
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of dragon
     */
    public function getDragon()
    {
        return $this->dragon;
    }

    /**
     * Set the value of dragon
     *
     * @return  self
     */
    public function setDragon($dragon)
    {
        $this->dragon = $dragon;

        return $this;
    }

    /**
     * Get the value of id_dragon
     */
    public function getId_dragon()
    {
        return $this->id_dragon;
    }

    /**
     * Set the value of id_dragon
     *
     * @return  self
     */
    public function setId_dragon($id_dragon)
    {
        $this->id_dragon = $id_dragon;

        return $this;
    }
}

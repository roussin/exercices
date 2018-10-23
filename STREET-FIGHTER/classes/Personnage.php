<?php

class Personnage {

    /**
     * nom du personnage
     * 
     * @var string 
     */
    private $_nomPersonnage;

    /**
     * Le joueur attaque-t-il ?
     *
     * @var boolean
     */
    private $_attaquer;

    /**
     * quantité de dégats accumulé lors des tours... valeur par mini 0 maxi 100
     *
     * @var int
     */
    private $_degats;

    /**
     * quantité de dégats recu ou donné a/de l'adversaire
     *
     * @var int
     */
    private $_qteDegats;

    /* ---------------------------------------
                    CONSTRUCTEUR
    ---------------------------------------- */

    /**
     * Constructeur
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /* ----------------------------------------
        HYDRATATION
    ---------------------------------------- */

    /**
     * Hydratation
     *
     * @param array $data
     * @return void
     */
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $methodName = 'set_' . $key;
            if (method_exists($this, $methodName)) {
                $this->$methodName($value);
            }
        }
    }

    /* ----------------------------------------
                    GETTERS
    ----------------------------------------- */

    /**
     * get nomPersonnage
     *
     * @return void
     */
    public function get_nomPersonnage()
    {
        $this->_nomPersonnage;
    }

    /**
     * get attaquer
     *
     * @return void
     */
    public function get_attaquer() {
        $this->_attaquer;
    }

    /**
     * get degats
     *
     * @return void
     */
    public function get_degats()
    {
        $this->_degats;
    }

    /**
     * get qteDegats
     *
     * @return void
     */
    public function get_qteDegats()
    {
        $this->_qteDegats;
    }

    /* ----------------------------------------
                    SETTERS
    ----------------------------------------- */

    

    /* ----------------------------------------
                    METHODES
    ----------------------------------------- */

    public function attaquerAdversaire() {

    }

    public function estAttaquer() {

    }
}
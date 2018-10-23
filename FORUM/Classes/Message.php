<?php

class Message extends Core
{


    /* ----------------------------------------
        ATTRIBUTS
    ---------------------------------------- */

    /**
     * id du message
     *
     * @var integer
     */
    private $_id;

    /**
     * date du message
     *
     * @var date
     */
    private $_date;

    /**
     * heure du message
     *
     * @var time
     */
    private $_heure;

    /**
     * nom de l'auteur
     *
     * @var string
     */
    private $_nom;

    /**
     * prénom de l'auteur
     *
     * @var string
     */
    private $_prenom;

    /**
     * contenu du message
     *
     * @var string
     */
    private $_contenu;

    /* ----------------------------------------
        GETTERS
    ---------------------------------------- */

    /**
     * Get id du message
     *
     * @return  integer
     */
    public function get_id()
    {
        return $this->_id;
    }


    /**
     * Get date du message
     *
     * @return  string
     */
    public function get_date()
    {
        return $this->_date;
    }

    /**
     * Get heure du message
     *
     * @return  string
     */
    public function get_heure()
    {
        return $this->_heure;
    }

    /**
     * Get nom de l'auteur
     *
     * @return  string
     */
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Get prenom de l'auteur
     *
     * @return  string
     */
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Get contenu du message
     *
     * @return  boolean
     */
    public function get_contenu()
    {
        return $this->_contenu;
    }

    /* ----------------------------------------
        SETTERS
    ---------------------------------------- */

    /**
     * Set id du message
     *
     * @param  integer  $_id du message
     *
     * @return  self
     */
    public function set_id($_id)
    {
        $this->_id = $_id;

        return $this;
    }

    /**
     * Set date du message
     *
     * @param  integer  $_date du message
     *
     * @return  self
     */
    public function set_date(string $_date)
    {
        $this->_date = $_date;

        return $this;
    }

    /**
     * Set heure du message
     *
     * @param  integer  $_heure du message
     *
     * @return  self
     */
    public function set_heure(string $_heure)
    {
        $this->_heure = $_heure;

        return $this;
    }

    /**
     * Set nom de l'auteur
     *
     * @param  string  $_nom de l'auteur
     *
     * @return  self
     */
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Set prenom de l'auteur
     *
     * @param  string  $_prenom de l'auteur
     *
     * @return  self
     */
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Set contenu du message
     *
     * @param  string  $_contenu du message
     *
     * @return  self
     */
    public function set_contenu($_contenu)
    {
        $this->_contenu = $_contenu;

        return $this;
    }


}

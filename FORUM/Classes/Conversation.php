<?php

class Conversation extends core 
{
    /* ----------------------------------------
        ATTRIBUTS
    ---------------------------------------- */

    /**
     * id de la conversation
     *
     * @var integer
     */
    private $_id;

    /**
     * date de la conversation
     *
     * @var date
     */
    private $_date;

    /**
     * heure de la conversation
     *
     * @var time
     */
    private $_heure;

    /**
     * nombres de messages
     *
     * @var integer
     */
    private $_nbMessages;

    /**
     * conversation terminée
     *
     * @var bool
     */
    private $_termine;

    /* ----------------------------------------
        GETTERS
    ---------------------------------------- */

    /**
     * Get id de la conversation
     *
     * @return  integer
     */
    public function get_id()
    {
        return $this->_id;
    }


    /**
     * Get date de la conversation
     *
     * @return  integer
     */
    public function get_date()
    {
        return $this->_date;
    }

    /**
     * Get heure de la conversation
     *
     * @return  integer
     */
    public function get_heure()
    {
        return $this->_heure;
    }

    /**
     * Get nbMessage de la conversation
     *
     * @return  integer
     */
    public function get_nbMessages()
    {
        return $this->_nbMessages;
    }

    /**
     * Get termine de la conversation
     *
     * @return  boolean
     */
    public function get_termine()
    {
        return $this->_termine;
    }

    /* ----------------------------------------
        SETTERS
    ---------------------------------------- */

    /**
     * Set id de la conversation
     *
     * @param  integer  $_id de la conversation
     *
     * @return  self
     */
    public function set_id($_id)
    {
        $this->_id = $_id;

        return $this;
    }

    /**
     * Set date de la conversation
     *
     * @param  integer  $_date de la conversation
     *
     * @return  self
     */
    public function set_date(string $_date)
    {
        $this->_date = $_date;

        return $this;
    }

    /**
     * Set heure de la conversation
     *
     * @param  integer  $_heure de la conversation
     *
     * @return  self
     */
    public function set_heure(string $_heure)
    {
        $this->_heure = $_heure;

        return $this;
    }

    /**
     * Set nbMessages de la conversation
     *
     * @param  integer  $_nbMessages de la conversation
     *
     * @return  self
     */
    public function set_nbMessages($_nbMessages)
    {
        $this->_nbMessages = $_nbMessages;

        return $this;
    }

    /**
     * Set termine = message terminé de la conversation
     *
     * @param  boolean  $_termine de la conversation
     *
     * @return  self
     */
    public function set_termine($_termine)
    {
        $this->_termine = $_termine;

        return $this;
    }
}

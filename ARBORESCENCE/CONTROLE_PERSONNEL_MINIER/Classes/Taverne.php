<?php

class Taverne
{
    private $_id;
    private $_nom;
    private $_chambres;
    private $_chambresLibres;
    private $_blonde;
    private $_brune;
    private $_rousse;

    // ------------------------------ CONSTRUCTOR ------------------------------------------------------------

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    private function hydrate(array $data) : void
    {
        foreach ($data as $key => $value) {
            $newKey = str_replace('t_', '', $key);
            $method = 'set' . ucfirst(strtolower($newKey));
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

     // ------------------------------ GETTERS ------------------------------------------------------------

    /**
     * the getter of $_id
     *
     * @return integer
     */
    public function getId() : int
    {
        return $this->_id;
    }

    /**
     * the getter of $_nom
     *
     * @return string
     */
    public function getNom() : string
    {
        return $this->_nom;
    }

    /**
     * the getter of $_chambres
     *
     * @return int
     */
    public function getChambres() : int
    {
        return $this->_chambres;
    }

    /**
     * the getter of $_chambresLibres
     *
     * @return int
     */
    public function getChambresLibres() : int
    {
        return $this->_chambresLibres;
    }

    /**
     * the getter of $_blonde
     *
     * @return bool
     */
    public function getBlonde() : bool
    {
        return $this->_blonde;
    }

    /**
     * the getter of $_brune
     *
     * @return bool
     */
    public function getBrune() : bool
    {
        return $this->_brune;
    }

    /**
     * the getter of $_rousse
     *
     * @return bool
     */
    public function getRousse() : bool
    {
        return $this->_rousse;
    }

    // ------------------------------ SETTERS ------------------------------------------------------------

    /**
     * the setter of $_id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * the setter of $_nom
     *
     * @return self
     */
    public function setNom(string $nom) : self
    {
        $this->_nom = $nom;
        return $this;
    }

    /**
     * the setter of $_chambres
     *
     * @return self
     */
    public function setChambres(int $chambres) : self
    {
        $this->_chambres = $chambres;
        return $this;
    }

    /**
     * the setter of $_chambresLibres
     *
     * @return self
     */
    public function setChambresLibres(int $chambresLibres) : self
    {
        $this->_chambresLibres = $chambresLibres;
        return $this;
    }

    /**
     * the setter of $_blonde
     *
     * @return self
     */
    public function setBlonde(bool $blonde) : self
    {
        $this->_blonde = $blonde;
        return $this;
    }

    /**
     * the setter of $_brune
     *
     * @return self
     */
    public function setBrune(bool $brune) : self
    {
        $this->_brune = $brune;
        return $this;
    }

    /**
     * the setter of $_rousse
     *
     * @return self
     */
    public function setRousse(bool $rousse) : self
    {
        $this->_rousse = $rousse; 
        return $this;
    }

}
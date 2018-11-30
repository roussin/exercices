<?php

class Nain
{
    private $_id;
    private $_nom;
    private $_barbe;

    // ------------------------------ CONSTRUCTOR ------------------------------------------------------------

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    private function hydrate(array $data) : void
    {
        foreach ($data as $key => $value) {
            $newKey = str_replace('n_', '', $key);
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
     * the getter of $_barbe
     *
     * @return int
     */
    public function getBarbe() : int
    {
        return $this->_barbe;
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
    public function setBarbe(int $barbe) : self
    {
        $this->_barbe = $barbe;
        return $this;
    }
}
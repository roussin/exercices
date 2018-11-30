<?php

class Ville 
{
    private $_id;
    private $_nom;
    private $_superficie;

    // ------------------------------ CONSTRUCTOR ------------------------------------------------------------

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    private function hydrate(array $data) : void
    {
        foreach ($data as $key => $value) {
            $newKey = str_replace('v_', '', $key);
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
     * the getter of $_superficie
     *
     * @return integer
     */
    public function getSuperficie() : int
    {
        return $this->_superficie;
    }

    // ------------------------------ SETTERS ------------------------------------------------------------

    /**
     * set of id
     *
     * @param integer $id
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * set of name
     *
     * @param string $nom
     * @return self
     */
    public function setnom(string $nom) : self
    {
        $this->_nom = $nom;
        return $this;
    }

    /**
     * set of area
     *
     * @param integer $superficie
     * @return self
     */
    public function setSuperficie(int $superficie) : self
    {
        $this->_superficie = $superficie;
        return $this;
    }
}

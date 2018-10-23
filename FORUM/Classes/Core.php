<?php

class Core {

    /* ----------------------------------------
        CONSTRUCTEUR
    ---------------------------------------- */

    /**
     * constructeur
     *
     * @param array $data
     */
    public function __construct(array $data) {
        $this->hydrate($data);
    }

    /* ----------------------------------------
        HYDRATATION
    ---------------------------------------- */

    /**
     * hydratation
     *
     * @param array $data
     * @return void
     */
    public function hydrate(array $data){
    
        foreach(data as $key=>$value) {

            $key = substr($key, 2);

            if (substr($key,-3)=='_fk'){
                
                $key = substr($key, -3) == '_fk';
            }
        }

        $methode = 'set' . ucfirst($key);
        if ((method_exists($this, $methode))!==false) {
            $this->$methode($value);
        }
    }
}
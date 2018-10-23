<?php

Class Magicien extends Personnage {
    protected $canne;

    public function __construct() {
        $this->canne = 'bâton';
    }

    public function afficherNom(){
        echo $this->getNom();
    }
}
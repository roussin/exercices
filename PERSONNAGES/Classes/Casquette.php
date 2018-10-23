<?php
Class Casquette {

    protected $couleur;

    public function setCouleur(string $couleur) : void {
        $this->couleur = $param;
        return $this;
    }

    public function getCouleur() : string {
        return $this->couleur;
    }

}
<?php

Class Personnage {

    private $nom;
    protected $age;
    protected $casquette = array();

    public function __construct(string $nomParam, int $nbCasquette) {

        for($i=0;$i<$nbCasquette;$i++) {

            $this->casquette[] = new Casquette;
        }
        $this->setNom($nomParam);
    }

    public function setNom(string $nomParam) : void {
        if(strlen($nomParam)>0) {
            $this->nom = $nomParam;
        }
    }

    public function getNom() : string {
        return $this->nom;
    }

}
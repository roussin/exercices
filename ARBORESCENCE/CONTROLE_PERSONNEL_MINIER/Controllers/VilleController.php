<?php

class VilleController {

    private $_model;

    /**
     * connecting to database
     *
     * @return void
     */
    private function connect()
    {
        try {
            $this->_model = new VilleModel('mysql', 'localhost', 'exercice_nains_tunnel', 'root', '');
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 0, $e);
        }
    }

    /** ---------------------------------
     *          TOWNS
    ---------------------------------- */ 

    /**
     * List the villes form database
     *
     * @return array
     */
    public function listVille()
    {
        $this->connect();
        if ( ($res = $this->_model->readVille() )!==false) 
        {
            foreach($res as $ville) {
                $villes[] = new Ville($ville);
            }
            include('Views/index.php');
        }
    }

    /**
     * show the town choosed
     *
     * @param integer $id
     * @return array
     */
    public function showVille(int $id)
    {
        $this->connect();
        if (($res = $this->_model->readVille($id)) !== false) {
            if (count($res)>0)
            {
                $ville = new Ville($res[0]);
            }
            include('Views/Ville/ville.php');
        }
    }
}
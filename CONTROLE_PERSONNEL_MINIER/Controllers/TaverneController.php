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
            $this->_model = new TaverneModel('mysql', 'localhost', 'exercice_nains_tunnel', 'root', '');
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 0, $e);
        }
    }

    /** ---------------------------------
     *          TAVERNS
    ---------------------------------- */


    /**
     * List the tavern form database
     *
     * @return array
     */
    public function listTaverne()
    {
        $this->connect();
        if (($res = $this->_model->readTaverne()) !== false) {
            foreach ($res as $taverne) {
                $modVille = new VilleModel('mysql', 'localhost', 'exercice_nains_tunnel', 'root', '');
                $ville = $modVille->readVille($taverne['t_ville_fk']);
                $tavernes[] = array('taverne' => new Taverne($taverne), 'ville' => new Ville($ville[0]));
                // var_dump($tavernes);
            }
            include('Views/Taverne/taverne.php');
        }
    }

    /**
     * show the taverne choosed
     *
     * @param integer $id
     * @return array
     */
    public function showTaverne(int $id)
    {
        $this->connect();
        if (($res = $this->_model->readTaverne($id)) !== false) {
            if (count($res) > 0) {
                $taverne = new Taverne($res[0]);
            }
            include('Views/Taverne/taverne.php');
        }
    } 
}
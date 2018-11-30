 <?php

class NainController
{

    private $_model;

    /**
     * connecting to database
     *
     * @return void
     */
    private function connect()
    {
        try {
            $this->_model = new NainModel('mysql', 'localhost', 'exercice_nains_tunnel', 'root', '');
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 0, $e);
        }
    }
 /** ---------------------------------
     *          DRAFTS
    ---------------------------------- */ 

    /**
     * List the drafts form database
     *
     * @return array
     */
    public function listNains()
    {
        $this->connect();
        if (($res = $this->_model->readNain()) !== false) {
            foreach ($res as $nain) {
                $nains[] = new Ville($nain);
            }
            include('Views/index.php');
        }
    }

    /**
     * show the draft choosed
     *
     * @param integer $id
     * @return array
     */
    public function showNains(int $id)
    {
        $this->connect();
        if (($res = $this->_model->readNainFromVille($id)) !== false) {
            if (count($res) > 0) {
                $nain = new Nain($res[0]);
            }
            include('Views/Nain/nain.php');
        }
    }
}
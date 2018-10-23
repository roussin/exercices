<?php
class MessageModel
{
    private $db;
    private $req;

    /**
     * limit inférieur du nombre de message affichés
     * nombre de message compris de...
     * valeur par defaut 0
     *
     * @var int
     */
    private $limitFrom;

    public function __construct(int $from = 0)
    {
        $this->limitFrom = $from;
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=popo;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * Get limit inférieur du nombre de message affichés
     *
     * @return  integer
     */
    public function get_limitFrom()
    {
        return $this->limitFrom;
    }

    /* ----------------------------------------
        FONCTIONS
    ---------------------------------------- */

    /**
     * fonction qui va changer les valeurs de limitFrom et de limitTo pour que leur 
     * distance soit toujours de 20
     * @param  
     * @return int
     */
    public function forwardTwenty()
    {
        // prend la valeur de limitFrom que l'on place dans la variable limitTo
        // on place dans limitFrom la valuer de limitTo - 20
        $this->limitFrom += 20;
        return $this->limitFrom;
    }
    public function rewindTwenty()
    {
        // prend la valeur de limitFrom que l'on place dans la variable limitTo
        // on place dans limitFrom la valuer de limitTo - 20
        $this->limitFrom -= 20;
        return $this->limitFrom;
    }

    /**
     * Lire la base de donnée récupérer les champs selon l'id demandé
     *
     * @param integer $id
     * @return void
     */
    public function readFromId(int $id)
    {
        try {
            if (($this->req = $this->db->prepare(
                'SELECT 
                    m_id AS id,
                    DATE_FORMAT(`m_date`, "%d/%m/%Y" ) AS date, 
                    DATE_FORMAT(`m_date`, "%Hh:%im:%ss" ) AS heure, 
                    m_contenu AS contenu, 
                    u_nom AS nom, 
                    u_prenom AS prenom 
                FROM `message` 
                JOIN `user` ON `u_id` = `m_auteur_fk`
                WHERE `m_conversation_fk`=?
                LIMIT '. $this->limitFrom .', 20'
            )) !== false) {
                if ($this->req->bindValue(1, $id, PDO::PARAM_INT)) {
                    $message = array();
                    if ($this->req->execute()) {
                        while (($datas = $this->req->fetch(PDO::FETCH_ASSOC)) !== false) {
                            $message[] = new Message($datas);
                        }
                        return $message;
                    }
                }
            }
            return false;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * compare si l'ID passé en parmètre se trouve bien dans la base de donnée
     *
     * @param integer $id
     * @return boolean
     */
    public function isIdExist(int $id) {
        try {
            if ( ($this->req = $this->db->query('SELECT `c_id` AS id FROM `conversation`')) !== false) {
                while (($datas = $this->req->fetch(PDO::FETCH_ASSOC)) !== false) {
                    if ($id == $datas['id']) {
                        return true;
                    }      
                }
            }
            return false;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }
}

/* SELECT
    m_id as id,
    DATE_FORMAT(`m_date`, "%d/%m/%Y") as date,
    DATE_FORMAT(`m_date`, "%Hh:%im:%ss") as heure,
    m_contenu as contenu,
    u_nom as nom,
    u_prenom as prenom
    FROM `message`
    JOIN `user` ON `u_id` = `m_auteur_fk`
    WHERE m_id = 1; */
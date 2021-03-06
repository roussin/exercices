<?php

class ConversationModel 
{
    private $db;
    private $req;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=popo;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * Lire la base de donnée
     *
     * @param integer $id
     * @return void
     */
    public function readAll()
    {
        try {
            if (($this->req = $this->db->query('SELECT `c_id` AS id, DATE_FORMAT(`c_date`, "%d/%m/%Y" ) AS date, DATE_FORMAT(`c_date`, "%Hh:%im:%ss" ) AS heure, COUNT(`m_id`) AS nbMessages, c_termine AS termine FROM `conversation` LEFT JOIN `message` ON `c_id` = `m_conversation_fk` GROUP BY `c_id`')) !== false) {
                while (($datas = $this->req->fetch(PDO::FETCH_ASSOC)) !== false) {
                    $conversation[] = new Conversation($datas);
                }
                return $conversation;
            }

            return false;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }
}
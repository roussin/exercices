<?php

/**
 * Manages the data for the Draft, according to the CRUD model
 * 
 * @license MIT
 * 
 * @since 1.0.0
 * 
 * @category PHP
 * @package exercice_nains_tunnel
 * @subpackage nain 
 * @copyright 2018 Christophe - tous doits réservés
 * @author Christophe Roussin <christophe.roussin@gmail.com>
 */
class NainModel extends ConnectModel
{
    /**
     * READ draft(s) into the database
     *
     * @param integer $id (optional)
     * 
     * @throws Exception if an error occured
     * 
     * @return array the data of one or more town = ville
     */
    public function readNain(int $id = null) : array
    {
        try {
           // if I want to know the data from all draft else from a particular draft
            if (is_null($id)) {
                if (($req = $this->_pdo->query(
                    'SELECT *
                    FROM `nain` 
                    ORDER BY `n_nom` ASC'
                )) !== false) {
                    $res = $req->fetchAll(PDO::FETCH_ASSOC);
                    $req->closeCursor();
                    return $res;
                }
            } else {
                if (($req = $this->_pdo->prepare(
                    'SELECT *
                    FROM `nain` 
                    WHERE `n_id`=?'
                )) != false) {
                    if ($req->bindValue(1, $id)) {
                        if ($req->execute()) {
                            $res = $req->fetchAll(PDO::FETCH_ASSOC);
                            $req->closeCursor();
                            return $res;
                        }
                    }
                }
            }

            return false;

        } catch (PDOException $e) {
            throw new Exception("Error can not read into database", 2, $e);
        }
    }

    public function readNainFromVille(int $villeId) : array
    {
        try {
           // if I want to know the data from all draft else from a particular draft
            if (($req = $this->_pdo->prepare(
                'SELECT *
                FROM `nain` 
                WHERE `n_ville_fk`=?'
            )) != false) {
                if ($req->bindValue(1, $villeId)) {
                    if ($req->execute()) {
                        $res = $req->fetchAll(PDO::FETCH_ASSOC);
                        $req->closeCursor();
                        return $res;
                    }
                }
            }
            return false;

        } catch (PDOException $e) {
            throw new Exception("Error can not read into database", 2, $e);
        }
    }
}
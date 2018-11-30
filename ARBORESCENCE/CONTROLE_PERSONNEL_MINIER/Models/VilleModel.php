<?php
/**
 * Manages the data for the Town, according to the CRUD model
 * 
 * @license MIT
 * 
 * @since 1.0.0
 * 
 * @category PHP
 * @package exercice_nains_tunnel
 * @subpackage ville 
 * @copyright 2018 Christophe - tous doits réservés
 * @author Christophe Roussin <christophe.roussin@gmail.com>
 */
class VilleModel extends ConnectModel 
{
    /**
     * READ town(s) into the database
     *
     * @param integer $id (optional)
     * 
     * @throws Exception if an error occured
     * 
     * @return array the data of one or more town = ville
     */
    public function readVille(int $id = null) : array
    {
        try 
        {
           // if I want to know the data from all towns else from a particular town
           if ( is_null($id) )
           {
                if( ( $req = $this->_pdo->query(
                    'SELECT `v_id`,`v_nom`,`v_superficie` 
                    FROM `ville` 
                    ORDER BY `v_nom` ASC') )!==false )
                {
                    $res = $req->fetchAll(PDO::FETCH_ASSOC);
                    $req->closeCursor();
                    return $res;
                }
           } 
           else 
           {
                if ( ( $req = $this->_pdo->prepare(
                    'SELECT `v_id`,`v_nom`,`v_superficie` 
                    FROM `ville` 
                    WHERE `v_id`=?') )!=false )
                {
                    if ( $req->bindValue(1,$id) )
                    {
                        if ( $req->execute() )
                        {
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
}
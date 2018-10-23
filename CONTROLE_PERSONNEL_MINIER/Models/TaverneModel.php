<?php

/**
 * Manages the data for the Tavern, according to the CRUD model
 * 
 * @license MIT
 * 
 * @since 1.0.0
 * 
 * @category PHP
 * @package exercice_nains_tunnel
 * @subpackage taverne 
 * @copyright 2018 Christophe - tous doits réservés
 * @author Christophe Roussin <christophe.roussin@gmail.com>
 */
class TaverneModel extends ConnectModel
{
    /**
     * READ taverne(s) into the database
     *
     * @param integer $id (optional)
     * 
     * @throws Exception if an error occured
     * 
     * @return array the data from taverne
     */
    public function readTaverne(int $id = null) : array
    {
        try 
        {
            // if I want to know the data from all tavern else from a particular tavern
            if (is_null($id)) 
            {
                if (($req = $this->_pdo->query(
                        'SELECT `taverne`.*, (`t_chambres` - COUNT(`n_id`)) AS `chambresLibres` 
                        FROM `taverne` 
                        LEFT JOIN `groupe` ON `t_id`=`g_taverne_fk` 
                        LEFT JOIN `nain` ON `g_id`=`n_groupe_fk` 
                        GROUP BY `t_id`')) !== false) {
                    $res = $req->fetchAll(PDO::FETCH_ASSOC);
                    $req->closeCursor();
                    return $res;
                }
            } else {
                if (($req = $this->_pdo->prepare(
                        'SELECT `taverne`.*, (`t_chambres` - COUNT(`n_id`)) AS `chambresLibres` 
                        FROM `taverne` 
                        LEFT JOIN `groupe` ON `t_id`=`g_taverne_fk` 
                        LEFT JOIN `nain` ON `g_id`=`n_groupe_fk` 
                        GROUP BY `t_id`  
                        WHERE `t_id`=?'))!=false)
                {
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
            throw new Exception("Error can not read into database", 3, $e);
        }
    }

    // -------------------------------------------------------------------------------------------------------------------------

}
<?php

Class ConnectModel 
{
    private $_engine;
    private $_host;
    private $_dbname;
    private $_user;
    private $_pwd;
    private $_charset;
    private $_collate;

    /**
     * Instance of PDO
     *
     * @since 1.0.0
     * @var PDO
     */
    protected $_pdo;


    /**
     * Constructor
     * 
     * @since 1.0.0
     *
     * @param string $engine The DB engine
     * @param string $host The hostname
     * @param string $dbname The name of the database
     * @param string $user An account allowed to connect to the database
     * @param string $pwd The password of an account allowed to connect to the database
     * @param string $charset (optional) The charset encoding
     * @param string $collate (optional) The collate encoding
     * 
     * @throws Exception if an error occured
     */
    public function __construct(string $engine, string $host, string $dbname, string $user, string $pwd, string $charset = 'utf8mb4', string $collate = 'utf8mb4_general_ci') {
        
        try {

            $this->_engine;
            $this->_host;
            $this->_dbname;
            $this->_user;
            $this->_pwd;
            $this->_charset;
            $this->_collate;

            $this->_pdo = new PDO($engine . ':host=' . $host . ';dbname=' . $dbname . ';charset=' . $charset, $user, $pwd, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        } catch(PDOException $e) {
            throw new Exception("Error Processing Request", 1, $e); 
        }
    }
}
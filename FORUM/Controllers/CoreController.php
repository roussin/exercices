<?php
class CoreController
{
    protected $_model;

    public function __construct()
    {
        $model = static::MODEL . 'Model';
        $this->_model = new $model(DB_ENGINE, DB_HOST, DB_NAME, DB_USER, DB_PWD, DB_CHARSET, DB_COLLATE);
    }
}
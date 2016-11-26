<?php
/**
 * Created by PhpStorm.
 * User: vu
 * Date: 11/26/16
 * Time: 9:14 PM
 */
namespace Api\Business;
use Api\Connection\Connection;

class Business {

    public $connection;

    public $model;

    function __construct()
    {
        $this->connection   = new Connection();
    }
}
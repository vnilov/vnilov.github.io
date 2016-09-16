<?php

/**
 * User: vnilov
 * Date: 9/16/16
 */

class MySQL
{
    public function __construct($host, $user, $passwd)
    {

    }
}

class PostgerSQL
{
    public function __construct($host, $user, $passwd)
    {

    }
    
}

class Database
{
    public static function connect($driver, $params)
    {
        switch ($driver) {
            case "mysql":
                $obj = new MySQL($params['host'], $params['user'], $params['passwd']);
            case "postgreSQL":
                $obj = new PostgerSQL($params['host'], $params['user'], $params['passwd']);
            default:
                $obj = new MySQL($params['host'], $params['user'], $params['passwd']);
        }
        return $obj;
    }
}

$params = ['host' => 'localhost', 'user' => 'test', 'passwd' => 'test'];

$db = Database::connect('mysql', $params);
$db = Database::connect('postgreSQL', $params);
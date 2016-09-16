<?php
/**
 * User: vnilov
 * Date: 9/16/16
 */

interface SQL
{
    public function connect();
}

class MySQL2 implements SQL {
    public function connect()
    {
        // TODO: Implement connect() method.
    }
}

class PostgresSQL2 implements SQL {
    public function connect()
    {
        // TODO: Implement connect() method.
    }
}


class Database2
{
    public static function create($driver, $params)
    {
        switch ($driver) {
            case "mysql":
                $obj = new MySQL2($params['host'], $params['user'], $params['passwd']);
            case "postgreSQL":
                $obj = new PostgerSQL2($params['host'], $params['user'], $params['passwd']);
            default:
                $obj = new MySQL2($params['host'], $params['user'], $params['passwd']);
        }
        return $obj->connect();
    }
}


$db = Database2::create('mysql', $params);
<?php


namespace application\components;


class Db
{
    public static function getConnection()
    {
        $paramsPath = __DIR__.'/../config/db.php';
        $params = include ($paramsPath);

        $dsn = "mysql:host={$params['host']}; dbname={$params['dbname']}";
        $db = new \PDO($dsn, $params['user'], $params['password']);
        $db->exec("set name utf8");

        return $db;
    }

}
<?php

namespace DB;
use PDO;

class DB {
    private static $dbh = null;

    public static function getInstance(): PDO
    {
        if (!self::$dbh) {

            $cfg = require_once('db.php');

            try {
                $dbh = new PDO("mysql:dbname=${cfg['schema']};host=${cfg['host']}", $cfg['username'], $cfg['password']);
                
                self::$dbh = $dbh;
                return $dbh;
                
            } catch (PDOException $e) {
                return $e->getMessage();
            }

        } else {
            return self::$dbh;
        }
    }
}

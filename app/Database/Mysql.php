<?php

namespace App\Database;


use App\Database\Database;


class Mysql extends Database
{


    public function __construct()
    {
        $this->connect();
    }


    private $host = 'localhost';
    private $dbname = 'myphp';
    private $username = 'root';
    private $password = '';
    private $charset = 'utf8mb4';
    private $PDO;



    public function connect()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";

        try {
            $this->PDO = new \PDO($dsn, $this->username, $this->password);
            $this->PDO->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query($sql)
    {
        $stmt = $this->PDO->prepare($sql);

        try {
            $stmt->execute();
        } catch (\PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }

        return $stmt;
    }

    public function fetchAll($sql)
    {
        $stmt = $this->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function fetch($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function execute($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        return $stmt->rowCount();
    }
}
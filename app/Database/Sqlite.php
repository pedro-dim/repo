<?php

namespace App\Database;




use App\Database\Database;



class SQLite extends Database
{
    private $pdo;
    private $dbFile;

    public function __construct($dbFile)
    {
        $this->dbFile = $dbFile;
        $this->connect();
    }


    public function connect()
    {
        try {
            $this->pdo = new \PDO("sqlite:$this->dbFile");
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query($sql, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    public function select($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert($table, $data)
    {
        $columns = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $this->query($sql, $data);
    }

    public function update($table, $data, $condition)
    {
        $set = [];
        foreach ($data as $key => $value) {
            $set[] = "$key = :$key";
        }
        $set = implode(", ", $set);

        $sql = "UPDATE $table SET $set WHERE $condition";
        $this->query($sql, $data);
    }

    public function delete($table, $condition, $params = [])
    {
        $sql = "DELETE FROM $table WHERE $condition";
        $this->query($sql, $params);
    }
}

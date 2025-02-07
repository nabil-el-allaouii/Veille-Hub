<?php

class Database
{
    protected $connection;
    protected $dbname = "veillehub";
    protected $host = "localhost";
    protected $username = "root";
    protected $password = "258456";

    public function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";

        try {
            $this->connection = new PDO($dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function query($query, $params = [])
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
    public function send($query, $params = [])
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
    }

    public function fetch($query, $param = [])
    {
        return $this->query($query, $param)->fetch();
    }
    
    public function fetchAll($query, $param = [])
    {
        return $this->query($query, $param)->fetchAll();
    }
}

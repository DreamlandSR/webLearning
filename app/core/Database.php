<?php

class Database {

    private $host = 'DB_HOST';
    private $user = 'DB_USER';
    private $password = 'DB_PASS';
    private $database = 'DB_NAME';

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . 'dbname=' . $this->database;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->password, $option);
        } catch(PDOException $e) {
            die ("ERROR: Could not connect. " . $e->getMessage());
        }
    }

    public function query($query) 
    {
        $this->stmt = $this->dbh->prepare($query);
    }
    
    public function bind($value, $param, $type = null) {
        if (is_null($type)) {
        switch (true) {
            case is_int($value) :
                $type = PDO::PARAM_INT;
                break;
            case is_bool($type) :
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value) :
                $type = PDO::PARAM_NULL;
                break;
            default :
            $type = PDO::PARAM_STR;
        }
    }

    $this->stmt->bindValue($value, $param, $type);
}


    public function execute()
    {
        $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}
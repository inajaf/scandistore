<?php

namespace src;

class Database
{
    private DbConfig $dbConfig;

    public function __construct()
    {
        $this->dbConfig = new DbConfig();
    }

    public function getAllProducts(): void
    {
    }

    public function connect(): PDO
    {
        $dsn = 'mysql:host=' . $this->dbConfig::HOST . ';dbname=' . $this->dbConfig::DB_NAME;
        $pdo = new PDO($dsn, $this->dbConfig::USER, $this->dbConfig::PASSWORD);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
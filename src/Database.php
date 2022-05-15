<?php

class Database
{
    private DbConfig $dbConfig;
    protected PDO $pdo;

    public function __construct()
    {
        $this->dbConfig = new DbConfig();
        $this->pdo = $this->connect();
    }

    public function getAllProducts(): void
    {
    }

    public function create(array $data): void
    {
        $sql = "INSERT INTO product (sku, name, price, size, weight, height, width, length) 
            VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array_values($data));
    }

    public function connect(): PDO
    {
        $dsn = 'mysql:host=' . $this->dbConfig::HOST . ';dbname=' . $this->dbConfig::DB_NAME;
        $pdo = new PDO($dsn, $this->dbConfig::USER, $this->dbConfig::PASSWORD);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
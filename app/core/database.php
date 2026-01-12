<?php

namespace App\Core;

require_once __DIR__ . '/../../config/database.php';

use Config\Database as DBConfig;
use PDO;
use PDOException;

class DatabaseConnection {
    private static ?DatabaseConnection $instance = null;
    private PDO $pdo;


    private function __construct() {
        $dbConfig = DBConfig::db();
        try {
            $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";
            $this->pdo = new PDO(
                $dsn,
                $dbConfig['user'],
                $dbConfig['password']
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection error : " . $e->getMessage());
        }
    }

    public static function getInstance(): DatabaseConnection {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    public function getConnection(): PDO {
        return $this->pdo;
    }
}
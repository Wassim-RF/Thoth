<?php
    namespace Config;

    class Database {
        public static function db() {
            return [
                'host' => '127.0.0.1',
                'dbname' => 'thoth',
                'user' => 'root',
                'password' => '1980',
                'port' => 3306,
                'charset' => 'utf8mb4'
            ];
        }
    }
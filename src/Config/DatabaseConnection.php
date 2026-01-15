<?php

class DatabaseConnection{
    private PDO $conn;

    function establishConnection(){
        try {
            $dsn = new PDO("mysql:host=localhost;dbname=clinic", "root", "");
            // $dsn->setAttribute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
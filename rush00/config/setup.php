<?php

include_once 'database.php';

function connectDB()
{
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

    $pdo = new PDO($GLOBALS["DB_DSN"], $GLOBALS["DB_USER"], $GLOBALS["DB_PASSWORD"], $opt );
    return ($pdo);
}

$pdo = connectDB();

try {$pdo->exec("CREATE DATABASE IF NOT EXISTS " . $DB_NAME);}
catch (PDOException $e) {echo "ERROR CREATING DATABASE: ". $e->getMessage() . "\n";}

try {
    $pdo->exec("USE " . $DB_NAME);
    $sql = "CREATE TABLE IF NOT EXISTS users
    (
        `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `login` VARCHAR(100) NOT NULL,
        `pass` VARCHAR(100) NOT NULL
    );";
    $pdo->exec($sql);
}
catch (PDOException $e) {echo "ERROR CREATE TABLE USERS: ". $e->getMessage() . "\n";}

try {
    $pdo->exec("USE " . $DB_NAME);
    $sql = "CREATE TABLE IF NOT EXISTS prods
    (
        `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `title` VARCHAR(100) NOT NULL,
        `category` ENUM('PC', 'Monitors', 'Accessories') NOT NULL,
        `price` INT NOT NULL,
        `img` VARCHAR(100) NOT NULL,
        `amt` INT NOT NULL
    );";
    $pdo->exec($sql);
}
catch (PDOException $e) {echo "ERROR CREATE TABLE PRODS: ". $e->getMessage() . "\n";}


?>
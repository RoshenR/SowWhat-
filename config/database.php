<?php

const DB_CONFIG = [
    'host' => 'localhost',
    'port' => '3306',
    'dbname' => 'bdd_sowwhat',
    'username' => 'root',
    'password' => 'Ren55HELL'
];

try {
    $dsn = "mysql:host=" . DB_CONFIG['host'] . ";port=" . DB_CONFIG['port'] . ";dbname=" . DB_CONFIG['dbname'] . ";charset=utf8";
    $pdo = new PDO($dsn, DB_CONFIG['username'], DB_CONFIG['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

?>
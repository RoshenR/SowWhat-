<?php

require_once './config/database.php';

function dbConnect(): PDO {
    try {
        $db = new PDO(
            "mysql:host=" . DB_CONFIG['host'] . ";port=" . DB_CONFIG['port'] . ";dbname=" . DB_CONFIG['dbname'] . ";charset=utf8",
            DB_CONFIG['username'],
            DB_CONFIG['password']
        );
        // Définir le mode d'erreur sur Exception pour faciliter le débogage
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Définir le mode de récupération par défaut sur FETCH_ASSOC
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $db;
    } catch (PDOException $e) {
        // Gestion des erreurs de connexion
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}

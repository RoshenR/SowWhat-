<?php

require_once('./models/connection.php');

// Create
function saveArticles(string $description, string $localisation, int $numero_salle, string $categorie): bool {
    try {
        $sql = "INSERT INTO articles( description, localisation, numero_salle, categorie, published_at) 
                VALUES( :description, :localisation, :numero_salle, :categorie, :published_at)";
        $date = new DateTime();
        $query = dbConnect()->prepare($sql);
        $query->bindValue(':description', $description, PDO::PARAM_STR);
        $query->bindValue(':localisation', $localisation, PDO::PARAM_STR);
        $query->bindValue(':numero_salle', $numero_salle, PDO::PARAM_INT);
        $query->bindValue(':categorie', $categorie, PDO::PARAM_STR);
        $query->bindValue(':published_at', $date->format('Y-m-d H:i:s'), PDO::PARAM_STR);
        return $query->execute();
    } catch (PDOException $e) {
        error_log('Erreur SQL : ' . $e->getMessage()); // Enregistre l'erreur dans le journal
        return false;
    }
}

// Read
function getLastsArticles(int $limit): array {
    $sql = "SELECT id, description, localisation, numero_salle, categorie, published_at FROM articles ORDER BY published_at DESC LIMIT :limit";
    $query = dbConnect()->prepare($sql);
    $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll();
}

// One
function getArticles(int $id): mixed {
    $sql = "SELECT description, localisation, numero_salle, categorie, published_at FROM articles WHERE id = :id";
    $query = dbConnect()->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

// Update
function editArticles(int $id, string $description, string $localisation, int $numero_salle, string $categorie): bool {
    $sql = "UPDATE articles SET description = :description, localisation = :localisation, numero_salle = :numero_salle, categorie = :categorie, published_at = :published_at WHERE id = :id";
    $date = new DateTime();
    $query = dbConnect()->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':localisation', $localisation, PDO::PARAM_STR);
    $query->bindValue(':numero_salle', $numero_salle, PDO::PARAM_INT);
    $query->bindValue(':categorie', $categorie, PDO::PARAM_STR);
    $query->bindValue(':published_at', $date->format('Y-m-d H:i:s'), PDO::PARAM_STR);
    return $query->execute();
}

// Delete
function deleteArticles(int $id): bool {
    $sql = "DELETE FROM articles WHERE id = :id";
    $query = dbConnect()->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    return $query->execute();
}

?>
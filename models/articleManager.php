<?php

require_once('./models/connection.php');

// Create

function saveArticles(string $title, string $description, string $content): bool {
    $sql = "INSERT INTO articles(title, description, content, published_at) VALUES(:title, :description, :content, :published_at)";
    $date = new DateTime();
    $query = dbConnect()->prepare($sql);
    $query->bindValue(':title', $title, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':content', $content, PDO::PARAM_STR);
    $query->bindValue(':published_at', $date->format('Y-m-d H:i:s'), PDO::PARAM_STR);
    return $query->execute();
}
// Read
function getLastsArticles(int $limit): array {
    $sql = "SELECT id, title, description, content, published_at FROM articles ORDER BY published_at DESC LIMIT :limit";
    $query = dbConnect()->prepare($sql);
    $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll();
}

// One
function getArticle(int $id): mixed {
    $sql = "SELECT title, description, content, published_at FROM articles WHERE id = :id";
    $query = dbConnect()->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

// Update

// Delete
<?php

    require_once('./models/connection.php');

    // All
    function getAllReports(): array {
        $sql = "SELECT description, localisation, num_salle, categorie, published_at FROM report";
        $query = dbConnect() -> prepare($sql);
        $query -> execute();
        return $query -> fetchAll();
    }
    // One
    function getReport(int $id): mixed {
        $sql = "SELECT description, localisation, num_salle, categorie, published_at FROM report WHERE id = :id";
        $query = dbConnect() -> prepare($sql);
        $query -> bindParam(':id', $id, PDO::PARAM_INT);
        $query -> execute();
        return $query -> fetch();
    }

    // CREATE
    function saveReport(string $description, string $localisation, string $num_salle, string $categorie, ?DateTime $published_at): bool {
        $sql = "INSERT INTO report (description, localisation, num_salle, categorie, published_at) VALUES(:description, :localisation, :num_salle, :categorie, :published_at)";
        $query = dbConnect() -> prepare($sql);
        $query -> bindValue(':description', $description, PDO::PARAM_STR);
        $query -> bindValue(':localisation', $localisation, PDO::PARAM_STR);
        $query -> bindValue(':num_salle', $num_salle, PDO::PARAM_STR);
        $query -> bindValue(':categorie', $categorie, PDO::PARAM_STR);
        $query -> bindValue(':published_at', $published_at, PDO::PARAM_STR);
        return $query -> execute();
    }

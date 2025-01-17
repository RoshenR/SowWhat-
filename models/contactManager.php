<?php

require_once('./models/connection.php');

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $sujet = htmlspecialchars(trim($_POST['sujet']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validation des données
    if (empty($nom) || empty($prenom) || empty($email) || empty($message)) {
        die("Tous les champs obligatoires doivent être remplis.");
    }

    if (!$email) {
        die("Adresse email invalide.");
    }

    try {
        // Préparer la requête d'insertion
        $sql = "INSERT INTO contact (nom, prenom, mail, sujet, message) VALUES (:nom, :prenom, :email, :sujet, :message)";
        $stmt = $pdo->prepare($sql);

        // Exécuter la requête avec les données
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':sujet' => $sujet ?: NULL, // Si le sujet est vide, insérer NULL
            ':message' => $message,
        ]);

        // Confirmation de l'envoi
        echo "Votre message a été envoyé avec succès !";

    } catch (PDOException $e) {
        // Gestion des erreurs
        die("Erreur lors de l'envoi du message : " . $e->getMessage());
    }
}
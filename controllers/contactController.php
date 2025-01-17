<?php
require_once './models/articleManager.php';
require_once './config/database.php'; // Fichier contenant DB_CONFIG
require_once './models/connection.php'; // Logique de connexion PDO

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validation des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $sujet = htmlspecialchars($_POST['sujet'] ?? null);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        try {
            // Préparer la requête d'insertion
            $sql = "INSERT INTO contact_form (name, email, subject, message, created_at) 
                    VALUES (:name, :email, :subject, :message, NOW())";
            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':subject' => $subject,
                ':message' => $message,
            ]);

            // Stocker un message de succès dans une variable de session
            session_start();
            $_SESSION['status'] = "success";
            $_SESSION['message'] = "Votre message a été envoyé avec succès !";
        } catch (PDOException $e) {
            session_start();
            $_SESSION['status'] = "error";
            $_SESSION['message'] = "Erreur lors de l'envoi : " . $e->getMessage();
        }
    } else {
        session_start();
        $_SESSION['status'] = "error";
        $_SESSION['message'] = "Veuillez remplir tous les champs obligatoires.";
    }

    // Rediriger vers la page de contact après traitement
    header("Location: ./views/pages/contact.php");
    exit();
}

$template = "./views/pages/contact.php";
?>
<?php
// Inclure le modèle d'articles pour récupérer les données
require_once('./models/articleManager.php');


// Récupérer les 6 derniers articles
$lastArticles = getLastsArticles(6);

// Si tu veux inclure d'autres parties de la page, tu peux aussi inclure l'en-tête ou d'autres éléments ici
?>
<div id="detection">
    <h1>Tableau des Balises Défectueuses</h1>
    <p>Toutes les balises non utilisables :</p>
    <button id="addRowBtn">+ Ajouter</button>
    <table id="balise-table">
        <thead>
            <tr>
                <th>Description</th>
                <th>Localisation</th>
                <th>Numéro Salle</th>
                <th>Catégorie</th>
                <th>Date Publication</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Vérifie que la récupération des données a fonctionné
            if ($lastArticles && count($lastArticles) > 0) {
                // Afficher chaque balise dans une ligne de tableau
                foreach ($lastArticles as $article) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($article['description']) . "</td>";
                    echo "<td>" . htmlspecialchars($article['localisation']) . "</td>";
                    echo "<td>" . htmlspecialchars($article['numero_salle']) . "</td>";
                    echo "<td>" . htmlspecialchars($article['categorie']) . "</td>";
                    echo "<td>" . htmlspecialchars($article['published_at']) . "</td>";
                    echo "<td>
                            <button class='editBtn'>Éditer</button>
                            <button class='deleteBtn'>Supprimer</button>
                        </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Aucune balise disponible</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<div id="overlay"></div>

<!-- Formulaire pour ajouter ou modifier une balise -->
<div id="form-popup">
    <form action="" id="add-form" method="POST">
        <h2>Ajouter ou Modifier une balise</h2>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required>

        <label for="localisation">Localisation:</label>
        <select id="localisation" name="localisation" required>
            <option value="Paris">Paris</option>
            <option value="Bordeaux">Bordeaux</option>
        </select>

        <label for="numero-salle">Numéro Salle:</label>
        <input type="text" id="numero-salle" name="numero-salle" required>

        <label for="categorie">Catégorie:</label>
        <select id="categorie" name="categorie" required>
            <option value="Déconnectée">Déconnectée</option>
            <option value="Endommagée">Endommagée</option>
        </select>

        <label for="date-publication">Date Publication:</label>
        <input type="date" id="date-publication" name="date-publication" required>

        <button type="submit" class="btn">Enregistrer</button>
        <button type="button" id="cancelBtn" class="btn btn-danger">Annuler</button>
    </form>
</div>

<!-- Popup pour demander le mot de passe -->
<div id="password-popup">
    <form id="password-form">
        <h2>Confirmation de Suppression</h2>
        <label for="password">Entrez le mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <button type="submit" class="btn">Confirmer</button>
        <button type="button" id="cancelPasswordBtn" class="btn btn-danger">Annuler</button>
    </form>
</div>

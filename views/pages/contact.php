<section class="contact-section">
    <h1>Contactez-nous</h1>
    <form action="../models/contactManager.php" method="post">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Votre email" required>
        </div>
        <div class="form-group">
            <label for="sujet">Sujet :</label>
            <input type="text" id="subject" name="subject" placeholder="Sujet (optionnel)">
        </div>
        <div class="form-group">
            <label for="message">Message :</label>
            <textarea id="message" name="message" placeholder="Votre message" required></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</section>
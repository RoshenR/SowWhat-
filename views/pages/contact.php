<section class="contact-section">
    <h1>Contactez-nous</h1>
    <form action="../controllers/contactController.php" method="post">
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Votre email" required>
        </div>
        <div class="form-group">
            <label for="subject">Sujet :</label>
            <input type="text" id="subject" name="subject" placeholder="Sujet (optionnel)">
        </div>
        <div class="form-group">
            <label for="message">Message :</label>
            <textarea id="message" name="message" placeholder="Votre message" required></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</section>
<div id="home">
    <h1>Contact</h1>
    <body>
    <form action="contact.php" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="subject">Sujet :</label>
        <input type="text" id="subject" name="subject"><br><br>
        
        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="5" required></textarea><br><br>
        
        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>
</div>
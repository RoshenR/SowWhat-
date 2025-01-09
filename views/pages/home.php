<div id="home">
    <h1>Accueil</h1>
    <div id="articles">
        <?php foreach ($lastArticles as $article) { ?>
            <article class="article">
                <h2><?= $article['title'] ?></h2>
                <p><?= $article['description'] ?></p>
                <p>Publié le <?= $article['published_at'] ?></p>
                <a href="index.php?page=article_info&id=<?= $article['id'] ?>">Lire l'article</a>
            </article>
        <?php } ?>
    </div>
<<<<<<< Updated upstream
</div>
=======
    <div class="info-cards">
        <div class="info-card">
            <h3>Dénoncer une balise</h3>
            <p>Signalez rapidement toute balise défectueuse en un clic.</p>
            <button><a href="index.php?page=detection">gtrhtrbvgrtg</button>
        </div>
        <div class="info-card">
            <h3>Stats</h3>
            <p>Accédez à des statistiques détaillées sur les balises signalées.</p>
        </div>
        <div class="info-card">
            <h3>Récap</h3>
            <p>Consultez un résumé des balises signalées récemment.</p>
        </div>
    </div>

    <div class="a-little-more-main">
        <p>Nous sommes une jeune entreprise dynamique créée par 4 étudiants passionnés et engagés.
            Notre objectif est simple : résoudre le problème des balises "SoWeSign" défectueuses
            pour offrir une expérience optimale aux élèves. Nous croyons en l'importance d'une
            technologie fiable et fonctionnelle, et nous mettons tout en œuvre pour assurer un service
            efficace et innovant. Ensemble, nous œuvrons pour simplifier la gestion et l'entretien de ces balises,
            en alliant expertise technique et esprit d'équipe.</p>
    </div>
</div>
>>>>>>> Stashed changes

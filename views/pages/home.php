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
</div>
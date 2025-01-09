<div id="article-list">
    <h1>Les articles</h1>
    <div id="articles">
        <?php foreach ($articles as $article) { ?>
        <article class="article">
            <h2><?= $article['title'] ?></h2>
            <p><?= $article['description'] ?></p>
        </article>
    <?php } ?>
    </div>
</div>
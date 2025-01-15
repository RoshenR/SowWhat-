<div id="article-add">
    <h1>Publier un article</h1>
    <form action="" method="POST">
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
        <label for="content">Contenu de l'article :</label>
        <textarea name="content" id="content" rows="5" required></textarea>
        <input type="submit" value="Publier">
    </form>
    <?php if (isset($feedback)) { ?>
        <span class="alert alert-"><?= $feedback ['message'] ?></span>
    <?php }?>
</div>
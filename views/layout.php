<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $SEO['title'] ?> - Mon site</title>
    <meta name="description" content="<?=  $SEO['description']?>">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./public/css/app.css">
</head>

<body>
<?php require('./views/partials/_header.html') ?>
<main>
    <?php require($template); ?>
</main>
<?php require('./views/partials/_footer.html') ?>
</body>

</html>
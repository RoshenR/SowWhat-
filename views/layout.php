<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $SEO['title'] ?> - Mon site</title>
    <meta name="description" content="<?=  $SEO['description']?>">
    <link rel="stylesheet" href="./public/css/app.css">
    <script src="./public/JS/script_burger"></script>
    <script src="./public/JS/script_detection.js" defer></script>
</head>

<body>
<?php require('./views/partials/_header.html') ?>
<main>
    <?php require($template); ?>
</main>
<?php require('./views/partials/_footer.html') ?>
</body>

</html>
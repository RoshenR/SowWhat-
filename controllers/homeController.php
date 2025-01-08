<?php
require_once('./models/articleManager.php');

$lastArticles = getLastsArticles(6);
$template = "./views/pages/home.php";

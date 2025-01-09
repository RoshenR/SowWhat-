<?php
require_once './config/routes.php';

// Récupérer les noms des routes disponibles
$availableRouteNames = array_keys(AVAILABLE_ROUTES);

// Vérifier si la page demandée est définie dans l'URL et existe dans les routes
if (isset($_GET['page']) && in_array($_GET['page'], $availableRouteNames, true)) {
    $controller = AVAILABLE_ROUTES[$_GET['page']]['controllers'] ?? null;
    $SEO = AVAILABLE_ROUTES[$_GET['page']]['SEO'] ?? null;
} else {
    // Utiliser la route par défaut si aucune page n'est définie
    $controller = DEFAULT_ROUTE['controllers'];
    $SEO = DEFAULT_ROUTE['SEO'];
}

// Vérification du contrôleur
if (!$controller) {
    die('Erreur : Contrôleur non défini.');
}

$controllerPath = './controllers/' . $controller;

// Vérification si le fichier du contrôleur existe
if (!file_exists($controllerPath)) {
    die('Erreur : Le fichier du contrôleur ' . $controllerPath . ' est introuvable.');
}

// Inclure le contrôleur
require $controllerPath;

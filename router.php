<?php

require_once('./config/routes.php');

$availableRouteNames = array_keys(AVAILABLE_ROUTES);

if (isset($_GET['page']) && in_array($_GET['page'], $availableRouteNames, true)) {
    $controller = AVAILABLE_ROUTES[$_GET['page']]['controllers'];
    $SEO = AVAILABLE_ROUTES[$_GET['page']]['SEO'];
} else {
    $controller = DEFAULT_ROUTE['controllers'];
    $SEO = DEFAULT_ROUTE['SEO'];
}


require './controllers/' . $controller;


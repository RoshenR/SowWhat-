<?php

const AVAILABLE_ROUTES = [
    'home' => [
        'controllers' => 'homeController.php',
        "SEO" => [
            'title' => 'Accueil',
            'description' => 'Accueil tah les bogota..',
        ]
    ],
    "team" => [
        'controllers' => 'teamController.php',
        "SEO" => [
            'title' => 'Team',
            'description' => 'Ici on te démarre',
        ]
    ],
    "contact" => [
        'controllers' => 'contactController.php',
        "SEO" => [
            'title' => 'Contact',
            'description' => 'Contactez nous',
        ]
    ],
<<<<<<< HEAD
    "detection" => [
        'controllers' => 'detectionController.php',
        "SEO" => [
            'title' => 'detection',
            'description' => 'Conditions d\'utilisation',
        ]
    ],
=======
>>>>>>> master
    "conditions d'utilisation" => [
        'controllers' => 'conditionsController.php',
        "SEO" => [
            'title' => 'Conditions d\'utilisation',
            'description' => 'Conditions d\'utilisation',
        ]
    ],
];

const DEFAULT_ROUTE = AVAILABLE_ROUTES['home'];
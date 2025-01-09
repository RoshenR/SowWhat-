<?php

const AVAILABLE_ROUTES = [
    'home' => [
        'controllers' => 'homeController.php',
        "SEO" => [
            'title' => 'Accueil',
            'description' => 'Accueil tah les bogota..',
        ]
    ],
    'contact' => [
		'controller' => 'contactController.php',
		'seo' => [
			'title' => 'Contact',
			'description' => 'Ma meta desc...',
		]
	],
    'legal_mentions' => [
		'controller' => 'legalMentionsController.php',
		'seo' => [
			'title' => 'Mention légales',
			'description' => 'Ma meta desc...',
		]
	],
    'team' => [
        'controller' => 'teamController.php',
        'seo' => [
            'title' => 'Team',
            'description' => 'Ma meta desc...',
        ]
    ],
    'privacy_policy' => [
		'controller' => 'privacyPolicyController.php',
		'seo' => [
			'title' => 'Politique de confidentialité',
			'description' => 'Ma meta desc...',
		]
    ],
];

const DEFAULT_ROUTE = AVAILABLE_ROUTES['home'];
<?php

// Tableau des commandes
$commandes = [
    'clients' => [
        [
            'numero_commande' => 'Eg65jls7875',
            'informations' => [
                'nom' => 'Edouard',
                'prenom' => 'Steeve',
                'adresses' => [
                    'livraison' => [
                        'adresse' => '17 rue saint jacques',
                        'postal' => 12000,
                        'ville' => 'Rodez',
                    ],
                    'facturation' => [
                        'adresse' => '34 rue saint paul',
                        'postal' => 12000,
                        'ville' => 'Rodez',
                    ],
                ],
            ],
            'commentaires' => [
                [
                    'commentaire' => 'Client fidèle',
                ],
                [
                    'commentaire' => 'Ristourne a sa prochaine commande',
                ],
            ],
            'commande' => [
                'articles' => [
                    [
                        'article' => 'jean',
                        'size' => 'xxl',
                        'color' => 'green',
                    ],
                    [
                        'article' => 'tee-shirt',
                        'size' => 'xxl',
                        'color' => 'white',
                    ],
                    [
                        'article' => 'pull',
                        'size' => 'xxl',
                        'color' => 'white',
                    ],
                ],
            ],
        ],
        [
            'numero_commande' => 'E2546JHG521d',
            'informations' => [
                'nom' => 'Smit',
                'prenom' => 'Jean-Yves',
                'adresses' => [
                    'livraison' => [
                        'adresse' => '33 rue d\'endoume',
                        'postal' => 13007,
                        'ville' => 'Marseille',
                    ],
                    'facturation' => [
                        'adresse' => '10 rond point du prado',
                        'postal' => 13008,
                        'ville' => 'Marseille',
                    ],
                ],
            ],
            'commande' => [
                'articles' => [
                    [
                        'article' => 'chausette',
                        'size' => '38-42',
                        'color' => 'white',
                    ],
                    [
                        'article' => 'tee-shirt',
                        'size' => 'xl',
                        'color' => 'black',
                    ],
                    [
                        'article' => 'pull',
                        'size' => 'xl',
                        'color' => 'white',
                    ],
                ],
            ],
        ],
        [
            'numero_commande' => 'a12f41g5JH66',
            'informations' => [
                'nom' => 'Bernard',
                'prenom' => 'François',
                'adresses' => [
                    'livraison' => [
                        'adresse' => '33 rue de montpellier',
                        'postal' => 33000,
                        'ville' => 'Bordeaux',
                    ],
                    'facturation' => [
                        'adresse' => '33 rue de montpellier',
                        'postal' => 33000,
                        'ville' => 'Bordeaux',
                    ],
                ],
            ],
            'commande' => [
                'articles' => [
                    [
                        'article' => 'nappes en coton',
                        'size' => 'taille-unique',
                        'color' => 'white',
                    ],
                    [
                        'article' => 'set de 24 couverts',
                        'size' => 'taille-unique',
                        'color' => 'gris',
                    ],
                    [
                        'article' => 'lot de 6 chaises en bois',
                        'size' => 'taille-unique',
                        'color' => 'bois',
                    ],
                ],
            ],
        ],
    ],
];

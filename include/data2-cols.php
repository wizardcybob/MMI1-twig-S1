<?php
// Exemple des données pour les tests

// Un tableau associatif
$col_croix_bonhome = [
    'id' => 1,
	'name' => 'Le Col de la Croix du Bonhomme',
	'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11141.783890368475!2d6.718922999999999!3d45.72215035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47895de9670d1e1b%3A0xa5c3b41ebb7ec82b!2sCol%20de%20la%20Croix%20du%20Bonhomme!5e0!3m2!1sfr!2sfr!4v1707053270019!5m2!1sfr!2sfr',
	'country' => 'France',
	'altitude' => 2962,
    'photos' => [
        './images/cols/col_bonhomme1.jpg',
        './images/cols/col_bonhomme2.jpg',
        './images/cols/col_bonhomme3.jpg',
        './images/cols/col_bonhomme4.jpg',
    ],
];

$col_tricot = [
    'id' => 2,
    'name' => 'Col du Tricot',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2786.1095798434695!2d6.825846414336864!3d45.75976947910599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a6517171278a5%3A0x2d5152c151f8824!2sCol%20du%20Tricot!5e0!3m2!1sfr!2sfr!4v1707053793063!5m2!1sfr!2sfr',
    'country' => 'France',
    'altitude' => 2120,
    'photos' => [
        './images/cols/col_tricot1.jpg',
        './images/cols/col_tricot2.jpg',
        './images/cols/col_tricot3.jpg',
        './images/cols/col_tricot4.jpg',
    ],
];

$col_fours = [
    'id' => 3,
    'name' => 'Col des Fours',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2787.032437029153!2d7.021906614336464!3d45.750110279106946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a7a61b91ed6cd%3A0x4cf551d9c5be2204!2sCol%20des%20Fours!5e0!3m2!1sfr!2sfr!4v1707053879644!5m2!1sfr!2sfr',
    'country' => 'France',
    'altitude' => 2665,
    'photos' => [
        './images/cols/col_fours1.jpg',
        './images/cols/col_fours2.jpg',
        './images/cols/col_fours3.jpg',
        './images/cols/col_fours4.jpg',
    ],
];

$col_seigne = [
    'id' => 4,
    'name' => 'Col de la Seigne',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11142.4924565252!2d6.947370599999999!3d45.75647615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a7b78a7ebbe2f%3A0x647b24c2121446e3!2sCol%20de%20la%20Seigne!5e0!3m2!1sfr!2sfr!4v1707054056452!5m2!1sfr!2sfr',
    'country' => 'France',
    'altitude' => 2516,
    'photos' => [
        './images/cols/col_seigne1.jpg',
        './images/cols/col_seigne2.jpg',
        './images/cols/col_seigne3.jpg',
        './images/cols/col_seigne4.jpg',
    ],
];

$col_grand_ferret = [
    'id' => 5,
    'name' => 'Le Grand Col Ferret',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.543632142002!2d7.028466414337174!3d45.8514772791053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47846f41c8c0a987%3A0xe5084ea5e162b1e9!2sRefuge%20Elena!5e0!3m2!1sfr!2sfr!4v1707054136347!5m2!1sfr!2sfr',
    'country' => 'Italy',
    'altitude' => 2537,
    'photos' => [
        './images/cols/col_ferret1.jpg',
    ],
];

// ALL COLS
$cols_data = [$col_croix_bonhome, $col_tricot, $col_fours, $col_seigne, $col_grand_ferret];

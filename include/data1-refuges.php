<?php
// Exemple des données pour les tests

// Un tableau associatif
$refuge_argentiere = [
	'name' => 'Refuge d\'argentière',
	'website' => 'http://www.clubalpin-chamonix.com',
	'map' => 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d9901.267009270921!2d6.7215338288915865!3d45.86232510575896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srefuge%20miage!5e0!3m2!1sfr!2sfr!4v1706893082835!5m2!1sfr!2sfr',
	'country' => 'France',
	'altitude' => 2771,
	'creation' => '08/27/1933', // m/d/Y -> help for age calculation
	'photo' => 'https://cdn-s-www.ledauphine.com/images/E498C61A-C8C7-4E49-AC4B-624B85FEB2EA/NW_raw/au-total-pendant-sa-periode-d-ouverture-principal-le-refuge-n-aura-ete-ouvert-que-sept-jours-archives-photo-le-dl-1651676149.jpg',
    'capacity' => 70,
];

$refuge_nantborrant = [
    'name' => 'Refuge de Nant Borrant',
    'website' => 'http://www.refugedenantborrant.com', // Ajoute le site web du refuge
    'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2787.199529170274!2d6.738392114337012!3d45.75939327910647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a6fa631d8a2e7%3A0x6deac1776990f97e!2sRefuge%20de%20Nant%20Borrant!5e0!3m2!1sfr!2sfr!4v1706895392861!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', // Ajoute la carte Google Maps
    'country' => 'France',
    'altitude' => 1459,
    'creation' => '08/15/1965', // Ajoute la date de création
    'photo' => 'https://www.autourdumontblanc.com/asset/img/nant-borrant_citl.jpg',
    'capacity' => 35,
];

$refuge_torino = [
	'name' => 'Rifugio Torino',
	'website' => 'http://www.rifugiotorino.com',
	'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.3482617149216!2d6.93115667489306!3d45.844328907997635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47894620260c91f5%3A0x575a1f5f43eb0118!2sRifugio%20Torino!5e0!3m2!1sfr!2sfr!4v1706893613662!5m2!1sfr!2sfr',
	'country' => 'Italie',
	'altitude' => 3375,
	'creation' => '08/05/1952', // m/d/Y -> help for age calculation
	'photo' => 'https://www.refuges-montagne.fr/images/torino-00.jpg',
    'capacity' => 90,
];

$refuge_miage = [
    'name' => 'Refuge de Miage',
    'website' => 'http://www.refugedemiage.com',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.6221656026837!2d6.749276514337251!3d45.7960364791041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a6f019c784dbd%3A0x13a6e9c9d2c1a9c7!2sRefuge%20de%20Miage!5e0!3m2!1sfr!2sfr!4v1706894223212!5m2!1sfr!2sfr',
    'country' => 'France',
    'altitude' => 1559,
    'creation' => '07/12/1926', // m/d/Y -> help for age calculation
    'photo' => 'https://static.savoie-mont-blanc.com/wp-content/uploads/external/c1538d3da70adb00968d04f4d202ab53-14655897-1745x1163.jpg',
    'capacity' => 50,
];

$refuge_elena = [
    'name' => 'Refuge Elena',
    'website' => 'http://www.refugeelena.it',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.0179788458536!2d7.032505114332766!3d45.86818057910588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47846f41c8c0a987%3A0xe5084ea5e162b1e9!2sRefuge%20Elena!5e0!3m2!1sfr!2sfr!4v1706894681925!5m2!1sfr!2sfr',
    'country' => 'Italy',
    'altitude' => 2062,
    'creation' => '09/18/1949', // m/d/Y -> help for age calculation
    'photo' => 'https://www.autourdumontblanc.com/asset/img/rifugio_elena_1-1_cit.jpg',
    'capacity' => 80,
];

$refuge_leschaux = [
    'name' => 'Refuge Leschaux',
    'website' => 'http://www.refuge-leschaux.com',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.9338579601347!2d6.828822514336824!3d45.77290007910691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a656a4b39d10d%3A0xb0e8483837b3aa60!2sRefuge%20Leschaux!5e0!3m2!1sfr!2sfr!4v1706895360144!5m2!1sfr!2sfr',
    'country' => 'France',
    'altitude' => 2431,
    'creation' => '06/21/1920', // m/d/Y -> help for age calculation
    'photo' => 'https://static.savoie-mont-blanc.com/wp-content/uploads/external/39e991fadb10385ec5d4fa8b19404f8d-653069-1745x1163.jpg',
    'capacity' => 80,
];


// ALL REFUGES
$refuges_data = [$refuge_argentiere, $refuge_nantborrant, $refuge_torino, $refuge_miage, $refuge_elena, $refuge_leschaux];

<?php
// Exemple des données pour les tests

// Un tableau associatif
$refuge_argentiere = [
    'id' => 1,
	'name' => 'Refuge d\'argentière',
	'website' => 'http://www.clubalpin-chamonix.com',
	'map' => 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d9901.267009270921!2d6.7215338288915865!3d45.86232510575896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srefuge%20miage!5e0!3m2!1sfr!2sfr!4v1706893082835!5m2!1sfr!2sfr',
	'country' => 'France',
	'altitude' => 2771,
	'creation' => '08/27/1933', // m/d/Y -> help for age calculation
	'photo' => './images/refuges/argentiere.jpg',
    'capacity' => 70,
];

$refuge_nantborrant = [
    'id' => 2,
    'name' => 'Refuge de Nant Borrant',
    'website' => 'http://www.refugedenantborrant.com', // Ajoute le site web du refuge
    'map' => 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d89044.83155184142!2d6.6319404258964285!3d45.77818438459004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47895945bb7a9715%3A0xbf15e1e3724527e0!2sCol%20du%20Bonhomme%2C%2074170%20Les%20Contamines-Montjoie!3m2!1d45.778214!2d6.714341!5e0!3m2!1sfr!2sfr!4v1707136465656!5m2!1sfr!2sfr',
    'country' => 'France',
    'altitude' => 1459,
    'creation' => '08/15/1965', // Ajoute la date de création
    'photo' => './images/refuges/nant-borrant.jpg',
    'capacity' => 35,
];

$refuge_torino = [
    'id' => 3,
	'name' => 'Rifugio Torino',
	'website' => 'http://www.rifugiotorino.com',
	'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.3482617149216!2d6.93115667489306!3d45.844328907997635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47894620260c91f5%3A0x575a1f5f43eb0118!2sRifugio%20Torino!5e0!3m2!1sfr!2sfr!4v1706893613662!5m2!1sfr!2sfr',
	'country' => 'Italie',
	'altitude' => 3375,
	'creation' => '08/05/1952', // m/d/Y -> help for age calculation
	'photo' => './images/refuges/torino.jpg',
    'capacity' => 90,
];

$refuge_miage = [
    'id' => 4,
    'name' => 'Refuge de Miage',
    'website' => 'http://www.refugedemiage.com',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.6221656026837!2d6.749276514337251!3d45.7960364791041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a6f019c784dbd%3A0x13a6e9c9d2c1a9c7!2sRefuge%20de%20Miage!5e0!3m2!1sfr!2sfr!4v1706894223212!5m2!1sfr!2sfr',
    'country' => 'France',
    'altitude' => 1559,
    'creation' => '07/12/1926', // m/d/Y -> help for age calculation
    'photo' => './images/refuges/torino.jpg',
    'capacity' => 50,
];

$refuge_elena = [
    'id' => 5,
    'name' => 'Refuge Elena',
    'website' => 'http://www.refugeelena.it',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.0179788458536!2d7.032505114332766!3d45.86818057910588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47846f41c8c0a987%3A0xe5084ea5e162b1e9!2sRefuge%20Elena!5e0!3m2!1sfr!2sfr!4v1706894681925!5m2!1sfr!2sfr',
    'country' => 'Italy',
    'altitude' => 2062,
    'creation' => '09/18/1949', // m/d/Y -> help for age calculation
    'photo' => './images/refuges/elena.jpg',
    'capacity' => 80,
];

$refuge_leschaux = [
    'id' => 6,
    'name' => 'Refuge Leschaux',
    'website' => 'http://www.refuge-leschaux.com',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.9338579601347!2d6.828822514336824!3d45.77290007910691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a656a4b39d10d%3A0xb0e8483837b3aa60!2sRefuge%20Leschaux!5e0!3m2!1sfr!2sfr!4v1706895360144!5m2!1sfr!2sfr',
    'country' => 'France',
    'altitude' => 2431,
    'creation' => '06/21/1920', // m/d/Y -> help for age calculation
    'photo' => './images/refuges/leschaux.jpg',
    'capacity' => 80,
];


// ALL REFUGES
$refuges_data = [$refuge_argentiere, $refuge_nantborrant, $refuge_torino, $refuge_miage, $refuge_elena, $refuge_leschaux];

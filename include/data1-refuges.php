<?php
// Exemple des données pour les tests

// Un tableau associatif
$refuge_argentiere = [
	'name' => 'Refuge d\'argentière',
	'website' => 'http://www.clubalpin-chamonix.com',
	'map' => 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d9901.267009270921!2d6.7215338288915865!3d45.86232510575896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srefuge%20miage!5e0!3m2!1sfr!2sfr!4v1706893082835!5m2!1sfr!2sfr',
	'country' => 'France',
	'altitude' => 2771,
	'creation' => '27/08/1933',
	'photo' => 'https://cdn-s-www.ledauphine.com/images/E498C61A-C8C7-4E49-AC4B-624B85FEB2EA/NW_raw/au-total-pendant-sa-periode-d-ouverture-principal-le-refuge-n-aura-ete-ouvert-que-sept-jours-archives-photo-le-dl-1651676149.jpg',
];

$refuge_torino = [
	'name' => 'Rifugio Torino',
	'website' => 'http://www.rifugiotorino.com',
	'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.3482617149216!2d6.93115667489306!3d45.844328907997635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47894620260c91f5%3A0x575a1f5f43eb0118!2sRifugio%20Torino!5e0!3m2!1sfr!2sfr!4v1706893613662!5m2!1sfr!2sfr',
	'country' => 'Italie',
	'altitude' => 3375,
	'creation' => '05/08/1952',
	'photo' => 'https://www.refuges-montagne.fr/images/torino-00.jpg',
];

$refuge_miage = [
    'name' => 'Refuge de Miage',
    'website' => 'http://www.refugedemiage.com',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.6221656026837!2d6.749276514337251!3d45.7960364791041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a6f019c784dbd%3A0x13a6e9c9d2c1a9c7!2sRefuge%20de%20Miage!5e0!3m2!1sfr!2sfr!4v1706894223212!5m2!1sfr!2sfr',
    'country' => 'France',
    'altitude' => 1559,
    'creation' => '12/07/1926',
    'photo' => 'https://static.savoie-mont-blanc.com/wp-content/uploads/external/c1538d3da70adb00968d04f4d202ab53-14655897-1745x1163.jpg',
];

$refuge_elena = [
    'name' => 'Refuge Elena',
    'website' => 'http://www.refugeelena.it',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.0179788458536!2d7.032505114332766!3d45.86818057910588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47846f41c8c0a987%3A0xe5084ea5e162b1e9!2sRefuge%20Elena!5e0!3m2!1sfr!2sfr!4v1706894681925!5m2!1sfr!2sfr',
    'country' => 'Italy',
    'altitude' => 2062,
    'creation' => '18/09/1949',
    'photo' => 'https://www.autourdumontblanc.com/asset/img/rifugio_elena_1-1_cit.jpg',
];

$refuge_leschaux = [
    'name' => 'Refuge Leschaux',
    'website' => 'http://www.refuge-leschaux.com',
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.9338579601347!2d6.828822514336824!3d45.77290007910691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a656a4b39d10d%3A0xb0e8483837b3aa60!2sRefuge%20Leschaux!5e0!3m2!1sfr!2sfr!4v1706895360144!5m2!1sfr!2sfr',
    'country' => 'France',
    'altitude' => 2431,
    'creation' => '21/06/1920',
    'photo' => 'https://static.savoie-mont-blanc.com/wp-content/uploads/external/39e991fadb10385ec5d4fa8b19404f8d-653069-1745x1163.jpg',
];


// ALL REFUGES
$refuges_data = [$refuge_argentiere, $refuge_torino, $refuge_miage, $refuge_elena, $refuge_leschaux];

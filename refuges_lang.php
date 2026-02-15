<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();


// Récupération de la langue (par défaut "FR")
$lang = $_GET['lang'] ?? 'fr';


// Distribution des data par langue + trad
if ($lang == 'fr') {
    include('include/data1-refuges.php');
    $titre = 'Refuges du TMB';
    $card_titre = 'Détails';
    $aside_titre = 'Liste des refuges';
    $altitude_data = 'Altitude';
    $pays_data = 'Pays';
    $creation_data = 'Création';
    $age_data = 'ans';
    $actif_data = 'Nombre d\'année d\'activité';
    $capacite_data = 'Capacité';
    $website_link_data = 'Visiter leur site';
} else {
    include('include/data1-refuges-en.php');
    $titre = 'TMB refuges';
    $card_titre = 'Details';
    $aside_titre = 'List of all refuges';
    $altitude_data = 'Altitude';
    $pays_data = 'Country';
    $creation_data = 'Creation date';
    $age_data = 'years';
    $actif_data = 'Active since';
    $capacite_data = 'Capacity';
    $website_link_data = 'Visit their website';
}


// Lancement du moteur Twig :
// $twig->render($modele-de-page, $tableau-de-variables)
//
// Le premier paramètre est le nom du modèle de page (le fichier Twig) à utiliser
//
// Le second paramètre est un tableau contenant les variables envoyées au modèle Twig
// Chaque ligne indique 'nom-variable-twig' => valeur-variable-twig
echo $twig->render('refuges_lang.twig', [
	'title_page' => $titre,
    'card_titre' => $card_titre,
    'title_aside' => $aside_titre,
    'altitude' => $altitude_data,
    'pays' => $pays_data,
    'creation' => $creation_data,
    'age' => $age_data,
    'actif' => $actif_data,
    'capacite' => $capacite_data,
    'website_link' => $website_link_data,
	'all_refuges' => $refuges_data,
	'lang' => $lang,
]);

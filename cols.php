<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data2-cols.php');

// Lancement du moteur Twig :
// $twig->render($modele-de-page, $tableau-de-variables)
//
// Le premier paramètre est le nom du modèle de page (le fichier Twig) à utiliser
//
// Le second paramètre est un tableau contenant les variables envoyées au modèle Twig
// Chaque ligne indique 'nom-variable-twig' => valeur-variable-twig
echo $twig->render('cols.twig', [
	'titre' => 'Page des cols',
]);

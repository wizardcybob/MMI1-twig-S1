<?php

// Pour un affichage TWIG des données du formulaire (plus simple que la page contact_simple ou contact qui comprend formulaire + affichage des données)


include('include/twig.php');
$twig = init_twig();

echo $twig->render('reception.twig', [ 
    'data_form' => $_POST
]);
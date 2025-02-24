<?php
    // EXEMPLE POUR UNE PAGE CONTACT FORMULAIRE & AFFICHAGE DES DONNEES PLUS SIMPLE
    include('include/twig.php');
    $twig = init_twig();


    echo $twig->render('contact_simple.twig', [
        'title_page' => 'Contact',
        'titre' => 'Page contact',
        'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'data_formulaire_simple' => $_GET,
    ]);


?>
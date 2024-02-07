<?php
// Exemple des données pour les tests

// Un tableau associatif
$genepi = [
    'id' => 1,
    'name' => 'Génépi Jaune',
    'description' => 'Le génépi jaune est une plante vivace aromatique de petite taille, 5 à 20 cm, au feuillage grisâtre et laineux, ce qui le protège du froid comme des U.V. d\'altitude. Ses fleurs jaunâtres sont minuscules et apparaissent pendant l\'été. Ce sont les hampes florales qui constituent les fameux « brins » de génépi.',
    'photo' => './images/plantes/genepi.png',
    'categories' => ['aromatique', 'alpine'],
];

$edelweiss = [
    'id' => 2,
    'name' => 'Edelweiss',
    'description' => 'Symbole des montagnes alpines, l\'edelweiss est une plante aux fleurs blanches velues, souvent associée à la pureté.',
    'photo' => './images/plantes/edelweiss.jpg',
    'categories' => ['emblématique', 'alpine'],
];

$arnica = [
    'id' => 3,
    'name' => 'Arnica des Montagnes',
    'description' => 'Reconnue pour ses propriétés anti-inflammatoires, l\'arnica des montagnes est identifiable par ses grandes fleurs jaunes.',
    'photo' => './images/plantes/arnica-montana.jpg',
    'categories' => ['médicinale', 'alpine'],
];

$gentiane = [
    'id' => 4,
    'name' => 'Gentiane Jaune',
    'description' => 'La gentiane jaune est une plante vivace aux fleurs jaunes vives, utilisée à la fois pour les liqueurs apéritives et ses vertus médicinales.',
    'photo' => './images/plantes/gentiane.jpg',
    'categories' => ['aromatique', 'médicinale'],
];

$monkshood = [
    'id' => 5,
    'name' => 'Capuchon de Moine',
    'description' => 'Le capuchon de moine, ou aconit, est une plante toxique aux fleurs bleu intense. Elle est souvent présente dans les régions alpines.',
    'photo' => './images/plantes/monkshood.jpg',
    'categories' => ['toxique', 'alpine'],
];

$bluebell = [
    'id' => 6,
    'name' => 'Campanule',
    'description' => 'La campanule, ou bluebell, est une plante à clochettes souvent bleues ou violettes. Elle égaye les prairies alpines de ses couleurs vives.',
    'photo' => './images/plantes/bluebell.jpg',
    'categories' => ['colorée', 'alpine'],
];

$mountain_pine = [
    'id' => 7,
    'name' => 'Pin à Crochets',
    'description' => 'Le pin à crochets est un arbre adapté aux conditions alpines. Ses aiguilles courbées lui donnent un aspect caractéristique.',
    'photo' => './images/plantes/pin.jpg',
    'categories' => ['arbre', 'alpine'],
];

$saxifrage = [
    'id' => 8,
    'name' => 'Saxifrage',
    'description' => 'Les saxifrages sont des plantes résistantes qui colonisent les éboulis de montagne. Leur feuillage forme souvent des rosettes.',
    'photo' => './images/plantes/saxifrage.jpg',
    'categories' => ['résistante', 'alpine'],
];

$aster = [
    'id' => 9,
    'name' => 'Aster des Alpes',
    'description' => 'L\'aster des Alpes est une plante à fleurs caractéristique des régions alpines. Ses pétales délicats illuminent les prairies.',
    'photo' => './images/plantes/aster.jpg',
    'categories' => ['floral', 'alpine'],
];

$heather = [
    'id' => 10,
    'name' => 'Bruyère',
    'description' => 'La bruyère est une plante commune en montagne. Elle forme des coussinets denses et fleurit avec des petites fleurs roses ou violettes.',
    'photo' => './images/plantes/heather.jpg',
    'categories' => ['alpine'],
];

// ALL PLANTS
$plantes_data = [$genepi, $edelweiss, $arnica, $gentiane, $monkshood, $bluebell, $mountain_pine, $saxifrage, $aster, $heather];

<?php

include('include/twig.php');
$twig = init_twig();


$lang = $_GET['lang'] ?? 'fr'; 

if ($lang == 'fr') {
    include('include/data-fr.php');
    $titre = 'Red Bull | Evenement';
    $nom = 'Les évenements de Red Bull.';
    $info1 = 'Red Bull boissons';
    $info2 = 'Information sur l\'équipe';
    $info3 = 'Red Bull événements';
    $titre1 = 'Sites boissons : ';
    $titre2 = 'Sites sponsorts : ';
    $titre3 = 'Sites événements : ';
    $titre4 = 'Réseaux sociaux : ';
} else {
    include('include/data-en.php');
    $titre = 'Red Bull | Events';
    $nom = 'Red Bull events.';
    $info1 = 'Red Bull drinks';
    $info2 = 'Team information';
    $info3 = 'Red Bull events';
    $titre1 = 'Drink sites :';
    $titre2 = 'Sponsor sites :';
    $titre3 = 'Events site : ';
    $titre4 = 'Social media :';
}

echo $twig->render('categorie3.twig', [
    'titre' => $titre,
    'nom' => $nom,
    'events' => $event,
    'sponsoring' => $sponso,
    'boissons' => $boisson,
    'reseau' => $reseau,
    'menu' => $menu,
    'page' => $page,
    'lang' => $lang,
    'info1' => $info1,
    'info2' => $info2,
    'info3' => $info3,
    'titre1' => $titre1,
    'titre2' => $titre2,
    'titre3' => $titre3,
    'titre4' => $titre4,
]);

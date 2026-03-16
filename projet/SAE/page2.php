<?php 

include('include/twig.php');
$twig = init_twig();

$lang = $_GET['lang'] ?? 'fr';

if ($lang == 'fr') {
    include('include/data-fr.php');
    $titre = 'Red Bull | Sponsors';
    $nom = 'Les principaux sponsorts.';
} else {
    include('include/data-en.php');
    $titre = 'Red Bull | Sponsors';
    $nom = 'Main sponsors.';
}

echo $twig->render('categorie2.twig', [
    'titre' => $titre,
    'nom' => $nom,
    'sponsoring' => $sponso,
    'menu' => $menu,
    'page' => $page,
    'lang' => $lang,
]);


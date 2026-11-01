<?php 

include('include/twig.php');
$twig = init_twig();

$lang = $_GET['lang'] ?? 'fr';

if ($lang == 'fr') {
    include('include/data-fr.php');
    $titre = 'Red Bull | A propos';
    $nom = 'A propos de Red bull : ';
    $bouton = 'Conditions Générales d\'Utilisations :';
} else {
    include('include/data-en.php');
    $titre = 'Red Bull | About';
    $nom = 'About Red Bull : ';
    $bouton = 'Terms of Use :';
}

echo $twig->render('propos.twig', [
    'titre' => $titre,
    'menu' => $menu,
    'cgu' => $cgu,
    'page' => $page,
    'nom' => $nom,
    'paragraphe' => $para,
    'bouton' => $bouton,
    'lang' => $lang,
]);
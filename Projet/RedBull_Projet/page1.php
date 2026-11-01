<?php 

include('include/twig.php');
$twig = init_twig();

$lang = $_GET['lang'] ?? 'fr';

if ($lang == 'fr') {
    include('include/data-fr.php');
    $nom = 'Les boissons énergisantes.';
    $titre = 'Red Bull | Boissons';
} else {
    include('include/data-en.php');
    $nom = 'Energy drinks.';
    $titre = 'Red Bull | Drinks';
}

    echo $twig->render('categorie1.twig', [
        'titre' => $titre,
        'nom' => $nom,
        'boissons' => $boisson,
        'menu' => $menu,
        'page' => $page,
        'lang' => $lang,
    ]); 
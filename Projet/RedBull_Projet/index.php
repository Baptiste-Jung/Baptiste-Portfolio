<?php

include('include/twig.php');
$twig = init_twig();

$lang = $_GET['lang'] ?? 'fr'; 

if ($lang == 'fr') {
    include('include/data-fr.php');
    $titre = 'Red Bull | Accueil';
    $nom = 'Histoire de Red Bull';
    $titre2 = 'Contenu du site :';
    $image = 'images/baniere.jpg';
    $texte = 'Red Bull est une entreprise autrichienne fondée en 1984 fonde par l’Autrichien Dietrich Mateschitz,
                célèbre pour sa boisson énergisante. Elle se distingue par ses boissons, ces événements et les
                différentes structures qu\'ils sponsorisent.
                Red Bull se distingue des autres marques de boissons par un marketing innovant basé sur l’expérience
                plutôt que sur la publicité classique. Red Bull associe son image aux sports extrêmes, et
                aux événements spectaculaires, comme le Red Bull Rampage. Elle sponsorise des athlètes, crée ses propres
                compétitions et médias.';
} else {
    include('include/data-en.php');
    $titre = 'Red Bull | Home';
    $nom = 'History of Red Bull';
    $titre2 = 'Website content:';
    $image = 'images/baniere-en.jpg';
    $texte = 'Red Bull is an Austrian company founded in 1984 by the Austrian Dietrich Mateschitz, 
                famous for its energy drink. It stands out through its beverages, its events, and the 
                various organizations it sponsors. Red Bull differentiates itself from other beverage 
                brands with innovative marketing based on experience rather than traditional advertising. 
                Red Bull associates its image with extreme sports and spectacular events, such as the Red Bull 
                Rampage. It sponsors athletes, creates its own competitions, and produces its own media.';
    
}

echo $twig->render('base.twig', [
    'image' => $image,
    'titre' => $titre,
    'nom' => $nom,
    'acceuil' => $acceuil,
    'menu' => $menu,
    'page' => $page,
    'titre2' => $titre2,
    'texte' => $texte,
    'lang' => $lang,
]);

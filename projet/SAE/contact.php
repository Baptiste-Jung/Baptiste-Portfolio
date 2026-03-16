<?php 

include('include/twig.php');
$twig = init_twig();

$lang = $_GET['lang'] ?? 'fr';

if ($lang == 'fr') {
    include('include/data-fr.php');
    $nom = 'Nous contacter :';
    $titre = 'Red Bull | Contact';
    $nomuser = 'Nom : ';
    $prenomuser = 'Prénom : ';
    $mailuser = 'Email :';
    $select = 'Sélectionnez une page pour ajouter une remarque :';
    $choix = '-- Choisir une option --';
    $choix1 = 'Page Boisson.';
    $choix2 = 'Page Sponsort.';
    $choix3 = 'Page Evenement.';
    $choix4 = 'Autre...';
    $mess = 'Message :';
    $send = 'Envoyer le message';
} else {
    include('include/data-en.php');
    $nom = 'Contact us:';
    $titre = 'Red Bull | Contact';
    $nomuser = 'Name :';
    $prenomuser = 'First name :';
    $mailuser = 'Email :';
    $select = 'Select a page to add a comment :';
    $choix = '-- Choose an option --';
    $choix1 = 'Drinks Page';
    $choix2 = 'Sponsors Page';
    $choix3 = 'Events Page';
    $choix4 = 'Other...';
    $mess = 'Message :';
    $send = 'Send Message';
}

echo $twig->render('contact.twig', [
    'titre' => $titre,
    'menu' => $menu,
    'page' => $page,
    'nom' => $nom,
    'NomUser' => $nomuser,
    'PrenomUser' => $prenomuser,
    'mailUser' => $mailuser,
    'Selection' => $select,
    'choix' => $choix,
    'choix1' => $choix1,
    'choix2' => $choix2,
    'choix3' => $choix3,
    'choix4' => $choix4,
    'message' => $mess,
    'send' => $send,
    'lang' => $lang,
]);
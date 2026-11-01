<?php

include('include/twig.php');
$twig = init_twig();

include('include/config.php');

$nom = 'Erreur';

echo $twig->render('404.twig', [
      'nom' => $nom
]);
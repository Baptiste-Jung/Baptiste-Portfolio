<?php

include('include/twig.php');
$twig = init_twig();

include('include/config.php');

$sql = 'SELECT * FROM sentiers
        INNER JOIN categories ON categories.id_categorie = sentiers.id_categorie
        INNER JOIN difficulte ON difficulte.id_difficulte = sentiers.id_difficulte
        WHERE sentiers.id_categorie = 1
        LIMIT 4';

$query = $pdo->prepare($sql);
$query->execute();
$tableau_sentiers = $query->fetchAll(PDO::FETCH_ASSOC);

$sql2 = 'SELECT * FROM sentiers
        INNER JOIN categories ON categories.id_categorie = sentiers.id_categorie
        INNER JOIN difficulte ON difficulte.id_difficulte = sentiers.id_difficulte
        WHERE sentiers.id_categorie = 2
        LIMIT 4';

$query2 = $pdo->prepare($sql2);
$query2->execute();
$tableau_trek = $query2->fetchAll(PDO::FETCH_ASSOC);

$nom = 'Accueil';

echo $twig->render('base.twig', [
  'tableau_trek' => $tableau_trek,
  'tableau_sentiers' => $tableau_sentiers,
  'nom' => $nom
]);
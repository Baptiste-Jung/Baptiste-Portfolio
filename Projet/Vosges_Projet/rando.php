<?php

include('include/twig.php');
$twig = init_twig();

include('include/config.php');

$sql = 'SELECT * FROM sentiers
        INNER JOIN categories ON categories.id_categorie = sentiers.id_categorie
        INNER JOIN difficulte ON difficulte.id_difficulte = sentiers.id_difficulte
        WHERE sentiers.id_categorie = 1
        ORDER BY km DESC';

$query = $pdo->prepare($sql);
$query->execute();
$tableau_rando = $query->fetchAll(PDO::FETCH_ASSOC);

$nom = 'Randonnées';

echo $twig->render('rando.twig', [
    'tableau_rando' => $tableau_rando,
    'nom' => $nom
]);
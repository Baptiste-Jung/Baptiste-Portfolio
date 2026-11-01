<?php

include('include/twig.php');    
$twig = init_twig();

include('include/config.php');

$id = (int)$_GET['id'];

$sql = 'SELECT * FROM avis
        WHERE id_avis = :id';

$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);
$tableau_detail = $query->fetch(PDO::FETCH_ASSOC);

$sql2 = 'DELETE FROM avis
        WHERE id_avis = :id';

$query2 = $pdo->prepare($sql2);
$query2->execute(['id' => $id]);

$nom = 'Supprimer';

echo $twig->render('delete.twig', [
    'nom' => $nom
]);
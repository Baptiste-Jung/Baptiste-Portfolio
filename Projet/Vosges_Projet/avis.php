<?php

include('include/twig.php');
$twig = init_twig();

include('include/config.php');

$pseudo = htmlspecialchars(strip_tags($_POST['pseudo'] ?? ''));
$sentiers = htmlspecialchars(strip_tags($_POST['sentiers'] ?? ''));
$note = htmlspecialchars(strip_tags($_POST['note'] ?? ''));
$message = htmlspecialchars(strip_tags($_POST['message'] ?? ''));

if (!empty($note) && !empty($message)) {
  $sql_insert = 'INSERT INTO avis (pseudo, note, message, id_sentiers) VALUES (:pseudo, :note, :message, :sentiers)';
  $query_insert = $pdo->prepare($sql_insert);
  $query_insert->bindParam(':pseudo', $pseudo);
  $query_insert->bindParam(':note', $note);
  $query_insert->bindParam(':message', $message);
  $query_insert->bindParam(':sentiers', $sentiers);
  $query_insert->execute();

    header('Location: avis.php');
    exit();

}

$sql = 'SELECT * FROM avis
        INNER JOIN sentiers ON avis.id_sentiers = sentiers.id_sentier
        ORDER BY DatePublication DESC';

$query = $pdo->prepare($sql);
$query->execute();
$tableau_avis = $query->fetchAll(PDO::FETCH_ASSOC);

$sql2 = 'SELECT * FROM sentiers';

$query2 = $pdo->prepare($sql2);
$query2->execute();
$tableau_sentiers = $query2->fetchAll(PDO::FETCH_ASSOC);

$nom = 'Avis';

$sql3 = 'SELECT COUNT(*) as nombre_avis, ROUND(AVG(note), 1) as moyenne_note FROM avis';
$query3 = $pdo->prepare($sql3);
$query3->execute();
$stats = $query3->fetch(PDO::FETCH_ASSOC);

echo $twig->render('avis.twig', [
  'tableau_avis' => $tableau_avis,
  'tableau_sentiers' => $tableau_sentiers,
  'stats' => $stats,
  'nom' => $nom
]);
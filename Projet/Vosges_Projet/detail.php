<?php
// Prompt ia 
// Je suis actuellement entrain de coder un projet en php et sql, j'essaye de recuperer une seule ligne d'une table, 
// j'utilise donc un WHERE id_sentier = $id, avec $id qui est une variable qui recupere l'id present dans l'url. 
// Mais cela me fait une erreur, apparament la variable $id n'est pas reconu peut tu dans un premier temps m'expliquer 
// pourquoi j'obtien cette erreur, puis dans un second temps me guider pour que je puisse corriger cette erreur

include('include/twig.php');    
$twig = init_twig();

include('include/config.php');

$id = (int)$_GET['id'];

$sql = 'SELECT * FROM sentiers
        INNER JOIN categories ON categories.id_categorie = sentiers.id_categorie
        INNER JOIN difficulte ON difficulte.id_difficulte = sentiers.id_difficulte
        WHERE id_sentier = :id';

$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);
$tableau_detail = $query->fetch(PDO::FETCH_ASSOC);

$nom = 'Detail';

echo $twig->render('detail.twig', [
    'tableau_detail' => $tableau_detail,
    'nom' => $nom
]);


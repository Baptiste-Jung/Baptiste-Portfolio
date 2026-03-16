<?php 

// BOISSON


$blanche = [
    'id' => 'white',
    'image' => 'images/blanche.webp',
    'alt' => 'image de la red bull blanche',  
    'Nom' => 'The white Edition',
    'Gout' => 'Coco-açaï',
    'titre1' => 'Tailles disponnibles :',
    'taille_disponible' => [
        'taille1' => '250 ml',
    ],
    'titre2' => 'Ingrédients :',
    'Composition' => [
        'caféine' => '80 mg par canette',
        'energie' => '112 Kcal par canette',
        'glucide' => '27 g par canette',
        'taurine' => '1 g par canette',
    ],
    'mot' => 'Prix',
    'prix' => '1.45 euros',
    'date' => 'Elle a été créée en 2019',
    'source' => 'https://www.redbull.com/fr-fr/energydrink/products/red-bull-white-edition',
];


$winter = [
    'id' => 'winter',
    'image' => 'images/winter.webp',
    'alt' => 'image de la red bull edition winter',
    'Nom' => 'The Winter Edition',
    'Gout' => 'Pomme Fuji et gingembre',
    'titre1' => 'Tailles disponnibles :',
    'taille_disponible' => [
        'taille1' => '250 ml',
    ],
    'titre2' => 'Ingrédients :',
    'Composition' => [
        'caféine' => '80 mg par canette',
        'energie' => '112 Kcal par canette',
        'glucide' => '27 g par canette',
        'taurine' => '1 g par canette',
    ],
    'mot' => 'Prix',
    'prix' => '1.45 euros',
    'date' => 'Elle a été créée en 2025',
    'source' => 'https://www.redbull.com/fr-fr/energydrink/products/red-bull-winter-edition',
];

$classique = [
    'id' => 'original',
    'image' => 'images/original.webp',
    'alt' => 'image de la red bull classique',
    'Nom' => 'The Red Bull Original',
    'Gout' => 'Sucré - citronné',
    'titre1' => 'Tailles disponnibles :',
    'taille_disponible' => [
        'taille1' => '250 ml',
        'taille2' => '355 ml',
        'taille3' => '473 ml',
    ],
    'titre2' => 'Ingrédients :',
    'Composition' => [
        'caféine' => '80 mg par canette',
        'energie' => '112 Kcal par canette',
        'glucide' => '27 g par canette',
        'taurine' => '1 g par canette',
    ],
    'mot' => 'Prix',
    'prix' => '1.15 euros',
    'date' => 'Elle a été créée en 1987',
    'source' => 'https://www.redbull.com/fr-fr/energydrink/products/red-bull-energy-drink',
];

$zero = [
    'id' => 'zero',
    'image' => 'images/zero.webp',
    'alt' => 'image de la red bull zero',
    'Nom' => 'Red Bull Zero',
    'Gout' => 'Sucré - citronné',
    'titre1' => 'Tailles disponnibles :',
    'taille_disponible' => [
        'taille1' => '250 ml',
    ],
    'titre2' => 'Ingrédients :',
    'Composition' => [
        'caféine' => '80 mg par canette',
        'energie' => '5 Kcal par canette',
        'glucide' => '0 g par canette',
        'taurine' => '1 g par canette',
    ],
    'mot' => 'Prix',
    'prix' => '1.29 euros',
    'date' => 'Elle a été créée en 2025',
    'source' => 'https://www.redbull.com/fr-fr/energydrink/products/red-bull-zero',
];

$red = [
    'id' => 'red',
    'image' => 'images/red.webp',
    'alt' => 'image de la red bull edition red',
    'Nom' => 'The Red Edition',
    'Gout' => 'Pastèque',
    'titre1' => 'Tailles disponnibles :',
    'taille_disponible' => [
        'taille1' => '250 ml',
    ],
    'titre2' => 'Ingrédients :',
    'Composition' => [
        'caféine' => '80 mg par canette',
        'energie' => '112 Kcal par canette',
        'glucide' => '27 g par canette',
        'taurine' => '1 g par canette',
    ],
    'mot' => 'Prix',
    'prix' => '1.45 euros',
    'date' => 'Elle a été créée en 2020',
    'source' => 'https://www.redbull.com/fr-fr/energydrink/products/red-bull-red-edition',
];

$orange = [
    'id' => 'orange',
    'image' => 'images/orange.webp',
    'alt' => 'image de la red bull edition orange',
    'Nom' => 'The Apricot Edition',
    'Gout' => 'Abricot-fraise',
    'titre1' => 'Tailles disponnibles :',
    'taille_disponible' => [
        'taille1' => '250 ml',
    ],
    'titre2' => 'Ingrédients :',
    'Composition' => [
        'caféine' => '80 mg par canette',
        'energie' => '112 Kcal par canette',
        'glucide' => '27 g par canette',
        'taurine' => '1 g par canette',
    ],
    'mot' => 'Prix',
    'prix' => '1.55 euros',
    'date' => 'Elle a été créée en 2022',
    'source' => 'https://www.redbull.com/fr-fr/energydrink/products/red-bull-apricot-edition',
];

$boisson = [
    $blanche,
    $winter,
    $classique,
    $zero,
    $red,
    $orange,
];

// EVENEMENT


$rampage = [
    'id' => 'rampage',
    'image' => 'images/rampage.png',
    'alt' => 'image du logo de rampage',
    'type' => 'VTT freeride',
    'créée' => 'Cet événements est créé pour la première fois en 2001',
    'date' => 'La dernière édition de cet événement était du 17 au 19 octobre 2025',
    'lieu' => 'Il s\'est déroulé à Utah au États-Unis',
    'titre1' => 'Nombre de participant :',
    'participant' => [
        'masculin' => '18',
        'feminin' => '12',
    ],
    'titre2' => 'Nombre de spectateur :',
    'spectateur' => [
        'sur place' => '3000',
        'auditeur' => 'environt 90 000',
    ],
    'titre3' => 'Top 3 des femmes :',
    'top_femme' => [
        '1' => 'Robin Goomes',
        '2' => 'Hannah Bergemann',
        '3' => 'Georgia Astle',
    ],
    'titre4' => 'Top 3 des hommes :',
    'top_homme' => [
        '1' => 'Hayden Zablotny',
        '2' => 'Thomas Genon',
        '3' => 'Tom Van Steenbergen',
    ],
    'source' => 'https://www.redbull.com/fr-fr/events/red-bull-rampage',
];

$unrailistic = [
    'id' => 'unrailistic',
    'image' => 'images/unrailistic.avif',
    'alt' => 'image du logo de unrailistic',
    'type' => 'Ski freeride sur piste',
    'créée' => 'Cet événements est créé pour la première fois en 2023',
    'date' => 'La dernière édition de cet événement était du 25 au 27 avril 2024',
    'lieu' => 'Il s\'est déroulé à Are en Suède',
    'titre1' => 'Nombre de participant :',
    'participant' => [
        'masculin' => '20',
        'feminin' => '10',
    ],
    'titre2' => 'Nombre de spectateur :',
    'spectateur' => [
        'sur place' => '2000',
        'tele' => 'environt 100 000',
    ],
    'titre3' => 'Top 3 des femmes :',
    'top_femme' => [
        '1' => 'Johanne Killi',
        '2' => 'Lisa Zimmermann',
        '3' => 'Jennie-Lee Burmansson',
    ],
    'titre4' => 'Top 3 des hommes :',
    'top_homme' => [
        '1' => 'Andreas Hatveit',
        '2' => 'Matej Svancer',
        '3' => 'Jesper Tjader',
    ],
    'source' => 'https://www.redbull.com/fr-fr/events/red-bull-unrailistic',
];

$ocean = [
    'id' => 'ocean',
    'image' => 'images/ocean.avif',
    'alt' => 'image du logo de ocean rescue',
    'type' => 'Sauvetage en mer',
    'créée' => 'Cet événements est créé pour la première fois en 2013',
    'date' => 'La dernière édition de cet événement était du 15 au 16 novembre 2025',
    'lieu' => 'Il s\'est déroulé à Biarritz en France',
    'titre1' => 'Nombre de participant :',
    'participant' => [
        'masculin' => '30',
        'feminin' => '20',
    ],
    'titre2' => 'Nombre de spectateur :',
    'spectateur' => [
        'sur place' => '4000',
        'tele' => 'environt 50 000',
    ],
    'titre3' => 'Top 3 des femmes :',
    'top_femme' => [
        '1' => 'Kelsey Cummings',
        '2' => 'Leana Liddane',
        '3' => 'Nova Goyet',
    ],
    'titre4' => 'Top 3 des hommes :',
    'top_homme' => [
        '1' => 'Bob Whittaker',
        '2' => 'Santxo Etcheverry',
        '3' => 'Alan Le Gall',
    ],
    'source' => 'https://www.redbull.com/fr-fr/events/red-bull-ocean-rescue',
];

$motion = [
    'id' => 'motion',
    'image' => 'images/motion.avif',
    'alt' => 'image du logo de motion redbull',
    'type' => 'Compétion de Parkour',
    'créée' => 'Cet événements est créé pour la première fois en 2007',
    'date' => 'La dernière édition de cet événement était du 10 et 11 juillet 2021',
    'lieu' => 'Il s\'est déroulé à Piraeus en Grèce',
    'titre1' => 'Nombre de participant :',
    'participant' => [
        'masculin' => '20',
        'feminin' => '8',
    ],
    'titre2' => 'Nombre de spectateur :',
    'spectateur' => [
        'sur place' => '3000',
        'tele' => 'environt 100 000',
    ],
    'titre3' => 'Top 3 des femmes :',
    'top_femme' => [
        '1' => 'Noa Diorgina',
        '2' => 'Lilou Ruel',
        '3' => 'Elise Bickley',
    ],
    'titre4' => 'Top 3 des hommes :',
    'top_homme' => [
        '1' => 'Krystian Kowalewski',
        '2' => 'Edward Scott',
        '3' => 'Archie Aroyan',
    ],
    'source' => 'https://www.redbull.com/fr-fr/event-series/red-bull-art-of-motion',
];

$diving = [
    'id' => 'diving',
    'image' => 'images/diving.avif',
    'alt' => 'image du logo de redbull diving',
    'type' => 'Plongeon de hauteur',
    'créée' => 'Cet événements est créé pour la première fois en 2024',
    'date' => 'La dernière édition de cet événement était le 25 août 2024',
    'lieu' => 'Il s\'est déroulé à Montreal au Canada',
    'titre1' => 'Nombre de participant :',
    'participant' => [
        'masculin' => '12',
        'feminin' => '12',
    ],
    'titre2' => 'Nombre de spectateur :',
    'spectateur' => [
        'sur place' => '25 000',
        'tele' => 'environt 100 000',
    ],
    'titre3' => 'Top 3 des femmes :',
    'top_femme' => [
        '1' => 'Molly Carlson',
        '2' => 'Simone Leathead',
        '3' => 'Aimee Harrison',
    ],
    'titre4' => 'Top 3 des hommes :',
    'top_homme' => [
        '1' => 'Aidan Heslop',
        '2' => 'Constantin Popovici',
        '3' => 'Yolotl Martinez',
    ],
    'source' => 'https://www.redbull.com/int-en/event-series/red-bull-cliff-diving',
];

$event = [
    $rampage,
    $unrailistic,
    $ocean,
    $motion,        
    $diving,
];


// SPONSORING

$F1 = [
    'id' => 'f1',
    'image' => 'images/F1.avif',
    'alt' => 'La F1 Red Bull',
    'sponsorise' => 'Une écurie de Formule 1',
    'Nom' => 'Oracle RedBull Racing',
    'apparition' => 'Première apparition en 2005',
    'titre' => 'Cette équipe a gagnée 6 titres constructeurs',
    'PasTitre' => 'Cette équipe n\'a gagnée aucun titre',
    'titre1' => 'Les atlèthes de l\'équipe :',
    'sportif' => [
        '1er' => 'Max Verstappen', 
        '2eme' => 'Isack Hadjar',
        'reserve' => 'Yuki Tsunoda',
    ],
    'titre2' => 'Les autres sponsorts de l\'équipe :',
    'autre' => [
        'sponsort tire' => 'Oracle',
        '2eme sponsort' => 'Mobil 1',
        '3eme sponsort' => 'TAG Heuer',
    ],
    'source' => 'https://www.redbull.com/fr-fr/tags/f1',
];

$MotoGP = [
    'id' => 'moto',
    'image' => 'images/motogp.png',
    'alt' => 'La Moto KTM',
    'sponsorise' => 'Sponsort titre de l\'écurie KTM',
    'Nom' => 'Red Bull KTM Factory Racing',
    'apparition' => 'Première apparition en 2017',
    'titre' => '',
    'PasTitre' => 'Cette équipe n\'a gagnée aucun titre',
    'titre1' => 'Les atlèthes de l\'équipe :',
    'sportif' => [
        '1er' => 'Brad Binder', 
        '2eme' => 'Miguel Oliveira', 
        'reserve' => 'Pedro Acosta',
    ],
    'titre2' => 'Les autres sponsorts de l\'équipe :',
    'autre' => [
        'sponsort tire' => 'Mobil 1',
        '2eme sponsort' => 'Michelin',
        '3eme sponsort' => 'Motorex',
    ],
    'source' => 'https://www.redbull.com/int-en/teams/red-bull-ktm-factory-racing',
];

$foot = [
    'id' => 'foot',
    'image' => 'images/logoFoot.png',
    'alt' => 'Club RB leipzig Football Club',
    'sponsorise' => 'un club de football',
    'Nom' => 'RB Leipzig',
    'apparition' => 'Première apparition en 2009',
    'titre' => 'Cette équipe a gagnée la coupe d\'Allemagne',
    'PasTitre' => 'Cette équipe n\'a gagnée aucun titre',
    'titre1' => 'Les atlèthes de l\'équipe :',
    'sportif' => [
        '1er' => 'Xavi Simons', 
        '2eme' => 'Loïs Openda', 
        'reserve' => 'Benjamin Henrichs',
    ],
    'titre2' => 'Les autres sponsorts de l\'équipe :',
    'autre' => [
        'sponsort tire' => 'BMW',
        '2eme sponsort' => 'AlphaTauri',
        '3eme sponsort' => 'Puma',
    ],
    'source' => 'https://www.redbull.com/int-en/teams/rb-leipzig',
];

$T1 = [
    'id' => 't1',
    'image' => 'images/T1.png',
    'alt' => 'Logo de l\'équipe T1',
    'sponsorise' => 'Une équipe E-sport',
    'Nom' => 'T1 e-sport',
    'apparition' => 'Première apparition en 2019',
    'titre' => 'Cette équipe a gagnée le championat du monde League of Legends',
    'PasTitre' => 'Cette équipe n\'a gagnée aucun titre',
    'titre1' => 'Les atlèthes de l\'équipe :',
    'sportif' => [
        '1er' => 'Lee Sang-hyeok', 
        '2eme' => 'Mun Hyeon-jun', 
        'reserve' => 'Ryu Min-seok',
    ],
    'titre2' => 'Les autres sponsorts de l\'équipe :',
    'autre' => [
        'sponsort tire' => 'Spotify',
        '2eme sponsort' => 'Samsung Odyssey',
        '3eme sponsort' => 'Red Sea Global',
    ],
    'source' => 'https://www.redbull.com/fr-fr/teams/t1',
];

$hockey = [
    'id' => 'hockey',
    'image' => 'images/Hockey.png',
    'alt' => 'Logo du club de hockey',
    'sponsorise' => 'Un club de hockey',
    'Nom' => 'EHC Red Bull München',
    'apparition' => 'Première apparition en 2012',
    'titre' => 'Cette équipe a gagnée le championat de la "Deutsche Eishockey Liga"',
    'PasTitre' => 'Cette équipe n\'a gagnée aucun titre',
    'titre1' => 'Les atlèthes de l\'équipe :',
    'sportif' => [
        '1er' => 'Patrick Hager', 
        '2eme' => 'Yasin Ehliz', 
        'reserve' => 'Mathias Niederberger',
    ],
    'titre2' => 'Les autres sponsorts de l\'équipe :',
    'autre' => [
        'sponsort tire' => 'Rauch',
        '2eme sponsort' => 'Subaru',
        '3eme sponsort' => 'Adidas',
    ],
    'source' => 'https://www.redbull.com/int-en/teams/ehc-red-bull-munchen',
];

$sponso = [
    $F1,
    $MotoGP,
    $foot,
    $T1,
    $hockey,
];

//reseaux 

$insta = [
    'source' => 'https://www.instagram.com/redbull/',
    'images' => 'images/insta.png',
];
    
$yt= [
    'source' => 'https://www.youtube.com/user/redbull',
    'images' => 'images/yt.png',
];

$tiktok = [
    'source' => 'https://www.tiktok.com/@redbull',
    'images' => 'images/tiktok.png',
];

$facebook = [
    'source' => 'https://www.facebook.com/RedBull',
    'images' => 'images/face.png',
];

$x = [
    'source' => 'https://x.com/redbull',
    'images' => 'images/X.png',
];

$reseau =[
    $insta,
    $yt,
    $tiktok,
    $facebook,
    $x,
];

//Page d'acceuil

$acceuilBoisson = [
    'lien' => 'page1.php',
    'img' => 'images/boisson-cover.jpg',
    'alt' => 'image de toute les boissons',
    'titre' => 'Les Boissons',
    'sousTitre' => 'Red Bull',
];

$acceuilSponsort = [
    'lien' => 'page2.php',
    'img' => 'images/sponsors-cover.jpg',
    'alt' => 'image de la red bull',
    'titre' => 'Les Sponsors',
    'sousTitre' => 'Red Bull',
];

$acceuilEvent = [
    'lien' => 'page3.php',
    'img' => 'images/event-cover.jpg',
    'alt' => 'logo de l\'evenement ocean rescue',
    'titre' => 'Les Evenements',
    'sousTitre' => 'Red Bull',
];

$acceuil = [
    $acceuilBoisson,
    $acceuilSponsort,
    $acceuilEvent,
];


//Menu 
//statique

$base = [
    'nom' => 'index.php',
    'titre' => 'Acceuil',
];

$contact = [
    'nom' => 'contact.php',
    'titre' => 'Contact',
];

$propos = [
    'nom' => 'propos.php',
    'titre' => 'A propos',
];

$page = [
    $base,
    $propos,
    $contact,
];


//dynamique
$page1 = [
    'nom' => 'page1.php',
    'titre' => 'Les Boissons',
    'article' => [
        'White Edition' => 'page1.php#white',
        'Winter Edition' => 'page1.php#winter',
        'Original' => 'page1.php#original',
        'Zero' => 'page1.php#zero',
        'Red Edition' => 'page1.php#red',
        'Apricot Edition' => 'page1.php#orange',
    ],
];

$page2 = [
    'nom' => 'page2.php',
    'titre' => 'Les Sponsors',
    'article' => [
        'RedBull Racing' => 'page2.php#f1',
        'Red Bull KTM' => 'page2.php#moto',
        'RB Leipzig' => 'page2.php#foot',
        'T1 e-sport' => 'page2.php#t1',
        'EHC Red Bull' => 'page2.php#hockey',
    ],
];

$page3 = [
    'nom' => 'page3.php',
    'titre' => 'Les Evénements',
    'article' => [
        'VTT freeride' => 'page3.php#rampage',
        'Ski freeride' => 'page3.php#unrailistic',
        'Sauvetage en mer' => 'page3.php#ocean',
        'Compétion de parkour' => 'page3.php#motion',
        'Plongeon de hauteur' => 'page3.php#diving',
    ],
];                    
                        

$menu = [
    $page1,
    $page2,
    $page3,
];

// CGU 

$cgu1 = [
    'nom' => 'Article 1 – Définitions :',
    'texte' => 'Site : désigne le site internet.
            Utilisateur : toute personne accédant et naviguant sur le Site, à quelque titre que ce soit.
            Contenu : désigne l\'ensemble des éléments présents sur le Site (textes, images, vidéos, logos, etc.).',
];

$cgu2 = [
    'nom' => 'Article 2 – Objet :',
    'texte' => 'Les présentes CGU ont pour objet de définir les conditions dans lesquelles les utilisateurs peuvent accéder
            au site et l\'utiliser. En accédant au Site, l\'utilisateur accepte sans réserve les présentes CGU.',
];

$cgu3 = [
    'nom' => 'Article 3 – Accès au site :',
    'texte' => 'L\'accès au Site est ouvert à tout utilisateur disposant d\'une connexion Internet. Le site est accessible
            gratuitement, hors coûts de connexion et d\'abonnement à Internet. Certaines sections du site peuvent toutefois être
            réservées aux utilisateurs enregistrés.',
];

$cgu4 = [
    'nom' => 'Article 4 – Propriété intellectuelle :',
    'texte' => 'Le contenu du site (textes, images, logos, etc.) est protégé par les lois en vigueur relatives à la
            propriété intellectuelle et aux droits d\'auteur. Toute reproduction, représentation, modification, ou adaptation,
            totale ou partielle du contenu, sans l\'autorisation écrite préalable de Red Bull, est interdite et constitue une contrefaçon.',
];

$cgu5 = [
    'nom' => 'Article 5 – Données personnelles :',
    'texte' => 'Le site peut recueillir des données personnelles telles que le nom, l\'adresse e-mail, etc. Conformément à la
            réglementation en vigueur (RGPD), l\'utilisateur dispose d\'un droit d\'accès, de rectification et de
            suppression de ses données personnelles.',
];

$cgu6 = [
    'nom' => 'Article 6 – Responsabilité :',
    'texte' => 'L\'utilisation du Site se fait sous la seule responsabilité de l\'utilisateur. Red Bull ne saurait être
            tenu responsable de tout dommage direct ou indirect, y compris pertes de données ou de profit, résultant de
            l\'accès ou de l\'utilisation du Site.',
];

$cgu7 = [
    'nom' => 'Article 7 – Liens hypertextes :',
    'texte' => 'Le site peut contenir des liens vers d\'autres sites internet. Red Bull n\'exerce aucun contrôle sur le
            contenu de ces sites et ne saurait être tenu responsable de leur disponibilité ou de leur contenu.',
];

$cgu8 = [
    'nom' => 'Article 8 – Modification des CGU :',
    'texte' => 'Red Bull se réserve le droit de modifier à tout moment les présentes CGU. Les utilisateurs sont invités
            à les consulter régulièrement. Les modifications prennent effet à compter de leur publication sur le Site.',
];

$cgu9 = [
    'nom' => 'Article 9 – Loi applicable :',
    'texte' => 'Les présentes CGU sont régies par la loi française. En cas de litige, et après tentative de résolution
            amiable, les tribunaux de Strasbourg seront compétents.',
];

$cgu10 = [
    'nom' => 'Article 10 – Contact :',
    'texte' => 'Pour toute question relative aux présentes CGU, vous pouvez contacter Red Bull.',
];


$cgu =[
    $cgu1,
    $cgu2,
    $cgu3,
    $cgu4,
    $cgu5,
    $cgu6,
    $cgu7,
    $cgu8,
    $cgu9,
    $cgu10,
];

//Page de a propos

$para1 = [
    'titre' => 'Red Bull aujourd’hui :',
    'texte' => 'Aujourd\'hui, Red Bull est une entreprise internationale reconnue pour ses boissons énergisantes, mais aussi pour
        son engagement dans le sport. Elle organise et sponsorise des événements extrêmes, possède des structures
        sportives, comme des équipes comme en Formule 1. La marque incarne
        l’énergie, le dépassement de soi et la créativité.',
];

$para2 = [
    'titre' => 'Red Bull aujourd’hui :',
    'texte' => 'J’ai choisi d’utiliser le rouge (#E10600), le bleu (#002D72), le blanc (#F2F2F2) et le jaune (#FFD700) sur le
        site car ce sont les couleurs de Red Bull. Elles permettent de garder une cohérence avec l’identité visuelle de
        la marque et de rappeler immédiatement l’univers de Red Bull.',
];

$para = [
    $para1,
    $para2,
];
<?php 

// BOISSON

$blanche = [
    'id' => 'white',
    'image' => 'images/blanche.webp',
    'alt' => 'image of the white Red Bull',  
    'Nom' => 'The White Edition',
    'Gout' => 'Coconut-Açaí',
    'titre1' => 'Available sizes:',
    'taille_disponible' => [
        'taille1' => '250 ml',
    ],
    'titre2' => 'Ingredients:',
    'Composition' => [
        'caffeine' => '80 mg per can',
        'energy' => '112 Kcal per can',
        'carbs' => '27 g per can',
        'taurine' => '1 g per can',
    ],
    'mot' => 'Price',
    'prix' => '1.45 euros',
    'date' => 'It was created in 2019',
    'source' => 'https://www.redbull.com/int-en/energydrink/products/red-bull-white-edition',
];

$winter = [
    'id' => 'winter',
    'image' => 'images/winter.webp',
    'alt' => 'image of the Red Bull Winter Edition',
    'Nom' => 'The Winter Edition',
    'Gout' => 'Fuji Apple and Ginger',
    'titre1' => 'Available sizes:',
    'taille_disponible' => [
        'taille1' => '250 ml',
    ],
    'titre2' => 'Ingredients:',
    'Composition' => [
        'caffeine' => '80 mg per can',
        'energy' => '112 Kcal per can',
        'carbs' => '27 g per can',
        'taurine' => '1 g per can',
    ],
    'mot' => 'Price',
    'prix' => '1.45 euros',
    'date' => 'It was created in 2025',
    'source' => 'https://www.redbull.com/fr-fr/energydrink/products/red-bull-winter-edition',
];

$classique = [
    'id' => 'original',
    'image' => 'images/original.webp',
    'alt' => 'image of the classic Red Bull',
    'Nom' => 'The Red Bull Original',
    'Gout' => 'Sweet - Lemon flavor',
    'titre1' => 'Available sizes:',
    'taille_disponible' => [
        'taille1' => '250 ml',
        'taille2' => '355 ml',
        'taille3' => '473 ml',
    ],
    'titre2' => 'Ingredients:',
    'Composition' => [
        'caffeine' => '80 mg per can',
        'energy' => '112 Kcal per can',
        'carbs' => '27 g per can',
        'taurine' => '1 g per can',
    ],
    'mot' => 'Price',
    'prix' => '1.15 euros',
    'date' => 'It was created in 1987',
    'source' => 'https://www.redbull.com/int-en/energydrink/products/red-bull-energy-drink',
];

$zero = [
    'id' => 'zero',
    'image' => 'images/zero.webp',
    'alt' => 'image of the Red Bull Zero',
    'Nom' => 'Red Bull Zero',
    'Gout' => 'Sweet - Lemon flavor',
    'titre1' => 'Available sizes:',
    'taille_disponible' => [
        'taille1' => '250 ml',
    ],
    'titre2' => 'Ingredients:',
    'Composition' => [
        'caffeine' => '80 mg per can',
        'energy' => '5 Kcal per can',
        'carbs' => '0 g per can',
        'taurine' => '1 g per can',
    ],
    'mot' => 'Price',
    'prix' => '1.29 euros',
    'date' => 'It was created in 2025',
    'source' => 'https://www.redbull.com/int-en/energydrink/products/red-bull-zero',
];

$red = [
    'id' => 'red',
    'image' => 'images/red.webp',
    'alt' => 'image of the Red Bull Red Edition',
    'Nom' => 'The Red Edition',
    'Gout' => 'Watermelon',
    'titre1' => 'Available sizes:',
    'taille_disponible' => [
        'taille1' => '250 ml',
    ],
    'titre2' => 'Ingredients:',
    'Composition' => [
        'caffeine' => '80 mg per can',
        'energy' => '112 Kcal per can',
        'carbs' => '27 g per can',
        'taurine' => '1 g per can',
    ],
    'mot' => 'Price',
    'prix' => '1.45 euros',
    'date' => 'It was created in 2020',
    'source' => 'https://www.redbull.com/int-en/energydrink/products/red-bull-red-edition',
];

$orange = [
    'id' => 'orange',
    'image' => 'images/orange.webp',
    'alt' => 'image of the Red Bull Apricot Edition',
    'Nom' => 'The Apricot Edition',
    'Gout' => 'Apricot-Strawberry',
    'titre1' => 'Available sizes:',
    'taille_disponible' => [
        'taille1' => '250 ml',
    ],
    'titre2' => 'Ingredients:',
    'Composition' => [
        'caffeine' => '80 mg per can',
        'energy' => '112 Kcal per can',
        'carbs' => '27 g per can',
        'taurine' => '1 g per can',
    ],
    'mot' => 'Price',
    'prix' => '1.55 euros',
    'date' => 'It was created in 2022',
    'source' => 'https://www.redbull.com/int-en/energydrink/products/red-bull-apricot-edition',
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
    'alt' => 'rampage logo image',
    'type' => 'Freeride MTB',
    'créée' => 'This event was first created in 2001',
    'date' => 'The last edition of this event was from October 17 to 19, 2025',
    'lieu' => 'It took place in Utah, United States',
    'titre1' => 'Number of participants:',
    'participant' => [
        'male' => '18',
        'female' => '12',
    ],
    'titre2' => 'Number of spectators:',
    'spectateur' => [
        'on site' => '3000',
        'audience' => 'around 90,000',
    ],
    'titre3' => 'Top 3 women:',
    'top_femme' => [
        '1' => 'Robin Goomes',
        '2' => 'Hannah Bergemann',
        '3' => 'Georgia Astle',
    ],
    'titre4' => 'Top 3 men:',
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
    'alt' => 'unrailistic logo image',
    'type' => 'Freeride skiing on piste',
    'créée' => 'This event was first created in 2023',
    'date' => 'The last edition of this event was from April 25 to 27, 2024',
    'lieu' => 'It took place in Åre, Sweden',
    'titre1' => 'Number of participants:',
    'participant' => [
        'male' => '20',
        'female' => '10',
    ],
    'titre2' => 'Number of spectators:',
    'spectateur' => [
        'on site' => '2000',
        'tv' => 'around 100,000',
    ],
    'titre3' => 'Top 3 women:',
    'top_femme' => [
        '1' => 'Johanne Killi',
        '2' => 'Lisa Zimmermann',
        '3' => 'Jennie-Lee Burmansson',
    ],
    'titre4' => 'Top 3 men:',
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
    'alt' => 'ocean rescue logo image',
    'type' => 'Sea rescue',
    'créée' => 'This event was first created in 2013',
    'date' => 'The last edition of this event was from November 15 to 16, 2025',
    'lieu' => 'It took place in Biarritz, France',
    'titre1' => 'Number of participants:',
    'participant' => [
        'male' => '30',
        'female' => '20',
    ],
    'titre2' => 'Number of spectators:',
    'spectateur' => [
        'on site' => '4000',
        'tv' => 'around 50,000',
    ],
    'titre3' => 'Top 3 women:',
    'top_femme' => [
        '1' => 'Kelsey Cummings',
        '2' => 'Leana Liddane',
        '3' => 'Nova Goyet',
    ],
    'titre4' => 'Top 3 men:',
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
    'alt' => 'motion redbull logo image',
    'type' => 'Parkour competition',
    'créée' => 'This event was first created in 2007',
    'date' => 'The last edition of this event was July 10 and 11, 2021',
    'lieu' => 'It took place in Piraeus, Greece',
    'titre1' => 'Number of participants:',
    'participant' => [
        'male' => '20',
        'female' => '8',
    ],
    'titre2' => 'Number of spectators:',
    'spectateur' => [
        'on site' => '3000',
        'tv' => 'around 100,000',
    ],
    'titre3' => 'Top 3 women:',
    'top_femme' => [
        '1' => 'Noa Diorgina',
        '2' => 'Lilou Ruel',
        '3' => 'Elise Bickley',
    ],
    'titre4' => 'Top 3 men:',
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
    'alt' => 'redbull diving logo image',
    'type' => 'High diving',
    'créée' => 'This event was first created in 2024',
    'date' => 'The last edition of this event was August 25, 2024',
    'lieu' => 'It took place in Montreal, Canada',
    'titre1' => 'Number of participants:',
    'participant' => [
        'male' => '12',
        'female' => '12',
    ],
    'titre2' => 'Number of spectators:',
    'spectateur' => [
        'on site' => '25,000',
        'tv' => 'around 100,000',
    ],
    'titre3' => 'Top 3 women:',
    'top_femme' => [
        '1' => 'Molly Carlson',
        '2' => 'Simone Leathead',
        '3' => 'Aimee Harrison',
    ],
    'titre4' => 'Top 3 men:',
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
    'alt' => 'Red Bull F1',
    'sponsorise' => 'A Formula 1 team',
    'Nom' => 'Oracle RedBull Racing',
    'apparition' => 'First appearance in 2005',
    'titre' => 'This team won 6 Constructors\' Championships',
    'PasTitre' => 'This team won no title',
    'titre1' => 'Team athletes:',
    'sportif' => [
        '1st' => 'Max Verstappen', 
        '2nd' => 'Isack Hadjar',
        'reserve' => 'Yuki Tsunoda',
    ],
    'titre2' => 'Other team sponsors:',
    'autre' => [
        'title sponsor' => 'Oracle',
        '2nd sponsor' => 'Mobil 1',
        '3rd sponsor' => 'TAG Heuer',
    ],
    'source' => 'https://www.redbull.com/int-en/tags/f1',
];

$MotoGP = [
    'id' => 'moto',
    'image' => 'images/motogp.png',
    'alt' => 'KTM Moto',
    'sponsorise' => 'Title sponsor of the KTM team',
    'Nom' => 'Red Bull KTM Factory Racing',
    'apparition' => 'First appearance in 2017',
    'titre' => '',
    'PasTitre' => 'This team won no title',
    'titre1' => 'Team athletes:',
    'sportif' => [
        '1st' => 'Brad Binder', 
        '2nd' => 'Miguel Oliveira', 
        'reserve' => 'Pedro Acosta',
    ],
    'titre2' => 'Other team sponsors:',
    'autre' => [
        'title sponsor' => 'Mobil 1',
        '2nd sponsor' => 'Michelin',
        '3rd sponsor' => 'Motorex',
    ],
    'source' => 'https://www.redbull.com/int-en/teams/red-bull-ktm-factory-racing',
];

$foot = [
    'id' => 'foot',
    'image' => 'images/logoFoot.png',
    'alt' => 'RB Leipzig Football Club',
    'sponsorise' => 'A football club',
    'Nom' => 'RB Leipzig',
    'apparition' => 'First appearance in 2009',
    'titre' => 'This team won the German Cup',
    'PasTitre' => 'This team won no title',
    'titre1' => 'Team athletes:',
    'sportif' => [
        '1st' => 'Xavi Simons', 
        '2nd' => 'Loïs Openda', 
        'reserve' => 'Benjamin Henrichs',
    ],
    'titre2' => 'Other team sponsors:',
    'autre' => [
        'title sponsor' => 'BMW',
        '2nd sponsor' => 'AlphaTauri',
        '3rd sponsor' => 'Puma',
    ],
    'source' => 'https://www.redbull.com/int-en/teams/rb-leipzig',
];

$T1 = [
    'id' => 't1',
    'image' => 'images/T1.png',
    'alt' => 'T1 team logo',
    'sponsorise' => 'An E-sports team',
    'Nom' => 'T1 e-sport',
    'apparition' => 'First appearance in 2019',
    'titre' => 'This team won the League of Legends World Championship',
    'PasTitre' => 'This team won no title',
    'titre1' => 'Team athletes:',
    'sportif' => [
        '1st' => 'Lee Sang-hyeok', 
        '2nd' => 'Mun Hyeon-jun', 
        'reserve' => 'Ryu Min-seok',
    ],
    'titre2' => 'Other team sponsors:',
    'autre' => [
        'title sponsor' => 'Spotify',
        '2nd sponsor' => 'Samsung Odyssey',
        '3rd sponsor' => 'Red Sea Global',
    ],
    'source' => 'https://www.redbull.com/int-en/teams/t1',
];

$hockey = [
    'id' => 'hockey',
    'image' => 'images/Hockey.png',
    'alt' => 'Hockey club logo',
    'sponsorise' => 'A hockey club',
    'Nom' => 'EHC Red Bull München',
    'apparition' => 'First appearance in 2012',
    'titre' => 'This team won the championship of the "Deutsche Eishockey Liga"',
    'PasTitre' => 'This team won no title',
    'titre1' => 'Team athletes:',
    'sportif' => [
        '1st' => 'Patrick Hager', 
        '2nd' => 'Yasin Ehliz', 
        'reserve' => 'Mathias Niederberger',
    ],
    'titre2' => 'Other team sponsors:',
    'autre' => [
        'title sponsor' => 'Rauch',
        '2nd sponsor' => 'Subaru',
        '3rd sponsor' => 'Adidas',
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
    'lien' => 'page1.php?lang=en',
    'img' => 'images/boisson-cover.jpg',
    'alt' => 'image of all drinks',
    'titre' => 'Drinks',
    'sousTitre' => 'Red Bull',
];

$acceuilSponsort = [
    'lien' => 'page2.php?lang=en',
    'img' => 'images/sponsors-cover.jpg',
    'alt' => 'image of Red Bull',
    'titre' => 'Sponsors',
    'sousTitre' => 'Red Bull',
];

$acceuilEvent = [
    'lien' => 'page3.php?lang=en',
    'img' => 'images/event-cover.jpg',
    'alt' => 'logo of the Ocean Rescue event',
    'titre' => 'Events',
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
    'nom' => 'index.php?lang=en',
    'titre' => 'Home',
];

$contact = [
    'nom' => 'contact.php?lang=en',
    'titre' => 'Contact',
];

$propos = [
    'nom' => 'propos.php?lang=en',
    'titre' => 'About',
];

$page = [
    $base,
    $contact,
    $propos,
];

//dynamique
$page1 = [
    'nom' => 'page1.php?lang=en',
    'titre' => 'Drinks',
    'article' => [
        'White Edition' => 'page1.php?lang=en#white',
        'Winter Edition' => 'page1.php?lang=en#winter',
        'Original' => 'page1.php?lang=en#original',
        'Zero' => 'page1.php?lang=en#zero',
        'Red Edition' => 'page1.php?lang=en#red',
        'Apricot Edition' => 'page1.php?lang=en#orange',
    ],
];

$page2 = [
    'nom' => 'page2.php?lang=en',
    'titre' => 'Sponsors',
    'article' => [
        'Red Bull Racing' => 'page2.php?lang=en#f1',
        'Red Bull KTM' => 'page2.php?lang=en#moto',
        'RB Leipzig' => 'page2.php?lang=en#foot',
        'T1 e-sport' => 'page2.php?lang=en#t1',
        'EHC Red Bull' => 'page2.php?lang=en#hockey',
    ],
];

$page3 = [
    'nom' => 'page3.php?lang=en',
    'titre' => 'Events',
    'article' => [
        'Freeride MTB' => 'page3.php?lang=en#rampage',
        'Freeride Ski' => 'page3.php?lang=en#unrailistic',
        'Sea Rescue' => 'page3.php?lang=en#ocean',
        'Parkour Competition' => 'page3.php?lang=en#motion',
        'High Diving' => 'page3.php?lang=en#diving',
    ],
];

$menu = [
    $page1,
    $page2,
    $page3,
];

//CGU

$cgu1 = [
    'nom' => 'Article 1 – Definitions:',
    'texte' => 'Site: refers to the website.
        User: any person accessing and browsing the Site, for any purpose.
        Content: refers to all elements present on the Site (texts, images, videos, logos, etc.).',
];

$cgu2 = [
    'nom' => 'Article 2 – Purpose:',
    'texte' => 'These Terms and Conditions define the conditions under which users can access and use the Site. By accessing the Site, the user unconditionally accepts these Terms and Conditions.',
];

$cgu3 = [
    'nom' => 'Article 3 – Site Access:',
    'texte' => 'Access to the Site is open to any user with an Internet connection. The site is freely accessible, excluding connection and Internet subscription costs. Certain sections of the site may, however, be reserved for registered users.',
];

$cgu4 = [
    'nom' => 'Article 4 – Intellectual Property:',
    'texte' => 'The content of the site (texts, images, logos, etc.) is protected by applicable laws regarding intellectual property and copyright. Any reproduction, representation, modification, or adaptation, in whole or in part, without prior written permission from Red Bull, is prohibited and constitutes infringement.',
];

$cgu5 = [
    'nom' => 'Article 5 – Personal Data:',
    'texte' => 'The site may collect personal data such as name, email address, etc. In accordance with current regulations (GDPR), the user has the right to access, correct, and delete their personal data.',
];

$cgu6 = [
    'nom' => 'Article 6 – Liability:',
    'texte' => 'Use of the Site is solely the responsibility of the user. Red Bull cannot be held liable for any direct or indirect damage, including loss of data or profit, resulting from access to or use of the Site.',
];

$cgu7 = [
    'nom' => 'Article 7 – Hyperlinks:',
    'texte' => 'The site may contain links to other websites. Red Bull exercises no control over the content of these sites and cannot be held responsible for their availability or content.',
];

$cgu8 = [
    'nom' => 'Article 8 – Modification of Terms:',
    'texte' => 'Red Bull reserves the right to modify these Terms at any time. Users are invited to consult them regularly. Modifications take effect upon their publication on the Site.',
];

$cgu9 = [
    'nom' => 'Article 9 – Applicable Law:',
    'texte' => 'These Terms are governed by French law. In case of dispute, and after an attempt at amicable resolution, the courts of Strasbourg shall have jurisdiction.',
];

$cgu10 = [
    'nom' => 'Article 10 – Contact:',
    'texte' => 'For any questions regarding these Terms, you can contact Red Bull.',
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


// PAge a propos

$para1 = [
    'titre' => 'Red Bull today:',
    'texte' => 'Today, Red Bull is an international company known for its energy drinks, 
    but also for its involvement in sports. It organizes and sponsors extreme events, owns
     sports organizations, such as Formula 1 teams. The brand embodies energy, self-improvement, and creativity.',
];

$para2 = [
    'titre' => 'Red Bull today:',
    'texte' => 'I chose to use red (#E10600), blue (#002D72), white (#F2F2F2), and yellow (#FFD700) 
    on the site because these are Red Bull’s colors. They help maintain consistency with the brand’s 
    visual identity and immediately evoke the Red Bull universe.',
];


$para = [
    $para1,
    $para2,
];
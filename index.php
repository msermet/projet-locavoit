<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.flatly.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        section {
            padding: 60px 0;
        }

    </style>
    <title>LocaVoit</title>
    <link rel="shortcut icon" href="./assets/images/logo-locavoit.png" />
</head>
<body id="style-15">
<div class="scrollbar" id="style-15">
    <div class="force-overflow"></div>
</div>
<main>
    <!--Insertion d'un menu-->
    <?php include_once '_partials/menu.php' ?>
    <!--    Présentation-->
    <section id="presentation" class="bg-dark">
        <div class="container">
            <div class="row text-center text-black">
                <div class="col-md-7 col-xl-7 text-md-start pt-5 shadow rounded-5 bg-secondary p-5">
                    <h1>LocaVoit - Location de véhicules</h1>
                    <h2 class="pt-3">La liberté de rouler pas cher</h2>
                    <p class="pt-3 fs-6">Louez des véhicules de gammes en France et dans le monde entier. Notre flotte compte plus de 200 voitures de location, dont les modèles proviennent des meilleurs constructeurs automobiles au monde, notamment les favoris allemands tels que BMW, Mercedes, Audi ainsi que bien d'autres encore.
                    </p>
                    <div class="pt-3 text-center">
                        <a href="#pied-de-page"><button class="btn btn-success fs-6 shadow border-2 border-dark text-black" type="button">Nos coordonnées</button></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <img id="img-presentation" class="d-md-block d-none mx-auto pt-5" src="./assets/images/logo-locavoit.png" alt="Logo Spotify" />
                </div>
            </div>
        </div>
    </section>
    <div class="border-top border-4"></div>
    <!--    activités-->
    <section id="activites">
        <div class="container">
            <div class="text-center text-black">
                <h1>Nos activités</h1>
                <p class="text-center fs-5 fw-lighter">Vous permettant de louer un véhicule chez nous en toute sérénité !</p>
            </div>
            <div class="row pt-5 align-items-center">
                <div class="col-lg-6 col-xl-6 text-center">
                    <img class="d-lg-block my-auto mx-auto rounded-5 img-fluid mb-4 shadow" src="./assets/images/206+.png" alt="206 +" />
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item shadow">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Gérer l’entretien et le rachat de véhicules
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Notre entreprise se spécialise dans la location de voitures et met l'accent sur la gestion efficace de l'entretien et du rachat de véhicules. Nous assurons un entretien rigoureux de notre flotte pour garantir la sécurité et la satisfaction de nos clients, tout en recherchant activement les meilleures opportunités pour renouveler notre parc automobile avec des modèles modernes et fiables.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Gérer le stock de véhicule
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    En tant qu'entreprise de location de voitures, notre deuxième activité consiste à gérer efficacement notre stock de véhicules. Nous veillons à maintenir un inventaire bien organisé et diversifié, en nous assurant d'avoir toujours une sélection de véhicules disponibles pour répondre aux besoins de nos clients. Notre priorité est de garantir la disponibilité et la variété des voitures, afin d'offrir à nos clients un choix optimal lors de la réservation de leur véhicule idéal.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                    Gérer la satisfaction client
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Une autre facette essentielle de notre entreprise est la gestion proactive de la satisfaction client. Nous mettons tout en œuvre pour offrir une expérience de location de voitures exceptionnelle, en restant à l'écoute des besoins de nos clients, en traitant rapidement leurs demandes et en garantissant leur satisfaction à chaque étape de leur parcours avec nous. Notre engagement envers la qualité du service client se reflète dans chaque interaction, visant à dépasser les attentes et à fidéliser notre clientèle.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="border-top border-3"></div>
    <!--    Tarifs-->
    <section id="tarifs" class="bg-light">
        <div class="container">
            <div class="text-center text-black">
                <h1>Tarifs de location</h1>
                <p class="text-center fs-5 fw-lighter pb-4">Choisir le plan adapté à vos besoins</p>
            </div>
            <div class="row">
                <!--    Carte 1-->
                <div class="col-lg-4 col-xl-4 p-0 pt-lg-3">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Edition confort</h5>
                            <p>Véhicule haut de gamme</p>
                            <h1 class="text-success fw-bold">100€ - 300 € / jour</h1>
                            <p class="card-text d-lg-block d-none">Découvrez notre gamme 'Édition Confort' pour des véhicules haut de gamme et confortables. Profitez d'une conduite élégante et sans souci avec nos modèles spacieux, équipés des dernières technologies. Parfait pour des déplacements professionnels ou des voyages en famille, notre sélection garantit une expérience de conduite inégalée.</p>

                            <button type="button" class="btn btn-dark fw-bold ms-5 my-3" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                Voir les véhicules disponibles
                            </button>
                            <div class="translate-middle badge rounded-pill bg-success">4
                                <div class="spinner-border spinner-border-sm ms-1" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Edition confort</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body mx-auto">
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/jeep-grand-cherokee.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Jeep Gran Cherokee</h5>
                                                    <p class="card-text">Grand Cherokee : l’excellence à son plus haut niveau. Luxe, raffinement et technologie d’avant-garde. A l’intérieur, les inserts en bois, le cuir Palermo de haute qualité et le ciel de toit premium créent une ambiance exclusive. Le passager avant dispose d’un écran tactile de 10’’. Confort, sécurité et sérénité sont garantis grâce à la caméra 360°, à l’assistance à la conduite semi-autonome et au système de vision nocturne qui détecte piétons, cyclistes et animaux.</p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>
                                                </div>
                                            </div>
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/bmw-serie4-gran-coupe.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">BMW Série 4 Gran Coupé</h5>
                                                    <p class="card-text">Design expressif, tenue de route sportive et espace généreux au quotidien : la BMW Série 4 Gran Coupé est le coupé sportif de référence et fascine à tous points de vue. Avec son confort de conduite élevé et un espace généreux avec cinq sièges et un grand compartiment à bagages, cet élégant Gran Coupé 5 portes est le compagnon parfait pour toutes les occasions. </p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>
                                                </div>
                                            </div>
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/audi-q3.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Audi Q3</h5>
                                                    <p class="card-text">Une ligne de toit plongeante, une allure vigoureuse, une calandre Singleframe en nid d’abeilles et une ligne d’épaule basse... voici l’Audi Q3 Sportback, le premier SUV Coupé Compact Audi. Sous une carrosserie musclée, ses motorisations puissantes lui font gagner en dynamisme. A bord, l’expérience de conduite intègre des fonctionnalités plus intuitives que jamais et résolument « 2.0 ». Idéale pour le quotidien mais avec une touche de singularité, il est impossible pour vous de rester indifférent.</p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>
                                                </div>
                                            </div>
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/audi-tt-rs.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Audi TT RS Coupé</h5>
                                                    <p class="card-text">L’Audi TT RS va vous couper le souffle. Avec son bouclier aux prises d’air plus imposantes, ses ouïes latérales à l’arrière et son aileron redessiné, l’Audi TT RS semble vouloir s’affranchir des lois de l’aérodynamique. Le tout s’accompagne du mythique 5 cylindres TFSI qui saura vous ravir par ses vocalises inimitables. Laissez-vous envoûter par cette icône au sommet.</p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--    Carte 2-->
                <div class="col-lg-4 col-xl-4 p-0 my-auto">
                    <div class="card border border-danger border-2 shadow">
                        <div class="card-header text-center fw-bold text-danger">
                            Laissez vous tenter <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><style>@keyframes pulsate{0%,to{transform:scale(1)}50%{transform:scale(.9)}}</style><g style="animation:pulsate .5s ease-in-out infinite both;transform-origin:center center" stroke-width="1.5"><path stroke="#0A0A30" d="M11.515 6.269l.134.132a.5.5 0 00.702 0l.133-.132A4.44 4.44 0 0115.599 5c.578 0 1.15.112 1.684.33a4.41 4.41 0 011.429.939c.408.402.733.88.954 1.406a4.274 4.274 0 010 3.316 4.331 4.331 0 01-.954 1.405l-6.36 6.259a.5.5 0 01-.702 0l-6.36-6.259A4.298 4.298 0 014 9.333c0-1.15.464-2.252 1.29-3.064A4.439 4.439 0 018.401 5c1.168 0 2.288.456 3.114 1.269z"/><path stroke="#265BFF" stroke-linecap="round" stroke-linejoin="round" d="M15.5 7.5c.802.304 1.862 1.43 2 2"/></g></svg>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Edition classique</h5>
                            <p>Véhicule abordable</p>
                            <h1 class="text-success fw-bold">30€ - 70€ / jour</h1>
                            <p class="card-text d-lg-block d-none">Découvrez notre gamme 'Édition Classique' pour des véhicules standards à des prix abordables. Idéale pour ceux qui recherchent une option fiable et économique, cette sélection offre des modèles polyvalents pour répondre à vos besoins quotidiens de déplacement. Profitez d'une conduite confortable et pratique sans compromis sur la qualité, et explorez librement votre destination avec notre offre accessible.</p>
                            <button type="button" class="btn btn-dark fw-bold ms-5 my-3" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Voir les véhicules disponibles
                            </button>
                            <div class="translate-middle badge rounded-pill bg-success">5
                                <div class="spinner-border spinner-border-sm ms-1" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Edition classique</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body mx-auto">
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/ford-focus.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Ford Focus</h5>
                                                    <p class="card-text">Son design avant a été entièrement redessiné, notamment au niveau du capot, des pare-chocs, de la grille de calandre et du carénage. De remarquables phares avant à LED intègrent des feux antibrouillard, tandis qu’à l’arrière, les phares arborent une nouvelle silhouette unique. </p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>
                                                </div>
                                            </div>
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/mini-cooper.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Mini Cooper</h5>
                                                    <p class="card-text">La MINI vous offre encore plus d’espace tout en gardant son agilité et sa facilité de conduite légendaire. Son centre de gravité bas et ses dimensions compactes font merveille lorsqu'il faut se faufiler et se garer en ville. Ses nombreuses options de personnalisation permettent d’en faire une voiture unique à votre image. Un plaisir décuplé au volant et bien plus encore, tout ce que vous aimez chez MINI !</p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>

                                                </div>
                                            </div>
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/hyundai-santa-fe.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Hyundai Santa Fe</h5>
                                                    <p class="card-text">Animé d’un tout nouveau moteur hybride encore plus sobre, le SUV phare de Hyundai offre plus d’espace et de style. Découvrez un design plus audacieux et plus distinctif. Le Hyundai SANTA FE Hybrid associe un moteur turbo essence à injection directe et un moteur électrique à batterie Profitez d’une technologie de pointe.</p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>
                                                </div>
                                            </div>
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/range-rover-evoque.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Range Rover Evoque</h5>
                                                    <p class="card-text">À LA POINTE DE L’INNOVATION : Le luxe est une seconde nature du Range Rover Evoque, qui conjugue harmonieusement ses dernières technologies et fonctionnalités d’infodivertissement, l’élégance de son design et ses innovations.</p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>
                                                </div>
                                            </div>
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/nissan-qashqai.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Nissan Qashqai</h5>
                                                    <p class="card-text">Le Nissan Qashqai se réinvente avec la motorisation hybride Mild Hybrid et la motorisation hybride unique e-POWER. Il ne passe pas inaperçu avec ses jantes alliage 20’’, ses feux LED élégants et ses lignes audacieuses.</p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--    Carte 3-->
                <div class="col-lg-4 col-xl-4 p-0 pt-lg-3">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Edition sportive</h5>
                            <p>Véhicule ultra haut de gamme</p>
                            <h1 class="text-success fw-bold">300€ - 800€ / jour</h1>
                            <p class="card-text d-lg-block d-none">Découvrez notre gamme 'Édition Sportive' pour des véhicules ultra haut de gamme aux performances impressionnantes. Conçue pour les passionnés de conduite, cette sélection offre une expérience dynamique et exaltante. Avec des modèles de pointe dotés de technologies avancées, notre gamme sportive vous promet des sensations fortes sur la route.</p>
                            <button type="button" class="btn btn-dark fw-bold ms-5 my-3" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                Voir les véhicules disponibles
                            </button>
                            <div class="translate-middle badge rounded-pill bg-success">3
                                <div class="spinner-border spinner-border-sm ms-1" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Edition sportive</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body mx-auto">
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/lamborghini-huracan.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Lamborghini Huracan</h5>
                                                    <p class="card-text">La Lamborghini Huracán est le compromis idéal entre technologie et design.
                                                        La première émotion s’éprouve au premier regard. Lignes nettes, aérodynamiques, dessinées pour fendre l’air et dompter la route. La seconde s’éprouve en la touchant. Le plus haut savoir-faire artisanal italien appliqué à la réalisation de finitions d’une qualité sans précédent. Le troisième coup de cœur arrive en démarrant et en écoutant le V10 atmosphérique, ainsi qu’en profitant de toute la technologie nécessaire pour le maîtriser. Le dernière émotion est celle que procurent le système d’éclairage full LED et la planche de bord avec écran TFT de 12,3", pour une expérience de conduite incomparable.</p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>
                                                </div>
                                            </div>
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/ferrari-458-italia.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Ferrari 458 Italia</h5>
                                                    <p class="card-text">Le succès de la Ferrari 458 Italia est imparable et continue d'obtenir une importante reconnaissance internationale. Son palmarès déjà riche compte également des titres tels que « Meilleur moteur de performance » et « Meilleur moteur d'une cylindrée supérieure à 4 litres » encore une fois pour le moteur de la berlinette Maranello. Le succès critique et public de la 458 Italia ne connaît pas de frontières.</p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>
                                                </div>
                                            </div>
                                            <div class="card mb-5 border-3 border-dark" style="width: 23rem;">
                                                <img src="./assets/images/mercedes-amg-gt.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">Mercedes AMG GT</h5>
                                                    <p class="card-text">Il suffit de monter à bord du Nouveau Mercedes-AMG GT Coupé pour ressentir un plaisir de conduite typiquement Mercedes-AMG. Les matériaux, les couleurs et le design se combinent avec l'ADN typique de Mercedes-AMG. Du volant Performance AMG au concept de commande et d'affichage numérique avec des contenus spécifiques à AMG, en passant par les sièges Performance AMG avec des selleries raffinées en cuir Nappa, tout est pensé pour vous faire vivre une expérience à bord 100% Mercedes-AMG.</p>
                                                    <a href="reservation.php" class="btn btn-success fw-bold text-black">Réserver le véhicule</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="border-top border-3"></div>
    <!--    Organigramme-->
    <section id="organigramme">
        <div class="container text-center text-black">
            <h1 class="text-center">Organigramme de notre société !</h1>
            <p class="text-center fs-5 fw-lighter">Voici tous les membres prêts à vous accueillir</p>
            <img src="./assets/images/organigramme.png" class="img-fluid" alt="">
        </div>
    </section>
    <div class="border-top border-3"></div>
    <!--    Fiches de poste-->
    <section id="fichesdeposte" class="bg-light">
        <div class="container text-center text-black">
            <h1 class="text-center">Fiches de poste de nos membres</h1>
            <p class="text-center fs-5 fw-lighter">N'hésitez pas à regarder !</p>
            <div id="carouselExampleCaptions" class="carousel carousel-dark slide m-5">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="100">
                        <img src="./assets/images/mariodasilva.jpg" class="w-75" alt="...">
                        <div class="carousel-caption">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Mario Da Silva</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="w-100" src="./assets/images/fichedeposte-mariodasilva.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="100">
                        <img src="./assets/images/hugorey.jpg" class="w-75" alt="...">
                        <div class="carousel-caption">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel2">Hugo Rey</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="w-100" src="./assets/images/fichedeposte-hugorey.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/sophiefon.jpg" class="w-75" alt="...">
                        <div class="carousel-caption">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel3">Sophie Fon</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="w-100" src="./assets/images/fichedeposte-sophiefon.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/fabricedesjean.jpg" class="w-75" alt="...">
                        <div class="carousel-caption">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel4">Fabrice Desjean</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="w-100" src="./assets/images/fichedeposte-fabricedesjean.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/jeromecorneille.jpg" class="w-75" alt="...">
                        <div class="carousel-caption">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel5">Jérôme Corneille</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="w-100" src="./assets/images/fichedeposte-jeromecorneille.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev text-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <div class="border-top border-3"></div>
    <!--    Contact-->
</main>
<?php include_once '_partials/footer.php' ?>

<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- uiverse.io = site cool -->
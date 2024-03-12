<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
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
<body>
<main>
    <!--Insertion d'un menu-->
    <?php include_once '_partials/menu.php' ?>
    <!--    Présentation-->
    <section id="presentation" class="bg-secondary">
        <div class="container">
            <div class="row text-center text-black">
                <div class="col-md-7 col-xl-7 text-md-start pt-5">
                    <h1>LocaVoit - Location de véhicules</h1>
                    <h2 class="pt-3">La liberté de rouler pas cher</h2>
                    <p class="pt-3 fs-6">Louez des véhicules de gammes en France et dans le monde entier. Notre flotte compte plus de 200 voitures de location, dont les modèles proviennent des meilleurs constructeurs automobiles au monde, notamment les favoris allemands tels que BMW, Mercedes, Audi ainsi que bien d'autres encore.
                    </p>
                    <div class="pt-3">
                        <a href="#pied-de-page"><button class="btn btn-success fs-6" type="button">Nos coordonnées</button></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="d-md-block d-none mx-auto" src="./assets/images/logo-locavoit.png" alt="Logo Spotify" />
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
                <p>Vous permettant de louer un véhicule chez nous en toute sérénité !</p>
            </div>
            <div class="row pt-5 align-items-center">
                <div class="col-lg-6 col-xl-6 text-center">
                    <img class="d-lg-block my-auto mx-auto rounded-5 img-fluid mb-4" src="./assets/images/206+.png" alt="206 +" />
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Gérer l’entretien et le rachat de véhicules
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eaque ex illo iste, iusto laboriosam laudantium maxime natus nobis, non omnis porro praesentium qui sapiente similique suscipit ut vel vero!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Gérer le stock de véhicule
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea laborum non provident recusandae vitae voluptas. Adipisci animi assumenda beatae cum cumque distinctio dolore ea earum eius iure, nulla sit voluptatum!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                    Gérer la satisfaction client
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea laborum non provident recusandae vitae voluptas. Adipisci animi assumenda beatae cum cumque distinctio dolore ea earum eius iure, nulla sit voluptatum!
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
                <p class="text-secondary">Choisir le plan adapté à vos besoins</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-4 p-0 pt-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Edition confort</h5>
                            <p>Véhicule haut de gamme</p>
                            <h1 class="text-success fw-bold">70 - 300 € / jour</h1>
                            <p class="card-text d-lg-block d-none">Lorem ipsum dolor sit amet. Corporis dolorum explicabo impedit ipsa ipsum magni pariatur quas, ratione voluptates. Libero minima molestiae nesciunt non quaerat quisquam repudiandae rerum vel vero.</p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                                Voir les véhicules disponibles
                            </button>
                            <div class="translate-middle badge rounded-pill bg-danger">4
                                <div class="spinner-border spinner-border-sm ms-1" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>


                            <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel" style="width: 40rem">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="staticBackdropLabel">Edition confort</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body mx-auto">
                                    <div class="card mb-5 border-3 border-dark" style="width: 35rem;">
                                        <img src="./assets/images/audi-tt-rs.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Audi TT RS Coupé</h5>
                                            <p class="card-text">L’Audi TT RS va vous couper le souffle. Avec son bouclier aux prises d’air plus imposantes, ses ouïes latérales à l’arrière et son aileron redessiné, l’Audi TT RS semble vouloir s’affranchir des lois de l’aérodynamique. Le tout s’accompagne du mythique 5 cylindres TFSI qui saura vous ravir par ses vocalises inimitables. Laissez-vous envoûter par cette icône au sommet.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                    <div class="card mb-5 border-3 border-dark" style="width: 35rem;">
                                        <img src="./assets/images/jeep-grand-cherokee.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Jeep Gran Cherokee</h5>
                                            <p class="card-text">Grand Cherokee : l’excellence à son plus haut niveau. Luxe, raffinement et technologie d’avant-garde. A l’intérieur, les inserts en bois, le cuir Palermo de haute qualité et le ciel de toit premium créent une ambiance exclusive. Le passager avant dispose d’un écran tactile de 10’’. Confort, sécurité et sérénité sont garantis grâce à la caméra 360°, à l’assistance à la conduite semi-autonome et au système de vision nocturne qui détecte piétons, cyclistes et animaux.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                    <div class="card mb-5 border-3 border-dark" style="width: 35rem;">
                                        <img src="./assets/images/bmw-serie4-gran-coupe.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">BMW Série 4 Gran Coupé</h5>
                                            <p class="card-text">Design expressif, tenue de route sportive et espace généreux au quotidien : la BMW Série 4 Gran Coupé est le coupé sportif de référence et fascine à tous points de vue. Avec son confort de conduite élevé et un espace généreux avec cinq sièges et un grand compartiment à bagages, cet élégant Gran Coupé 5 portes est le compagnon parfait pour toutes les occasions. </p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                    <div class="card mb-5 border-3 border-dark" style="width: 35rem;">
                                        <img src="./assets/images/audi-q3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Audi Q3</h5>
                                            <p class="card-text">Une ligne de toit plongeante, une allure vigoureuse, une calandre Singleframe en nid d’abeilles et une ligne d’épaule basse... voici l’Audi Q3 Sportback, le premier SUV Coupé Compact Audi. Sous une carrosserie musclée, ses motorisations puissantes lui font gagner en dynamisme. A bord, l’expérience de conduite intègre des fonctionnalités plus intuitives que jamais et résolument « 2.0 ». Idéale pour le quotidien mais avec une touche de singularité, il est impossible pour vous de rester indifférent.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 p-0 my-auto">
                    <div class="card border border-success">
                        <div class="card-header text-center text-success">
                            Le plus populaire
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Edition classique</h5>
                            <p>Véhicule abordable</p>
                            <h1 class="text-success fw-bold">30€ - 70€ / jour</h1>
                            <p class="card-text d-lg-block d-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad error fugiat, ipsa magnam nisi obcaecati quaerat qui ratione reiciendis repellendus sed sit tempora ullam unde velit, veritatis vero voluptatibus voluptatum.</p>
                            <button type="button" class="btn btn-outline-success">Achetez maintenant</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 p-0 pt-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Edition sportive</h5>
                            <p>Véhicule ultra haut de gamme</p>
                            <h1 class="text-success fw-bold">300€ - 800€ / jour</h1>
                            <p class="card-text d-lg-block d-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci atque, cum delectus dolor et, fugit illum modi natus necessitatibus obcaecati possimus quae quam, rem repellendus similique sunt ullam voluptates voluptatum.</p>
                            <button type="button" class="btn btn-outline-success">Achetez maintenant</button>
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
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button type="button" class="btn btn-success fw-bold text-black mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                Fiche de poste
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <div class="bg-secondary">
        <footer id="pied-de-page" class="py-5 container">
            <div class="row">
                <div class="col-6 col-md-2">
                    <h5>Redirection</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#presentation" class="nav-link p-0 text-body-secondary"><i class="bi bi-arrow-right-circle-fill me-2"></i>Présentation</a></li>
                        <li class="nav-item mb-2"><a href="#activites" class="nav-link p-0 text-body-secondary"><i class="bi bi-arrow-right-circle-fill me-2"></i>Activités</a></li>
                        <li class="nav-item mb-2"><a href="#tarifs" class="nav-link p-0 text-body-secondary"><i class="bi bi-arrow-right-circle-fill me-2"></i>Tarifs</a></li>
                        <li class="nav-item mb-2"><a href="#organigramme" class="nav-link p-0 text-body-secondary"><i class="bi bi-arrow-right-circle-fill me-2"></i>Organigramme</a></li>
                        <li class="nav-item mb-2"><a href="#fichesdeposte" class="nav-link p-0 text-body-secondary"><i class="bi bi-arrow-right-circle-fill me-2"></i>Fiches de poste</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2">
                    <h5>Localisation</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a class="text-body-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://maps.app.goo.gl/XTaGztzZpoRb5f7R8"><i class="bi bi-geo-fill me-2"></i>3 Rue Gustave Courbet 70150 Marnay</a></li>
                        <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary"><i class="bi bi-geo-alt-fill me-2"></i>France</a></li>

                    </ul>
                </div>
                <div class="col-6 col-md-2">
                    <h5>Contacts</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary"><i class="bi bi-telephone-outbound-fill me-2"></i>07 68 72 58 23</a></li>
                        <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary"><i class="bi bi-envelope-at-fill me-2"></i>locavoit@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-5 offset-md-1">
                    <h5>Une question ?<i class="bi bi-person-raised-hand ms-2"></i></h5>
                    <p class="text-body-secondary">Remplissez le formulaire de contact :</p>
                    <div class="ms-2">
                        <a href="/_partials/contact.php"><button class="btn btn-success" type="button">Cliquez ici</button></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- uiverse.io = site cool -->
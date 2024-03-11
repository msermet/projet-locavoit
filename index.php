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
                <div class="col-lg-6 col-xl-6">
                    <img class="d-lg-block my-auto mx-auto rounded-5" src="./assets/images/206+.png" alt="206 +" />
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
                            <button type="button" class="btn btn-outline-success">Achetez maintenant</button>
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
            <img src="./assets/images/organigramme.png" class="w-100" alt="">
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
                        <li class="nav-item mb-2"><a href="#presentation" class="nav-link p-0 text-body-secondary">Présentation</a></li>
                        <li class="nav-item mb-2"><a href="#activites" class="nav-link p-0 text-body-secondary">Activités</a></li>
                        <li class="nav-item mb-2"><a href="#tarifs" class="nav-link p-0 text-body-secondary">Tarifs</a></li>
                        <li class="nav-item mb-2"><a href="#organigramme" class="nav-link p-0 text-body-secondary">Organigramme</a></li>
                        <li class="nav-item mb-2"><a href="#fichesdeposte" class="nav-link p-0 text-body-secondary">Fiches de poste</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2">
                    <h5>Localisation</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a class="text-body-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://maps.app.goo.gl/XTaGztzZpoRb5f7R8">3 Rue Gustave Courbet 70150 Marnay</a></li>
                        <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary">Pays : France</a></li>

                    </ul>
                </div>
                <div class="col-6 col-md-2">
                    <h5>Contacts</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary">Téléphone : 07 68 72 58 23</a></li>
                        <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary">E-mail : locavoit@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-5 offset-md-1">
                    <h5>Si vous avez une question à nous poser :</h5>
                    <p class="text-body-secondary">Remplissez le formulaire de contact</p>
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
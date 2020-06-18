<?php

    // Configurez ici votre email qui est utilisé à plusieurs endroits sur la page
    // Le reste des infos est à changer manuellement.
    // C'est votre page ! Faites en ce que vous voulez.
    $email = "hamza.karfa@gmail.com";

?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE settings -->
    <link rel="icon">
    <title>Simplonien Test - Simplon Roanne P3</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS dependencies -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="styles.css">
    <!-- scss 
    <link rel="stylesheet" href="styles.css">
    -->
    <!-- Script: Navbar on-top -->

    <script src="../../js/navbar-ontop.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="http://trombi.simplon-roanne.com">Simplon</a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-end"
                id="navbar3SupportedContent">

                <a class="btn navbar-btn btn-outline-light"
                    href="http://trombi.simplon-roanne.com">Retour à l'accueil</a>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <!-- First section -->
    <div class="py-5 text-center section-parallax filter-dark bg-fixed"
        style="background-image: url('/assets/promo2/simplon.jpg');">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 mb-0">Hamza KARFA</h1>
                    <h3 class="my-0">Développeur Web et Mobile</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Second Section -->
    <div class="container-fluid text-center bg-dark">
        <ul class="nav nav-tabs row">
            <li class="nav-item col-4 px-0">
                <a href="javascript:void(0);" data-target="#profile" class="nav-link h3 my-0 active"
                    aria-controls="profile" aria-selected="true" data-toggle="tab" id="profile-tab"
                    role="tab">Profil</a>
            </li>
            <li class="nav-item col-4 px-0">
                <a href="javascript:void(0);" data-target="#projects" class="nav-link h3 my-0"
                    aria-controls="projects" aria-selected="false" data-toggle="tab"
                    id="projects-tab" role="tab">Projets</a>
            </li>
            <li class="nav-item col-4 px-0">
                <a href="javascript:void(0);" data-target="#contact" class="nav-link h3 my-0"
                    aria-controls="contact" aria-selected="false" data-toggle="tab" id="contact-tab"
                    role="tab">Contact</a>
            </li>
        </ul>
    </div>
    <!-- Third Section -->
    <div class="bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content my-2" id="myTabContent">
                        <!-- First tab -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h2 class="display-4">Mon profil</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img class="img-fluid rounded-circle p-3 "
                                        src="./src/Hamza-Photo.jpg" alt="Card image">
                                </div>
                                <div class="col-8 text-left">
                                    <h3>Développeur Web et Mobile</h3>
                                    <p class="lead">Actuellement en formation Développeur Web et Web Mobile</p>
                                    <p>
                                    Titulaire d'un Bac Professionnel Technicien du Froid et Conditionnement d'Air obtenu en 2014. 
                                    J'ai entamé en 2016 une première année de licence Sciences Pour l'Ingénieur option Informatique à l'université de Roanne. 
                                    Année qui m'a permis de découvrir les bases de l'Algorithmie et de la programmation. 
                                    Grâce à cette année universitaire, j'ai pu repenser mon avenir et établir un nouveau projet professionel. 
                                    </p>
                                    <p>
                                    J'ai finalement choisi la reconversion professionnelle par le biais d'une formation. 
                                    Mon inscription à la Mission Locale en 2019 m'a permis de découvrir l'organisme Simplon et j'ai donc choisi la formation Développeur Web et Web Mobile.

                                        <br><br>
                                    Simplon Roanne a finalement retenu mon profil pour intégrer la 3ème promotion de l'organisme.


                                    </p>
                                    <div class="blockquote">
                                        <p class="mb-2">Citations</p>
                                        <div class="blockquote-footer">
                                            "Un gagnant est juste un rêveur qui n'a jamais cédé"<br>
                                            <cite>Nelson Mandela</cite>
                                        </div>
                                    </div>

                                    <div class="blockquote">
                                        <div class="blockquote-footer">
                                            "Je suis le capitaine dans le bateau de mes efforts"<br>
                                            <cite>Kery James</cite>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <b class="lead">Liens :</b>
                                    <div class="liens">
                                        <a href="https://github.com/HamzaKarfa" class="liens"
                                            target="_blank">
                                            <i
                                                class="fa fa-github d-inline fa-lg mr-3 text-dark"></i>
                                        </a>

                                        <a href="https://www.linkedin.com/in/hamza-karfa-7aa8121ab/" 
                                            target="_blank">
                                            <i class="fa fa-linkedin d-inline fa-lg mr-3 text-dark"></i>
                                        </a>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Second tab -->
                        <div class="tab-pane fade" id="projects" role="tabpanel"
                            aria-labelledby="projects-tab">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h2 class="display-4">Projets</h2>
                                    <hr>
                                </div>
                            </div>
                            <section class="project py-4">
                                <!-- One project -->
                                <div class="row">
                                    <div class="col-4">

                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">Clone Product Hunt</h4>
                                                <p class="card-text">
                                                    Project effectué en duo avec <a href="../Szucs-Gregory">Gregory Szucs</a>. 
                                                    Le but du projet était de reproduire
                                                    le site de <a href="https://www.producthunt.com">Product Hunt</a>.
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/HamzaKarfa/simplon-tp-product-hunt"
                                                    target="_blank">Voir le projet
                                                </a>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="http://emjjjpl.cluster029.hosting.ovh.net"
                                                    target="_blank">Voir le site
                                                </a>
                                            </div>
                                        </div>
                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">Puissance 4 POO JavaScript</h4>
                                                <p class="card-text">
                                                    Project effectué dans le cadre d'un TP. 
                                                    Le but du projet était de prendre en main la POO JavaScript.
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/HamzaKarfa/jeu-poo-js"
                                                    target="_blank">Voir le projet
                                                </a>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="http://hk-puissance-4-poo-js.projets.simplon-roanne.com"
                                                    target="_blank">Tester le jeu
                                                </a>
                                            </div>
                                        </div>
                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">ComparOperator</h4>
                                                <p class="card-text">
                                                Project effectué en duo avec <a href="../Yoan Chalavon">Yoan Chalavon</a>. 
                                                    Le but du projet était de produire
                                                    un site comparateur de tours opérateurs.
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/HamzaKarfa/project-compar-oprerator"
                                                    target="_blank">Voir le projet
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 text-left">
                                        <h3>Compétences acquises</h3>
                                        <p class="lead">Créer des pages web en HTML, CSS, JavaScript, PHP7 et
                                            MySQL</p>
                                        <p>
                                            Le projet Product Hunt contient une API faite en Programmation Orientée Object PHP. Cette API nous permet d'effectuer les requêtes SQL à la base de donnée.
                                            <br> 
                                            Les produits sont dynamiquement affichés grâce au requetes JavaScript et triés en PHP grâce la base de données MySQL.
                                            <br>
                                            Enfin le design du site est réalisé avec la librairie Bootstrap.
                                        </p>
                                        <p>
                                            Le Jeu du puissance 4 est uniquement créé en Programmation Orientée Object JavaScript.
                                            <br> 
                                            Le jeu est composé de 2 class: la première initialise le plateau de jeu et instancie les objets de la deuxième class qui sont les Joueurs.
                                            Toutes les conditions de victoire et les actions du jeu sont des methodes de la class Joueurs.
                                            <br> 
                                            Le jeu est hébergé sur le serveur de Simplon Roanne mit à notre disposition le temps de la formation.
                                        </p>
                                        <p class="lead">Utilisation de Git</p>
                                        <p class="lead">Utilisation de Visual Studio Code</p>
                                        <h3>Projets personnels</h3>
                                        <p>Je n'ai pas encore vraiment commencé de projet personnel.
                                            Je pense débuter prochainement un projet que je présenterai lors de mon examen de fin de formation.
                                        </p>   
                                            <br>
                                            <ul>

                                            </ul>
                                    </div>
                                </div>
                                <hr>
                            </section>
                        </div>
                        <!-- Third tab -->
                        <div class="tab-pane fade" id="contact" role="tabpanel"
                            aria-labelledby="contact-tab">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h2 class="display-4">Contactez-moi</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h3>Mes coordonnées</h3>
                                    <ul>
                                        <li>
                                            <b>Email</b> : <a
                                                href="mailto:<?=$email?>"><?=$email?></a>
                                        </li>
                                        <li>
                                            <b>Téléphone</b> : <a href="tel:0680675974">06 80 67 59 74</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-8 text-left">
                                    <h3>Envoyez un email</h3>
                                    <!-- Contact form -->
                                    <form method="post" action="../../api/mail.php">
                                        <input type="hidden" name="to" value="<?=$email?>">
                                        <div class="form-group">
                                            <label for="email">Votre email</label>
                                            <input type="email"
                                                   class="form-control form-control-lg"
                                                   placeholder="Email"
                                                   required="required"
                                                   name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Votre nom</label>
                                            <input type="text"
                                                   class="form-control form-control-lg"
                                                   placeholder="Nom"
                                                   required="required"
                                                   name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Votre message</label>
                                            <textarea class="form-control p-1 form-control-lg"
                                                      rows="3"
                                                      placeholder="Message"
                                                      name="message"
                                                      required="required"></textarea>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-secondary btn-lg">ENVOYER</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <div class="text-white bg-dark text-center">
        <div class="container">
            <div class="row">
                <div class="p-5 col-8 offset-2">
                    <h3>
                        <b>Smpln</b>
                    </h3>
                    <p class="">
                        <a href="#" target="_blank">27 Rue Lucien Langenieux,
                            <br>42300 Roanne
                        </a>
                    </p>
                    <p class="">
                        <a href="mailto:simplonroanne@gmail.com">simplonroanne@gmail.com</a>
                    </p>
                    <p class="mb-3">
                        <a href="tel:0625250591">06 25 25 05 91</a>
                    </p>
                    <a href="#" target="_blank">
                        <i class="fa fa-github d-inline fa-lg mr-3 text-white"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa d-inline fa-lg mr-3 text-white fa-linkedin"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa fa-facebook d-inline fa-lg mr-3 text-white"></i>
                    </a>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center text-muted">© Copyright 2018 Simplon Roanne - Tous
                            droits réservés. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- Script: Smooth scrolling between anchors in the same page -->
    <script src="/js/smooth-scroll.js"></script>
</body>

</html>
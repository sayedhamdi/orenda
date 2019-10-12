<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Formulaire de Recrutement</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->

    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.html"><img src="./img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="index.html">Home</a></li>

                                <li><a href="team.html">Team</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="blog.html">Articles</a></li>
                                <li class="active"><a href="contact.html">Contact</a></li>
                            </ul>

                            <!-- Get Tickets Button -->

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/2.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title text-center">Formulaire de Recrutement</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Area Start -->
    <section class="contact--us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Contact Us Thumb -->
                <?php
                if (isset($_GET["response"]) ){
                  echo ' <div class="col-12 col-lg-12"><div class="alert alert-success text-center" role="alert">
                        Votre condidature a été bien reçu </div></div>';
                }
                  ?>
                <div class="col-12 col-lg-6">
                    <div class="contact-us-thumb mb-100">
                        <img src="img/bg-img/2.png" alt="">
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div class="contact-heading">
                            <h4>Veuillez Remplir le Formulaire</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae</p>
                        </div>
                        <div class="contact_form">
                            <form action="VerifFormulaire.php" method="post" >
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group fg">
                                                <input type="text" class="form-control mb-30 inputt" name="nom" id="name" placeholder="Nom" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group fg">
                                                <input type="text" class="form-control mb-30 inputt" name="prenom" id="name-2" placeholder="Prénom" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group fg">
                                                <input type="email" class="form-control mb-30 inputt" name="email" id="email" placeholder="E-mail" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group fg">
                                                <input type="text" class="form-control mb-30 inputt" name="tel" id="subject" placeholder="Numéro de téléphone" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group fg">
                                                <input type="text" class="form-control mb-30 inputt" name="fbLink" id="subject" placeholder="Lien de Votre Profil Facebook"required>
                                            </div>
                                        </div>
                                        <!--- next page -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group fg">
                                                <input type="text" class="form-control mb-30 inputt" name="class" id="subject" placeholder="Votre Classe (Ex:1IM,2ING, .." required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group fg">
                                                <b>Comment avez-vous parler entendu de notre recrutement ?</b>
                                                <br>
                                                   <input type="radio" class="" name="entendu" id="subject" placeholder="" value="isamm" required> ISAMM<br>
                                                   <input type="radio" class="" name="entendu" id="subject" placeholder="" value="facebook" required> Facebook<br>
                                                   <input type="radio" class="" name="entendu" id="subject" placeholder="" value="ami" required> Vos ami<br>
                                                <input type="text" class="form-control mb-30 inputt" name="entendu" id="subject" placeholder="Autre">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group fg">
                                              <div class="form-group ">
                                                  <b>Avez-vous une expérience dans la vie associative ?</b>
                                                  <br>
                                                   <input type="radio" class="" name="exAsso" id="" placeholder="" value="oui" required> Oui<br>
                                                   <input type="radio" class="" name="exAsso" id="" placeholder="" value="non" required> Non<br>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group fg">
                                              <b>Si oui, lesquels?</b>
                                                <input type="text" class="form-control mb-30 inputt" name="ouiExAsso" id="subject" placeholder="votre reponse" >
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group fg">
                                              <div class="form-group ">
                                                <b>Préférez-vous le travail en groupe ou individuel?</b>
                                                  <br>
                                                     <input type="radio" class="" name="travail" id="subject" placeholder="" value="individuel" required>  Individuel<br>
                                                    <input type="radio" class="" name="travail" id="subject" placeholder="" value="groupe" required> En groupe <br>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group fg">
                                              <b>Pourquoi?</b>
                                                <input type="text" class="form-control mb-30 inputt" name="travailPQ" id="subject" placeholder="votre reponse" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group fg">
                                              <b>Quels Pole Souhaitez Vous Joindre?</b>
                                              <br>
                                                 <input type="radio" class="pole" name="pole" id="pole" value="p" placeholder="" required> Projet<br>
                                                 <input type="radio" class="pole" name="pole" id="pole" value="dc" placeholder="" required> Developpement Commercial<br>
                                                 <input type="radio" class="pole" name="pole" id="pole" value="m" placeholder="" required> Marketing<br>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group fg">
                                              <b>Pourquoi avez-vous choisi ce pôle?</b>
                                              <br>
                                              <input type="text" class="form-control mb-30 inputt" name="q1Pole" id="subject" placeholder="votre reponse" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group fg">
                                              <b>Que ferriez-vous pour nous qu'un autre ne pourrait pas faire? Que attendiez vous de nous en contre partie ? </b>
                                              <br>
                                              <input type="text" class="form-control mb-30 inputt" name="q2Pole" id="subject" placeholder="votre reponse" required>
                                            </div>
                                        </div>
                                        <!-- projet -->
                                        <div id="proj">
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group fg">
                                              <b>Listez les projets que vous avez fait? (ex : site web , design graphique , montage video , jeux video..)</b>
                                              <br>
                                              <input type="text" class="form-control mb-30 inputt" name="qProjet" id="subject" placeholder="votre reponse" required>
                                            </div>
                                        </div>
                                      </div>
                                      <!-- dc -->
                                      <div id="devco">
                                      <div class="col-12 col-lg-12">
                                          <div class="form-group fg">
                                            <b>Quelles sont les procédures de prospection commerciales ?</b>
                                            <br>
                                            <input type="text" class="form-control mb-30 inputt" name="qDevCo" id="subject" placeholder="votre reponse" required>
                                          </div>
                                      </div>
                                    </div>
                                    <!-- marketing -->
                                    <div id="marketing">
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group fg">
                                          <b>Vous vous voyez en tant que:</b>
                                          <br>
                                             <input type="radio" class="" name="spec" id="" value="designer" placeholder="" required> Designer<br>
                                             <input type="radio" class="" name="spec" id="" value="videaste" placeholder="" required> Vidéaste<br>
                                             <input type="radio" class="" name="spec" id="" value="redacteur" placeholder="" required> Rédacteur<br>
                                            <input type="radio" class="" name="spec" id="" value="photographe" placeholder="" required> Photographe<br>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group fg">
                                          <b>Selon vous, que signifie le marketing?</b>
                                          <br>
                                          <input type="text" class="form-control mb-30 inputt" name="marketingQ1" id="subject" placeholder="votre reponse" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group fg">
                                          <b>Notez vous votre niveau :</b>
                                          <br>
                                          Francais<br>
                                             <input type="radio" class="" name="fr" id="" value="1" placeholder="" required> 1<br>
                                             <input type="radio" class="" name="fr" id="" value="2" placeholder="" required> 2<br>
                                             <input type="radio" class="" name="fr" id="" value="3" placeholder="" required> 3<br>
                                            <input type="radio" class="" name="fr" id="" value="4" placeholder="" required> 4<br>
                                            <input type="radio" class="" name="fr" id="" value="5" placeholder="" required> 5<br>
                                            Anglais<br>
                                            <input type="radio" class="" name="en" id="" value="1" placeholder="" required> 1<br>
                                            <input type="radio" class="" name="en" id="" value="2" placeholder="" required> 2<br>
                                            <input type="radio" class="" name="en" id="" value="3" placeholder="" required> 3<br>
                                            <input type="radio" class="" name="en" id="" value="4" placeholder="" required> 4<br>
                                           <input type="radio" class="" name="en" id="" value="5" placeholder="" required> 5<br>
                                        </div>
                                    </div>
                                  </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Valider <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->

    <!-- Map Area -->


    <!-- Contact Info Area -->


    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>
                            <p>ORENDA Junior Entreprise is a student association in economic and educational vocation, a non-profit organization founded in 2018 at the ISAMM .</p>

                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="https://www.facebook.com/OrendaJE/"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="https://www.instagram.com/orenda_je/"><i class="zmdi zmdi-instagram"></i></a>

                                <a href="https://www.linkedin.com/in/orenda-je-18b29417a/"><i class="zmdi zmdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Contact</h5>

                            <!-- Contact Area -->
                            <div class="footer-contact-info">
                                <p><i class="zmdi zmdi-map"></i>University campus of manoubap</p>
                                <p><i class="zmdi zmdi-phone"></i> (+216) 54 521 658</p>
                                <p><i class="zmdi zmdi-email"></i> Orendajunior.entreprise@gmail.com</p>

                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Services</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#">Video games Developpement</a></li>
                                <li><a href="#">Graphic Design</a></li>
                                <li><a href="#">Web Developpement</a></li>
                                <li><a href="#">Video Editing</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Gallery</h5>

                            <!-- Footer Gallery -->
                            <div class="footer-gallery">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="img/bg-img/21.jpg" class="single-gallery-item"><img src="img/bg-img/21.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/22.jpg" class="single-gallery-item"><img src="img/bg-img/22.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/23.jpg" class="single-gallery-item"><img src="img/bg-img/23.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/24.jpg" class="single-gallery-item"><img src="img/bg-img/24.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/25.jpg" class="single-gallery-item"><img src="img/bg-img/25.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/26.jpg" class="single-gallery-item"><img src="img/bg-img/26.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->

    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>
<script type="text/javascript">
let projet = $("#proj")
let devco = $("#devco")
let marketing = $("#marketing")
projet.css("display","none")
devco.css("display","none")
marketing.css("display","none")

let current = ""
  $(".pole").change(function(){
    current = $(this).val()
    if (current == "p"){
      $('[name="qProjet"]').attr('required');
      $('[name="qDevCo"]').removeAttr('required');
      $('[name="spec"]').removeAttr('required');
      $('[name="marketingQ1"]').removeAttr('required');
      $('[name="fr"]').removeAttr('required');
      $('[name="en"]').removeAttr('required');
      projet.css("display","block")
      devco.css("display","none")
      marketing.css("display","none")
    }else if (current =="dc"){
      $('[name="qProjet"]').removeAttr('required');
      $('[name="qDevCo"]').attr('required');
      $('[name="spec"]').removeAttr('required');
      $('[name="marketingQ1"]').removeAttr('required');
      $('[name="fr"]').removeAttr('required');
      $('[name="en"]').removeAttr('required');
      projet.css("display","none")
      devco.css("display","block")
      marketing.css("display","none")
    }else if (current == "m"){
      $('[name="qProjet"]').removeAttr('required');
      $('[name="qDevCo"]').removeAttr('required');
      $('[name="spec"]').attr('required');
      $('[name="marketingQ1"]').attr('required');
      $('[name="fr"]').attr('required');
      $('[name="en"]').attr('required');
      projet.css("display","none")
      devco.css("display","none")
      marketing.css("display","block")
    }

  })
    </script>
</html>

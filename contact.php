<?php
$title = "Contacts";
include_once "inc/header.php";
?>

  <!--================ Home Banner Area =================-->
  <section class="home_banner_area banner-area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="banner_content d-flex flex-md-row flex-column">
              <div class="banner-left text-md-right">
                <h1 class="text-uppercase">Rejoignez nous</h1>
              </div>
              <div class="banner-right position-relative">
                <p>
                  Nous sommes à votre écoute, contactez nous via le formulaire ou notre siège localisé ci-dessous 
                </p>
                <span class="main_btn mt-4 mt-md-0" href="#">
                  <a href="index.php" class="text-white">Accueil</a>
                  <i class="fa fa-arrow-right mx-2"></i>
                  <a href="contact.php" class="text-white">Contacts</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->


  <!-- ================ contact section start ================= -->
  <section class="section_gap">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.9225815441664!2d9.688058914820752!3d4.036221448184235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10611320b460e60b%3A0xd56e18a41ead8082!2sInterface%20S.A.!5e0!3m2!1sfr!2scm!4v1568797647229!5m2!1sfr!2scm"
           width="1100" height="300" frameborder="0" style="border:0;" allowfullscreen="yes"></iframe>
      </div>

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Nous rejoindre</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Entrer Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Entrez votre nom">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Entrez adresse email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Entrer Sujet">
                </div>
              </div>
            </div>
            <div class="form-group mt-2 mb-5 mb-lg-0">
              <button type="submit" class="button button-contactForm main_btn">Envoyer Message</button>
            </div>
          </form>
        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-home"></i></span>
            <div class="media-body">
              <h3>Bali Koumassi, Douala.</h3>
              <p>Bld Besseke, 1251</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
            <div class="media-body">
              <h3><a href="tel:237 334 256 16">+(237) 334 256 16</a></h3>
              <p>Lundi à vendredi 8.30-17.30</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-envelope-o"></i></span>
            <div class="media-body">
              <h3><a href="mailto:sales@logisafrica.com">sales@logisafrica.com</a></h3>
              <p>Envoyez vos requetes !</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
  <script style="javascript/text">
  document.getElementById('contact').style.color = 'red';
  </script>
  <?php 
include_once "inc/footer.php";
?>
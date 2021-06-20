<?php
$title = "Transport aérien, maritime et terrestre";
include_once "inc/header.php";
?>

  <!--================ Home Banner Area =================-->
  <section class="home_banner_area banner-area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="banner_content d-flex flex-md-row flex-column">
              <div class="banner-left text-md-right">
                <h1 class="text-uppercase">TRANSPORT AéRIEN, MARITIME ET TERRESTRE</h1>
              </div>
              <div class="banner-right position-relative">
                <p>
                 Dans tous les secteurs et partout dans le monde,
                  Logis vous accompagne dans la gestion de vos flux logistiques.
                </p>
                <span class="main_btn mt-4 mt-md-0" href="#">
                  <a href="services.php" class="text-white">Services</a>
                  <i class="fa fa-arrow-right mx-2"></i>
                  <a href="douane.php" class="text-white">TRANSPORT</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->
  <!--================ Start Service Area =================-->
  <section class="service-area section_gap_top">
    <div class="container">
      <div class="row justify-content-center section-title-wrap">
        <div class="col-lg-12">
          <h5>TRANSPORT AéRIEN, MARITIME ET TERRESTRE</h5>
          <h2 class="text-white">
            FAITES VOTRE CHOIX ET NOUS ACHEMINONS VOTRE COLIS A DESTINATION
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="single-service col-lg-4 col-md-6">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/service/aerien.jpg" alt="" />
          </div>
          <div class="service-box">
            <h3>
            TRANSPORT AERIEN
            </h3>
            <p>
			  Parce que les clients qui nous confient le transport de leur fret aérien veulent avoir
			  la garantie que leurs colis arrivent à temps, nos agents experts assurent un service personnalisé.
            </p>
            <a href="aerien.php">SAVOIR PLUS</a>
          </div>
        </div>

        <div class="single-service col-lg-4 col-md-6">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/service/maritime.jpg" alt="" />
          </div>
          <div class="service-box">
            <h3>
			TRANSPORT MARITIME
            </h3>
            <p>
			  Avec ses implantations en nom propre et son réseau de partenaires de par le monde,
			   Logis oeuvre dans les principales zones portuaires du Golfe de Guinée et ailleurs.
            </p>
            <a href="maritime.php">SAVOIR PLUS</a>
          </div>
        </div>

        <div class="single-service col-lg-4 col-md-6">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/service/routier.jpg" alt="" />
          </div>
          <div class="service-box">
            <h3>
              TRANSPORT ROUTIER
            </h3>
            <p>
			  Logis met à votre service son sacvoir-faire en matière de transport routier international
			  au départ des différents ports et aéroports du Golfe de Guinée à destination
			   de l'interieur du continent africain.
            </p>
            <a href="routier.php">SAVOIR PLUS</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ end Service Area =================-->
  <script style="javascript/text">
  document.getElementById('service').style.color = 'red';
  </script>
  <?php
include_once "inc/footer.php";
?>
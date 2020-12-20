<?php ?>

<head>
<!-- <div w3-include-html="shared_html/head.html"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='icon' href="assets/images/favicon.ico" type="image/x-icon"/>

  <title>eFairSorger</title>

  <link rel="stylesheet" href="../assets/stylesheets/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/49e1184aaa.js" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container">
    <div class="container-main">

      <!-- begin navbar -->

      <div class="navigation">
        <div class="nav-logo">
          <a href="/">
            <img src="assets/images/efairsorger_Logo_web.png" alt="eFairSorger Logo">
          </a>
        </div>

        <div class="nav-collapsed">
          <div id="nav-dropdown-btn" class="btn-main">
            NAVIGATION <i class="fas fa-chevron-down"></i>
          </div>

          <div id="nav-dropdown-menu" class="nav-dropdown-menu d-none">
            <ul>
              <li class="nav-underline"><a href="/">Home</a></li>
              <li class="nav-underline"><a href="about.html">Über uns</a></li>
              <li class="nav-underline"><a href="leistungen.html">Leistungen</a></li>
              <li class="nav-underline"><a href="service.html">Service</a></li>
              <!-- <li class="nav-underline"><a href="reviews.html">Kunden Meinungen</a></li> -->
              <li class="nav-underline"><a href="impressum.html">Kontakt</a></li>
            </ul>
          </div>

        </div>
        <div class="nav">
          <ul>
            <li class="nav-underline"><a href="/">Home</a></li>
            <li class="nav-underline"><a href="about.html">Über uns</a></li>
            <li class="nav-underline"><a href="leistungen.html">Leistungen</a></li>
            <li class="nav-underline"><a href="service.html">Service</a></li>
            <!-- <li class="nav-underline"><a href="reviews.html">Kunden Meinungen</a></li> -->
            <li class="nav-underline"><a href="impressum.html">Kontakt</a></li>
          </ul>
        </div>
      </div>

      <!-- end navbar -->

      <!-- carousel begin -->

      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="4000">
            <img src="assets/images/EF_Slider_1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block light-white-bg">
              <img src="/assets/images/EF_Icons_CI.png" alt="">
            </div>
          </div>

          <div class="carousel-item" data-interval="4000">
            <img src="assets/images/EF_Slider_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block light-white-bg">
              <h5 class="color-grey">DIE WAHRSCHEINLICH</h5> <h3 class="color-sec"> EINFACHSTE ART</h3><br>
              <h3 class="color-main">GELD ZU SPAREN</h3>
            </div>
          </div>

          <div class="carousel-item" data-interval="4000">
            <img src="assets/images/EF_Slider_3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="color-sec">ZAHLST</h3> <h3 class="color-grey">DU NOCH</h5><br>
                <h5 class="color-grey">ODER</h5> <h3 class="color-main">SPARST</h3> <h5 class="color-grey">DU SCHON?</h5>
              </div>
            </div>
          </div>

<!--           <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->
      </div>

      <!-- carousel end -->

      <!-- homepage content begin -->
      <div class="text-center">
        <div class="text-center content-small">
          <h1><span class="color-main">FAIR</span><span class="color-sec">-SPAR-</span><span class="color-grey">CHECK</span></h1>
          <p>Mit unserem Fair-Spar-Check verfolgen wir einen ganzheitlichen Ansatz zur Einsparung Deiner Haushaltsnebenkosten.</p>
          <img src="/assets/images/EF_Icons_CI.png" alt="">
        </div>
      </div>
      <div class="bordered-text">
        <div>
          <h3>Der Wechsel mit Gewinn. Für dich kostenlos</h3>
          <p class="italic">Lass Dich überraschen - wir checken - Du sparst</p>
        </div>
        <a href="/service.html" class="btn-main">Mehr Informationen</a>
      </div>
      <!-- <h3>UNSER SPECIAL</h3>
      <div class="vereinsspecial">
        <img src="/assets/images/sponsoring.jpg" alt="">
        <div>
          <p>
            <span class="color-main">WIR SPONSORN DEINEN VEREIN</span><br>
            In diesem Spiel ist jeder ein Sieger!<br>
            Du sparst dauerhaft - dein Verein kassiert <span class="fbold">10 Euro</span> Bonus. Mit deinem persönlichen Ansprechpartner aus dem Verein. Fordere gleich weitere Informationen an!
          </p>
          <div class="text-right">
            <a href="/sponsoring" class="btn-ghost">Informationen anfordern</a>
          </div>
        </div>
      </div> -->

      <!-- homepage content end -->

    </div>

    <!-- include footer -->
    <div w3-include-html="shared_html/footer.html" id="footer"></div>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- make including partials and content possible -->
  <script type="module" src="main.js"></script>
</body>
</html>

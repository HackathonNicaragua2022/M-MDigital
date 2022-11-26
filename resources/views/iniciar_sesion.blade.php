<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
        <title>OLPE</title>
        <link rel="shortcut icon" type=""    href="">
    
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
        <link rel="stylesheet" href="assets/css/owl.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
   
    
      </head>
<body>
    <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/welcome" class="logo">
                      <img src="assets\images\ol.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/welcome">Inicio</a></li>
                        <li><a href="/busco">Busco Trabajo</a></li>
                        <li><a href="/oferta">Ofertas</a></li>
                        <li><a href="/contacto">Contactar</a></li>
                        <li><a href="reservation.html"></a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>

   <!-- ***** Main Banner Area Start ***** -->
   <section id="section-1">
    
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              
              <canvas id="canva"></canvas>
    <div id="login-bo">
      <div class="estudiant"><a href="{{ route('register') }}"><i class="fa fa-user"></i> Registrarme</a></div>
    </div>

    <div class="main-caption">
      
        <div class="empres"><a href="{{ route('login') }}"><i class="fa fa-user"></i> Iniciar sesión</a></div>
      </div>
      
      
    </div>
           
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">

        
              <canvas id="canva"></canvas>
    <div id="login-bo">
      <div class="estudiant"><a href="{{ route('register') }}"><i class="fa fa-user"></i> Registrarme</a></div>
    </div>

    <div class="main-caption">
      
        <div class="empres"><a href="{{ route('login') }}"><i class="fa fa-user"></i> Iniciar sesión</a></div>
      </div>
      
      
    </div>
           
            
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              
              
              <canvas id="canva"></canvas>
    <div id="login-bo">
      <div class="estudiant"><a href="{{ route('register') }}"><i class="fa fa-user"></i> Registrarme</a></div>
    </div>

    <div class="main-caption">
      
        <div class="empres"><a href="{{ route('login') }}"><i class="fa fa-user"></i> Iniciar sesión</a></div>
      </div>
      
      
    </div>
            
          </div>
        </div>
        <div id="top-banner-4" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              
              <canvas id="canva"></canvas>
    <div id="login-bo">
      <div class="estudiant"><a href="{{ route('register') }}"><i class="fa fa-user"></i> Registrarme</a></div>
    </div>

    <div class="main-caption">
      
        <div class="empres"><a href="{{ route('login') }}"><i class="fa fa-user"></i> Iniciar sesión</a></div>
      </div>
      
      
    </div>
            
            </div>
          </div>
        </div>
      </div>
      <nav>
        
      </nav>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">WoOx Travel</a> Company. All rights reserved.
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a> Distribution: <a href="https://themewagon.com target="_blank" >ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>
  


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>
</body>
</html>
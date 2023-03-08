
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
        <title>Online Doctor</title>
    
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    
        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">
        <link rel="stylesheet" href="assets/css/animated.css">
        <link rel="stylesheet" href="assets/css/owl.css">
    <!--
    
    TemplateMo 563 SEO Dream
    
    https://templatemo.com/tm-563-seo-dream
    
    -->
    
    </head>
<body>
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
    

      <?php 
session_start();
?>


        <!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <h4>Online Doctor <img src="assets/images/logo-icon.png" alt=""></h4>  
            </a>
            <!-- ***** Logo End ***** -->            
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->      












      

    <div id="contact" class="contact-us section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">



              <form id="contact" action="login.inc.php" method="post">
                <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                    
                      <h2><span>Prijavi se</span></h2>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3"></div>
                      <div class="col-lg-6">


                        <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail" required="">
                        </fieldset>


                      </div>
                      <div class="col-lg-3"></div>
                      <div class="col-lg-3"></div>
                      <div class="col-lg-6">


                        <fieldset>
                          <input type="password" name="pwd" id="pwd" placeholder="Sifra" autocomplete="on" required>
                        </fieldset>


                      </div>
                      <div class="col-lg-3"></div>

                      <div class="col-lg-3"></div>
                      <div class="col-lg-6">


                        <fieldset>
                          <button type="submit" name="submit" id="submit" class="main-button ">Prijavljivajne</button>
                        </fieldset>


                      </div>
                      <div class="col-lg-3"></div>
                      <div class="col-lg-3"></div>
                      <div class="col-lg-6">
                        <fieldset>
                          <p> <a href="register.php">Nemas nalog?</a></p>
                        </fieldset>
                      </div>
                      <div class="col-lg-3"></div>
                      
                      
                    </div>
                  </div>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      
                  <?php 
                  if(isset($_GET["error"]))
                  {
                  if($_GET["error"]== "wronglogin")
                  {
                    echo "<h2>Pogresna kombinacija emaila i sifre</h2>";                   
                  }
                  }                  
                  ?>



      <?php 
      include_once 'footer.php';
      ?>
      
 <!-- Scripts -->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/js/owl-carousel.js"></script>
 <script src="assets/js/animation.js"></script>
 <script src="assets/js/imagesloaded.js"></script>
 <script src="assets/js/custom.js"></script>
</body>
</html>    
<?php include_once "db.inc.php"; ?>
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
              <ul class="nav">
              <li><a href='logout.inc.php'>Odjavi se</a></li>
              </ul>
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



              <form id="contact" action="posaljizahtev.inc.php" method="get">
                <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                    
                      <h2><span>Spisak doktora</span></h2>
                    </div>
                  </div>
                                 <table class="table table-striped">
                                 <tr class="bg-info">                                
                                 <th>Ime </th>
                                 <th>Prezime </th>
                                 <th>Email </th>        
                                 <th>Posalji zahtev</th>                           
                                 </tr>
                                 <?php                               

                                 $sql = "SELECT * FROM users WHERE usersType = 2;";           
                                 $result = $conn->query ($sql); 
                                 if($result ->num_rows > 0)
                                 {
                                 while($row =$result->fetch_assoc())
                                 {
                                     echo "<tr><td>".
                                     $row["usersName"].
                                     "</td><td>".
                                     $row["usersSurname"].
                                     "</td><td>".
                                     $row["usersEmail"].
                                     "</td><td>".
                                     "<button type='submit' name='submit' value='".$row["usersEmail"]."' id='submit' class='main-button '>Posalji zahtev</button>".
                                     "</td></tr>";
                                 }
                                 echo "</table>";
                                }
                                else
                                {
                                    echo "0 results";
                                }
                                 ?>
                                  
                  
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
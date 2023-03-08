


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
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Pocetna</a></li>
              <li class="scroll-to-section"><a href="#features">Kako poceti?</a></li>
              <li class="scroll-to-section"><a href="#about">O nama</a></li>
              <li class="scroll-to-section"><a href="#services">Primeri procedura</a></li>
              <!-- <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li> -->
             <!-- <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> -->
              <?php 
                  if(isset($_SESSION["userid"]))//ako je ulogovan
                  {                  
                  echo "<li><a href='izmenisebe.php'>".$_SESSION['username']." ".$_SESSION['usersurname']." ".$_SESSION['useremail']."</a></li>";                  
                  echo "<li><a href='logout.inc.php'>Odjavi se</a></li>";
                  
                    if($_SESSION["usertype"]==1)//pacijent
                    {
                      echo "<li class='scroll-to-section'><div class='main-blue-button'><a href='spisak.php'>Izaberite Svog Doktora!</a></div></li>"; 
                    }
                    else
                    {
                    if($_SESSION["usertype"]==2)//doktor
                    {
                      echo "<li class='scroll-to-section'><div class='main-blue-button'><a href='zahtevi.php'>Izaberite Svog Doktora!</a></div></li>";
                    }
                    else
                    {
                    if($_SESSION["usertype"]==3)//admin
                    {
                      echo "<li class='scroll-to-section'><div class='main-blue-button'><a href='admin.php'>ADMIN KOMANDE</a></div></li>";
                    }
                  }
                }
                  }
                  else //ako nije ulogovan
                  {
                    echo "<li class='scroll-to-section'><div class='main-blue-button'><a href='login.php'>Izaberite Svog Doktora!</a></div></li>"; 
                  }
              ?>


              
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
  <!-- ***** Header Area End ***** -->
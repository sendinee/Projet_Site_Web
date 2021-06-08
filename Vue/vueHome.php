
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>sneaker fashion time</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  <link rel="stylesheet" href="styleF.css">
</head>
<body>
  <!-- Barre de navigation -->
  <nav>
    <h1>sneaker fashion time</h1>
    <h1><b>Bienvenue <?php echo $_SESSION['prenom_client'] ?></h1>
    <div class="onglets">
      <!-- <a href="#">Nouveautés</a> -->
      <a href="#">Homme</a>
      <!-- <a href="#">Femme</a>  
      <a href="#">enfants</a>  
      <a href="#">contact</a> -->

      <a href="./home.php"><i class="fas fa-home"></i></a>
      <!--<i class="fas fa-shopping-cart"></i>-->
      <a href="./compte.php"><i class="fas fa-user"></i><a/>
      <a href="./Modele/deconnexion.php"><i class="fas fa-sign-out-alt"></i></a>
     
        <input type="search" placeholder="Rechercher">
      
    </div>
  </nav>
  <!-- Fin de la barre de navigation -->

  <!-- Header -->
   <header>
     <h1>C'est votre boutique,pour votre style </h1>
     <!-- <button>Naviguer <i class="fas fa-paper-plane"></i></button>
   </header> -->
  <!-- Fin du header -->

  <!-- Section principale -->
  <div class="main">

    <!-- Toutes les cartes -->

<?php
require_once("Controller/controller.php");
$unController = new Controller("localhost","projet1","root","");
$results=$unController->SelectSneak();
require_once("Vue/vueSneak.php");
?>
    <!-- <div class="cards">

      <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRB3Vk5VEsmwNQKn_dvXVrMED4A4T11R_Kasb3TPhdltubbhtFE10H-jQ8C_g6gNHI7nW1MnHb4&usqp=CAE">
        <div class="card-header">
          <h4 class="title">airforce1 </h4>
          <h4 class="price">109$</h4>
        </div>
        <div class="card-body">
          <p>air force 1 hommes</p>
        </div>
      </div>

      <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcS85o5J3uUOpusgtCr6vXf2DOBWyzYFPRMKbxHMzVeLEBzfLjmE1rMmOvUw7ENQ8EnS_oe5gawk&usqp=CAE">
        <div class="card-header">
          <h4 class="title">Nike dunk High varsity purple</h4>
          <h4 class="price">169$</h4>
        </div>
        <div class="card-body">
          <p>Des paires de chaussures stylées pour femme</p>
        </div>
      </div>

      <div class="card">
        <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcR-88MoqnMJ3FoiVKq1o5LrxNGNmQnyCIspAiww8_2FJwS3tjnb0to0Kth4kVAlZY1-mPivovLR&usqp=CAE">
        <div class="card-header">
          <h4 class="title">jordan 1 dark mocha</h4>
          <h4 class="price">39$</h4>
        </div>
        <div class="card-body">
          <p>Sport pour courir en plain air pour homme</p>
        </div>
      </div>
      <div class="card">
        <img src="https://stockx-360.imgix.net/Air-Jordan-1-Retro-High-Turbo-Green/Images/Air-Jordan-1-Retro-High-Turbo-Green/Lv2/img03.jpg?auto=format,compress&w=559&q=90&dpr=2&updated_at=1606324093">
        <div class="card-header">
          <h4 class="title">jordan 1 turbogreen</h4>
          <h4 class="price">549$</h4>
        </div>
        <div class="card-body">
          <p>jordan 1 turbogreen hommes</p>
        </div>
      </div>
      <div class="card">
        <img src="https://stockx-360.imgix.net/Air-Jordan-4-Retro-Off-White-Sail-W/Images/Air-Jordan-4-Retro-Off-White-Sail-W/Lv2/img01.jpg?auto=format,compress&w=559&q=90&dpr=2&updated_at=1607655526">
        <div class="card-header">
          <h4 class="title">jordan 4 sail</h4>
          <h4 class="price">919$</h4>
        </div>
        <div class="card-body">
          <p>jordan 4 sail hommes</p>
        </div>
      </div>
      <div class="card">
        <img src="https://stockx-360.imgix.net/Air-Jordan-1-Retro-High-Travis-Scott/Images/Air-Jordan-1-Retro-High-Travis-Scott/Lv2/img01.jpg?auto=format,compress&w=559&q=90&dpr=2&updated_at=1608736403">
        <div class="card-header">
          <h4 class="title">jordan 1 traviscott</h4>
          <h4 class="price">1219$</h4>
        </div>
        <div class="card-body">
          <p>jordan 1 turbogreen hommes</p>
        </div>
      </div>
      <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq2A5Z7O8Gd9FJxZMgyur_sc9WPfCyEGKivWCh8vMcZ8OjRqXSURdsj8x1IyojYdJVKk14W7M&usqp=CAc">
        <div class="card-header">
          <h4 class="title">jordan 1 fearless</h4>
          <h4 class="price">219$</h4>
        </div>
        <div class="card-body">
          <p>jordan 1 fearless hommes</p>
        </div>
      </div>
      <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThG9uLUiPQKeKHRgXtxotehNXz3EWR2PbYE0mDvTYi4TDt6-dVylk0ul3eNQdQvyDmZv9lW4yf&usqp=CAc">
        <div class="card-header">
          <h4 class="title">jordan 1  barely</h4>
          <h4 class="price">319$</h4>
        </div>
        <div class="card-body">
          <p>jordan 1  barely hommes</p>
        </div>
      </div>
      <div class="card">
        <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcR2CMxTaHHJLr6u2QERz9evgQHTrqtCc0mUI_8OWi5bKhOY39YA_tnm2u067JVRhuJqr6-JFt0j6Q&usqp=CAE">
        <div class="card-header">
          <h4 class="title">jordan 1 chicago</h4>
          <h4 class="price">1219$</h4>
        </div>
        <div class="card-body">
          <p>jordan 1 chicago hommes</p>
        </div>
      </div>

     </div> -->
    <!-- Fin de toutes les cartes -->

    <!-- Video de presentation -->
    <div class="video">
      <iframe src="https://www.youtube.com/embed/2COSkxxOtXY" allowfullscreen></iframe>
    </div>
    <!-- Fin de la video de presentation -->
  </section>
  <!-- Fin de la section principale -->

  <!-- Pied de page -->
  <footer>
    <p>&copy; Contactez-nous au 06 22 81 96 99</p>
    <div class="social-media">
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
      <p><i class="fab fa-instagram"></i></p>
      <p><i class="fab fa-linkedin-in"></i></p>
    </div>
  </footer>
  <!-- Fin du pied de page -->
</body>
</html>
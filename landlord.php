<?php
session_start();
?>



<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Vijiji Digital</title>
  <meta name="description" content="Free Bootstrap 4 Theme by uicookies.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="icon" href="images/vdLogo.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap-grid-landlord.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/select2.css">


  <link rel="stylesheet" href="css/helpers.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet " href="css/landlordStyle.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="images/vdLogo.png" width="60px" height="60px">Vijiji Digital</a>



      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu"
        aria-expanded="false" aria-label="Toggle navigation">
        <span>
          <i class="ion-navicon"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="probootstrap-menu">
        <ul class="navbar-nav ml-auto">
        
          <li class="nav-item">
            <a class="nav-link" onclick="editprofileLandlord()" >edit profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
          </li>
          <li class="nav-item"></li>
        </ul>

      </div>

    </div>
    
    
  </nav>

  
        </div>



<?php
if ($_SESSION['active']==false){
  header("location: loggedoutLandlord.html");
echo'
  <div class="row">
  You are logged out
  </div>';

}
?>

  <section class="probootstrap-cover overflow-hidden relative" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5"
    id="section-home">
    <div class="overlay"></div>
    <div class="container">
   
        
          <?php
          echo'
          <li class="details">Apartment Name: '.$_SESSION["Apartment_name"].'</li>
          <li class="details">LandLord: '.$_SESSION["Username"].'</li>';
          ?>

      <div class="row ">
        <div class="col-md-3" "navigate">
          <ul class="side-navigation">
            <li class="li-navigate" class="myAnchor" onclick="noticeBoard()"> Notice board</li>
            <li  class="li-navigate"  onclick="chats()" class="myAnchor">  Chats</li>
            <li  class="li-navigate" onclick="addTenants()" class="myAnchor">  Add tenants</li>
            <li  class="li-navigate" onclick="createNotice()" class="myAnchor">  Create notice</li>
            <li  class="li-navigate" onclick="viewTenants()" class="myAnchor">  View tenants</li>
          </ul>
        </div>
        <div class="col-md-9 " bgcolor="blue">

          <iframe id="myFrame"  width="100%" class="myFrame"  >
          </iframe>
          

            
          
           </div>
        </div>

  </section>
  <section class="probootstrap-cover overflow-hidden relative" style="background-color: black;" data-stellar-background-ratio="0.5">
this is the footer section

  </section>
  <!-- END section -->
  <script src="js/jquery.min.js"></script>
 
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>

  <script src="js/select2.min.js"></script>

  <script src="js/main.js"></script>
  <script src="js/landlord.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <div class="row topnav">
  <div class="container">
    <div class="col-md-8 col"></div>
    <div class="col-md-4 col">
    <span class="glyphicon glyphicon-earphone"></span>
  <span class="word1">Tel:01-5535152 |</span>
  <span class="glyphicon glyphicon-envelope"></span>
  <span class="word1">E-mail:info@hfc.com</span>
  </div></div></div>


  <div class="row">
  <div class="container">
  <img src="img/logo.png">
  </div>
  </div>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="#navbar" aria-expanded="false">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  </div>

  <div class="collapse navbar-collapse" id="navbar">
  <ul class="nav navbar-nav navbar-left">
  <li><a href="http://localhost:8000/">HOME</a></li>
  <li><a href="http://localhost:8000/pricesandpackages">PRICES AND PACKAGES</a></li>
  <li><a href="http://localhost:8000/gallery">GALLERY</a></li>
  <li><a href="http://localhost:8000/shop">SHOP</a></li>
  <li><a href="http://localhost:8000/onlinepayment">ONLINE PAYMENT</a></li>
  <li><a href="http://localhost:8000/aboutus">ABOUT US</a></li>
  </ul>

  <div class="collapse navbar-collapse" id="navbar">
  <ul class="nav navbar-nav navbar-right">
  <li><a href="http://localhost:8000/login">LOGIN</a></li>
  <li><a href="http://localhost:8000/register">REGISTER</a></li>
  </ul>
  </div>
  </div>
  </nav>

@yield('content')


  <hr/>
  <div class="row">
    <div class="container">
  <div class="word">
  <div class="col-md-3 col">
  <h4>HUSTLE FITNESS CENTER</h4>
  Hustle Fitness Center is Nepal's first and only fully equipped functional fitness gym.
   A one stop solution to all fitness needs with a world class facility​, state of the art
    equipment and highly experienced and certified instructors.
  </div>
  <div class="col-md-3 col text-center">
    <h4>GET CONNECTED WITH US</h4>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
      </div>
  <div class="col-md-3 col">
  <h4>CONTACT INFORMATION</h4>
  Ratamakaichowk,lalitpur<br/>
  E-mail:info@hfc.com<br/>
  Tel:01-5535152
  </div>
  <div class="col-md-3 col">
  <h4>WE ARE OPEN</h4>
  Sun-Fri:6:00-20:30<br/>
  Sat:9:00-12:00

  </div>
  </div>
  </div>
  </div>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  </html>

<!DOCTYPE html>
  <?php include('loginvalid.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome To Airline Reservation System</title>
    <link rel="stylesheet" href="./../css/homestyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/e4eecd86d3.js"></script>
   </head>
  <body>
  <section class="header">
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img class="img" src="../images/travel.png">Airline reservation system</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <?php if(isset($_SESSION['uname'])): ?>
        <a class="nav-link" id="user" href="#"><?php echo "Welcome " .$_SESSION['uname']; ?></a>
      <?php endif ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usersearch.php"><i class="fa fa-plane" aria-hidden="true"></i>flight schedules</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>about us</a>
      </li>
      <?php if(isset($_SESSION['uname'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="ticket.php"><i class="fas fa-receipt" aria-hidden="true"></i>Your Bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user profile.php"><i class="fa fa-address-card" aria-hidden="true"></i>Your profile</a>
        </li>
      <li class="nav-item">
        <a class="nav-link"  href="homepage.php?homelogout='1'" ><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a>
      </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="signin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a>
        </li>
      <?php endif ?>
    </ul>
  </div>
</nav>
    </section>
    <video  autoplay loop class="video-bg" muted plays-inline>
      <source src="../assets/videou.mp4" type="video/mp4">
    </video>
    <div class="welcome-msg">
      <h1>Welcome to Flight Ticket Reservation</h1>
      <p>We are a flight ticket booking agency, makes people hassel free ticket reservation to commute.</p>
      <a href="usersearch.php" class="btn btn-book">Book Now</a>
    </div>
    <img src="../images/whitewaves.png" class="fluid">
  </section>
  <section id="services">
    <div class="container">
    <div class="row">
    <div class="col-md-3">
    <div class="icon">
      <i class="fa fa-money" aria-hidden="true"></i>
    </div>
    <h4>Hassle free transaction</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-md-3">
    <div class="icon">
      <i class="fa fa-shield" aria-hidden="true"></i>
    </div>
    <h4>Secure</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-md-3">
    <div class="icon">
      <i class="fa fa-credit-card" aria-hidden="true"></i>
    </div>
    <h4>Easy refunds</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-md-3">
    <div class="icon">
      <i class="fa fa-user-secret" aria-hidden="true"></i>
    </div>
    <h4>User privacy</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    </div>
    </div>
  </section>
  <section id="carousel">
    <div class="car">
      <h3 >Offers hard to refuse</h3>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/flight.jpg" class="img">
    </div>
    <div class="carousel-item">
      <img src="../images/hotel.jpg" class="img">
    </div>
    <div class="carousel-item">
      <img src="../images/free.jpg" class="img">
    </div>
    <div class="carousel-item">
      <img src="../images/flat.jpg" class="img">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
  </section>
  <section id=bestsellers>
    <h3>Our Bestsellers</h3>
    <div class="row justify-content-center">
    <div class="col-md-3">
        <div class="card shadow style="width:20rem"; >
          <div class="inner">
          <img class="card-img-top" src="../images/hyderabad.jpg" alt="">
          </div>
          <div class="card-body text-center">
            <h5>Hyderabad</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="Usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow style="width:20rem"; >
          <div class="inner">
          <img class="card-img-top" src="../images/temple.jpg" alt="">
          </div>
          <div class="card-body text-center">
            <h5>Chennai</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow style="width:20rem"; >
          <div class="inner">
          <img class="card-img-top" src="../images/kerala.jpg" alt="">
          </div>
          <div class="card-body text-center">
            <h5>Kerala</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="Usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow style="width:20rem"; >
          <div class="inner">
          <img class="card-img-top" src="../images/Mumbai.jpg" alt="">
        </div>
          <div class="card-body text-center">
            <h5>Mumbai</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="Usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section id="promo">
    <div class="text">
      <i class="fas fa-plane-departure"></i>
      <p><strong>Come.<br>Fall in love at First Flight</strong></p>
    </div>
    <div class="promotion">
    <video autoplay loop class="vid" muted plays-inline>
      <source src="../assets/first-flight.mp4" type="video/mp4">

    </video>
      </div>
  </section>
<section class="footer">
  <?php include('footer.php');?>
</section>

  </body>
</html>

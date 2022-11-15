
<!DOCTYPE html>
<?php include('loginvalid.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Sign In</title>
    <link rel="stylesheet" href="./../css/esignin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/e4eecd86d3.js"></script>
  </head>
  <body>

    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img class="img" src="../images/travel.png">Airline reservation system</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">

    </ul>
  </div>
</nav>
    </section>
    <section>
      <div class="page-wrap">
        <div class="left-panel">
          <div class="illustration">
            <img src="../assets/employee.svg"  alt="">
          </div>
        </div>
        <div class="right-panel">
          <div class="animated-form">
            <h3>Admin sign in </h3>
            <form class="form" method="post">
              <?php if(isset($_SESSION['register'])): ?>
              <div class="alert alert-success" role="alert">
               <?php echo $_SESSION['register'];
              unset($_SESSION['register']);
              session_destroy();?>
              </div>
            <?php endif ?>
            <?php include('uerrors.php'); ?>
              <div class="form-group">
                <label for="uname"><i class="fas fa-user-shield"></i></i>Username</label>
              <input type="text" id="uname" name="E_name" required >
              </div>
            <div class="form-group">
              <label for="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Password</label>
              <input type="password" id="E_password" name="E_password" required class="password" />
              </div>
              <div class="row">
              <div class="col">
              <div class="form-group flex-end">
                <button type="submit" class="button" name="dbutton"><i class="fas fa-database"></i>Access Database</button>
              </div>
              </div>
              <div class="col">
              <div class="form-group flex-end">
                <button type="submit" class="button" name="pbutton"><i class="fas fa-search"></i>Search Passenger</button>
              </div>
              </div>
              </div>

              </form>

          </div>
        </div>
      </div>

    </section>
    <section class="footer">
  <?php include('footer.php');?>
</section>
  </body>
</html>

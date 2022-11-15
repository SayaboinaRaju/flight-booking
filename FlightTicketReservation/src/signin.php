
<!DOCTYPE html>
<?php include('loginvalid.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <li class="nav-item">
        <a class="nav-link" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-plane" aria-hidden="true"></i>flight schedules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>about us</a>
      </li>
    </ul>
  </div>
</nav>
    </section>
    <section>
      <div class="page-wrap">
        <div class="left-panel">
          <div class="illustration">
            <img src="../assets/bg.svg"  alt="">
          </div>
        </div>
        <div class="right-panel">
          <div class="animated-form">
            <h3>Sign in to your account</h3>
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
                <label for="uname"><i class="fa fa-user" aria-hidden="true"></i>Username</label>
              <input type="text" id="uname" name="uname" required >
              </div>
            <div class="form-group">
              <label for="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Password</label>
              <input type="password" id="password" name="password" required class="password" />
              </div>
              <div class="form-group flex-end">
                <button type="submit" class="button" name="button">Sign In</button>
              </div>
              <div class="No-account">
                <a href="signup.php" class="link">Don't have account?Sign Up</a>
              </div>
              <div class="change-pwd">
                <a href="changepassword.php" class="link">Fogot password?</a>
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

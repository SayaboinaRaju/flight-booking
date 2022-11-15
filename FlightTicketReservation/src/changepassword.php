<?php require("./db/server.php");?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Change password</title>
    <link rel="stylesheet" href="./../css/changepassword.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="homepage.php"><img class="img" src="../images/travel.png">Airline reservation system</a>
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
            <img src="../assets/regist.svg"  alt="">
          </div>
        </div>
        <div class="right-panel">
          <div class="animated-form">
            <h3>Change password</h3>
            <form class="form" method="post">
              <?php change_password(); ?>
              <br>

              <br>
              <div class="form-group">
                <label for="Eid"><i class="fa fa-envelope" aria-hidden="true"></i>Email Id</label>
              <input type="email" id="eid" name="eid" required >
              </div>
              <div class="form-group flex-end">
                <button type="submit" class="button" name="change">submit</button>
              </div>
              <div class="No-account">
                <a href="signin.php" class="link">Have an account?Sign In</a>
              </div>
              <div class="No-account">
               <a href="signup.php" class="link">Don't have account?Sign Up</a>
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
  <?php
  function change_password(){
    if (isset($_POST['change'])){
      require("/db/server.php");
      $eid = mysqli_real_escape_string($db,$_POST['eid']);
      if (validate_email()){
        $pwd = generate_password();
        $query="UPDATE us SET password='$pwd' WHERE eid ='$eid'";
        $results=mysqli_query($db,$query);
        pwd_sendmail($pwd);
        echo '<h5 style="color:green;">A random password has been sent to your registered mail. Kindly login with it and
         update your password at "your profile" </h5';
      }
      else
        echo '<h5 style="color:red;">Oops you dont seem have a registered account. Please create an account!</h5>';
    }
  }
  function generate_password() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
function pwd_sendmail($pwd){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: irctc12102020@gmail.com' . "\r\n";
  $bodymsg = $pwd;
  mail('laxmanbalaraman@gmail.com', "Request for password change", $bodymsg, $headers);
}
function validate_email(){
  require("/db/server.php");
  $eid = mysqli_real_escape_string($db,$_POST['eid']);
  $query="SELECT * FROM us WHERE eid ='$eid'";
  $results=mysqli_query($db,$query);
  return mysqli_num_rows($results);
}
   ?>
</html>

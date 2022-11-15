<!DOCTYPE html>
<?php session_start();?>
<html>
  <head>
    <title>Your profile</title>
    <link rel="stylesheet" href="./../css/user profile.css">
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
    <section class="user_profile">
      <?php
      if (isset($_SESSION['uname'])){
        require("./db/server.php");
      $query="SELECT * FROM users WHERE uname = '{$_SESSION['uname']}'";
      $results=mysqli_query($db,$query);
      if (mysqli_num_rows($results)){
        $row =  mysqli_fetch_assoc($results);
      }
      else {
        echo "no such user found user";
      }
      }
       ?>
       <?php
       function update(){
       if (isset($_POST['update'])){
        require("./db/server.php");
         $name = mysqli_real_escape_string($db,$_POST['name']);
         $pwd = mysqli_real_escape_string($db,$_POST['pwd']);
         $cpwd = mysqli_real_escape_string($db,$_POST['cpwd']);
         $dob = mysqli_real_escape_string($db,$_POST['dob']);
         if ($pwd == $cpwd){

           $query="UPDATE us SET name = '$name', password = '$pwd', dob = '$dob'  WHERE uname = '{$_SESSION['uname']}'";
           $results=mysqli_query($db,$query);
           echo '<h4 align="center" style="color:green;" >Profile updated successfully</h4>';
         }
         else{
           echo '<h4 align="center" style="color:red;" >Password does not match</h4>';
         }
       }
}
        ?>
       <div class="profile">
        <br>  <h1 align="center">Edit Your profile</h1><br>
         <form class="change-profile"  method="post">
           <?php update(); ?>
           <label for="name">Name</label><input  type="text" class="input-group input-group-sm" name="name" required value="<?php if(isset($_SESSION['uname'])){echo $row['name']; } ?>"><br>
           <label for="eid">Email ID</label><input disabled type="email" class="input-group input-group-sm" name="eid"  value="<?php if(isset($_SESSION['uname'])){echo $row['eid']; } ?>"><br>
           <label for="dob">DOB</label><input type="date" class="input-group input-group-sm" name="dob"  required value="<?php if(isset($_SESSION['uname'])){echo $row['dob']; } ?>"><br>
           <label for="pwd">New password</label><input  type="text" class="input-group input-group-sm"  name="pwd"  ><br>
           <label for="cpwd">confirm password</label><input  type="text" class="input-group input-group-sm"  name="cpwd"  ><br>
           <center><input type="submit" class="btn btn-info" name="update" value="Update"></center>
         </form><br>
      </div>

    </section>


    <section class="footer">
  <?php include('footer.php');?>
</section>
  </body>
</html>

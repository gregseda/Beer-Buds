<!DOCTYPE html>
<html lang = "en">
  <head>
    <link rel="stylesheet" type="text/css" href="1SignUp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title> Register </title>
    <meta charset = "utf-8" />
  </head>
  <body>

  <div class="page-header">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTudmqgPLcstgPENFzbTil71xx3i4A-uQI1JSdbTeTecpL3OEn0_g" alt="beer">
    <h1> Beer Buds Register User </h1>
  </div>

    <!-- Here is the navbar at the top, right below the header-->
  <div class="topnav">
  <a href="home3.php">Home</a>
  <a href="blog.php">Blogs</a>
  <a href="gallery.php">Gallery</a>
  <a href="SearchPage.php">Search</a>
  <?php
  session_start();
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){?>
  <a href="0LogOut.php">Log Out</a>
  <a href="#"> Logged in as: <?php echo $_SESSION["username"]; ?></a>
  <?php }

  else
  {?> <a href="0LogIn.php">Log In</a>
  <?php } ?>

  <?php
if(isset($_SESSION['reg_success']) && $_SESSION['reg_success'] == 1){ ?>
    <script type="text/javascript">
        alert('Registration Successful!');
    </script>
<?php } ?>


    <form action="1register.php" method="POST">
      <h1>Register </h1>
        <div class="container">
          <label>First Name
            <input type="FName" placeholder="First Name" id="firstName" name="firstName" required/>
          </label>
          <label>Last Name
            <input type="LName" placeholder="Last Name" id="lastName" name="lastName" required/>
          </label>
          <label>Enter Email
            <input type="Email" placeholder="Email" id="email" name="email" required/>
          </label>
          <label><b>Username</b>
            <input type="username" placeholder="Enter Username" id="username" name="username" required>
          </label>
          <label><b>Password</b>
            <input type="password" placeholder="Enter Password" id="password" name="password" required>
          </label>
          <label><b>Confirm Password</b>
            <input type="password" placeholder="Enter Password" id="cpassword" name="cpassword" required>
          </label>
          <br /><br />
            <input type = "reset" name = "reset" />
            <input type="submit" value="Submit"/>
      </div>
    </form>
    <?php if (isset($sucessmsg)){ ?> <div class="alert alert-success" role="alert"> <?php echo $sucessmsg; ?> </div> <?php } ?>
    <?php if (isset($failmsg)){ ?> <div class="alert alert-danger" role="alert"> <?php echo $failmsg; ?> </div> <?php } ?>
  </body>
</html>

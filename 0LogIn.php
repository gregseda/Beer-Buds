<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="0LogIn.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="page-header">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTudmqgPLcstgPENFzbTil71xx3i4A-uQI1JSdbTeTecpL3OEn0_g" alt="beer">
      <h1>Beer Buds Log In</h1>
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
  
    <form action="0checklogin.php" method="post">
      <h1>Login</h1>
      <div class="container">
        <label><b>Username</b>
          <input type="username" placeholder="Enter Username" id="username" name="username" required>
        </label>
        <br /><br />
        <label><b>Password</b>
          <input type="password" placeholder="Enter Password" id="password" name="password" required>
        </label>
        <br /><br />
        <input type="submit" value="Submit"/>
        <br />
        <span class= "StyleSignUp"><a href="1SignUp.php"><h2>Register</h2></a></span>

      </div>

      </form>
    </body>
</html>

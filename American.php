<!DOCTYPE html>
<!--
Diego Yanez
CIS 444
10/24/17

WEB Pages Project: American
-->
<html lang = "eng">
<head>
<meta charset = "utf-8" />
<title>American Beer</title>

<link rel = "stylesheet" type = "text/css" href = "americanFont.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type = "text/javascript" src = "americanFunc.js"></script>

</head>

<body>

  <div class="page-header">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTudmqgPLcstgPENFzbTil71xx3i4A-uQI1JSdbTeTecpL3OEn0_g" alt="beer">
    <h1>Beer Search </h1>
  </div>
  
    <!-- Here is the navbar at the top, right below the header-->
  <div class="topnav">
  <a href="home3.php">Home</a>
  <a href="blog.php">Blogs</a>
  <a href="gallery.php">Gallery</a>
  <a class = "active" href ="SearchPage.php">Search</a>
  <?php 
  session_start();
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){?>
  <a href="0LogOut.php">Log Out</a>
  <a href="#"> Logged in as: <?php echo $_SESSION["username"]; ?></a>
  <?php }

  else
  {?> <a href="0LogIn.php">Log In</a>
  <?php } ?>


  </div>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<ul id="myUL">
  <li><a href="#">Budweiser</a></li>
  <li><a href="#">BudLight</a></li>
  <li><a href="#">MillerLight</a></li>
  <li><a href="#">CoorsLight</a></li>
  <li><a href="#">Miller</a></li>
  <li><a href="#">Coors</a></li>
</ul>

</body>
</html>

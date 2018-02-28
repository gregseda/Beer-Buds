<!DOCTYPE html>

<!--
Group B
gallery.html
-->

<html>


<div class="container">

<head>
  <title> Beer Buds </title>
  <meta charset="utf-8">  
  <link rel="stylesheet" href="gallery.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
  
  <!-- Top of page -->
    <div class="page-header">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTudmqgPLcstgPENFzbTil71xx3i4A-uQI1JSdbTeTecpL3OEn0_g" alt="beer">
    <h1>Beer Buds Gallery </h1>
  </div>

  <div class="topnav">
  <a href="home3.php">Home</a>
  <a href="blog.php">Blogs</a>
  <a class= "active" href="gallery.php">Gallery</a>
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

  </div>

<body>

<div id="gallery"><!--begin Gallery-->
  <br \><br \>
<div class="row"><!-- begin Row 1-->

<div class="cell"><!--begin cell 1-->

<a href="lager.php">
<p align= "center">Lagers</p>
<img src="lager.jpg" width="448" height="298" alt="lager" >
</a>
</div> <!--end cell 1-->

<div class="cell"><!--begin cell 2-->
<a href="ale.php">
<p align= "center">Ales</p>
<img src="ale.jpg" width="448" height="298" alt="lager">
</a>
</div> <!--end cell 2-->



</div><!--end Row 1-->

</div><!--end of Gallery-->

</body>

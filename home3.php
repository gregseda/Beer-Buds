<!DOCTYPE html>
<html lang="en">

  <head> 
    <title> Beer Buds </title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="homestyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>

<div class="page-header">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTudmqgPLcstgPENFzbTil71xx3i4A-uQI1JSdbTeTecpL3OEn0_g" alt="beer">
    <h1>Beer Buds</h1>
  </div>

<div class="topnav">
  <a class="active" href="home3.php">Home</a>
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

  <!-- Another way to use it, will not work on chrome though

  <p class="navbar-text">  Logged in as: <?php echo $_SESSION["username"]; ?> </a> -->


</div>

    <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <h1 class="events_title"> Events </h1><br />
      <p>Suds and Science @ Wavelength Brewing</p>
      <p>Mike Hess Brewing Cask</p>
      <p>Alpine Beer Night @ Pizza Port</p>
      <p>Pinball in the Brewery @ Pizza Port</p>
      <p>Craft and Draft 2017</p>
      <p>Brewing Good Holiday Cheer Annual Party</p>
      <p>Belgium New Years @ Second Chance Brewery</p>
    </div>

  
     <div class="col-sm-8 text-left"> 
       <h1 class="beers_title">Beers</h1>
       <div class="beer-nav">
      <p><a href="lager.php">Lagers</a></p>
      <p><a href="ale.php">Ales</a></p>
     <!-- <p><a href="#">Beer 3</a></p>
-->    
</div>

      <hr>

	 <p class="welcome"> Welcome to Beer Buds! </p>
	 <p> Beer Buds is a place where beer lovers	
		can meet and talk about what they love. Make a blog!
		Peruse our galleries! Rate all of the beers! Look for 
		events to meet fellow beer lovers at.Enjoy your stay!
	</p>
      
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <a href="ale.php">
          <img src="ale2.jpg" style="width:155px;height:175px;" alt="ale"> </a>
      </div>
      <div class="well">
        <a href="lager.php">
	<img src="lager2.jpg" style="width:155px;height:175px;" alt="lager"> </a>
      </div>
    </div>
 </div>
</div>

  </body>
    </html>

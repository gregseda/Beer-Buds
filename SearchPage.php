<!DOCTYPE html>

<html lang = "eng">
<head>
  <meta charset = "utf-8" />
  <title>Beer Buds Search</title>

  <link rel = "stylesheet" type = "text/css" href = "searchFont.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!--
  <script type = "text/javascript" src = "searchFunc.js"></script>
-->

</head>

<body>

  <div class="page-header">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTudmqgPLcstgPENFzbTil71xx3i4A-uQI1JSdbTeTecpL3OEn0_g" alt="beer">
    <h1>Beer Search</h1>
  </div>



    <!-- Here is the navbar at the top, right below the header-->
  <div class="topnav">
  <a href="home3.php">Home</a>
  <a href="blog.php">Blogs</a>
  <a href="gallery.php">Gallery</a>
  <a class = "active" href="SearchPage.php">Search</a>
   <a href="0LogIn.php">Log In</a>
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

<h2>Search for beers by name: </h2>
<form align="left">

<input type="text" id = "beer" value="" onclick="mySearch()">

<input type="button" value="Search" onclick="mySearch()">


<script>

function mySearch()
{
var input = document.getElementById("beer").value;

if (input=="lager" || input=="lagers" || input=="Lager" || input=="Lagers" || input=="budweiser" || input=="Budweiser" || input=="PBR" || input=="pbr" || input=="coors" || input=="Coors" || input=="genessee" || input=="Genessee" || input=="becks" || input=="Becks" || input=="radeberger" || input=="Radeberger" || input=="amstel" || input=="Amstel" || input=="stella artois" || input=="Stella Artois" || input=="harpon dunkel" || input=="Harpon Dunkel" || input=="hofbrow dunkel" || input=="Hofbrow Dunkel" || input=="spaten dunkel" || input=="Spaten Dunkel" || input=="shiner" || input=="Shiner" || input=="anchor bock" || input=="Anchor Bock" || input=="la trappe" || input=="La Trappe" || input=="yuengling bock" || input=="Yuengling Bock" || input=="stella" || input=="Stella" || input=="harpon" || input=="Harpon" || input=="hofbrow" || input=="Hofbrow" || input=="spaten" || input=="Spaten" || input=="trappe" || input=="Trappe" || input=="yuengling" || input=="Yuengling")
    {
      window.location.assign("http://cis444.cs.csusm.edu/group_B/lager.php")
    }

    else if(input == "ales" || input =="ale" || input =="Ale" || input =="Ales" || input =="Sierra Nevada" || input =="sierra nevada" || input =="anchor" || input =="Anchor" || input =="Stone"|| input =="stone" || input =="Dogfish" || input =="dogfish" || input =="dogfish head" || input =="Dogfish" || input =="Dogfish Head" || input =="Hog Heaven" || input =="hog heaven" || input =="hog" || input =="old horizontal" || input =="Old Horizontal" || input =="old" || input =="horizontal" || input =="great lakes" || input =="Great Lakes" || input =="great" || input =="founders" || input =="Founders" || input =="black butte" || input =="Black Butte" || input =="Brasserie Cantillion" || input =="Brasserie" || input =="Cantillon" || input =="Upland" || input =="upland" || input =="Lindemans" || input =="lindemans")
   {
      window.location.assign("http://cis444.cs.csusm.edu/group_B/ale.php")
   }

   else if(input == "blog" || input =="Blog" || input =="Blogs" || input =="blogs")
   {
      window.location.assign("http://cis444.cs.csusm.edu/group_B/blog.php")
   }

   else if(input == "home" || input =="Home")
   {
      window.location.assign("http://cis444.cs.csusm.edu/group_B/home3.php")
   }


   else if(input == "gallery" || input =="Gallery")
   {
      window.location.assign("http://cis444.cs.csusm.edu/group_B/gallery.php")
   }

else if(input == "log in" || input =="Log In" || input == "login" || input == "Login")
   {
      window.location.assign("http://cis444.cs.csusm.edu/group_B/0LogIn.php")
   }

else if(input == "post" || input =="Post")
   {
      window.location.assign("http://cis444.cs.csusm.edu/group_B/3postcomment.php")
   }

}


</script>


</form>
<h3>Or click a category to view the inventory for each.</h3>
<ul id = "myUL">
  <li><a href="lager.php">Lagers</a></li>
  <li><a href="ale.php">Ales</a></li>
 <!-- <li><a href="Mexican.html">Mexican</a></li>
-->
</ul>

</body>


<!DOCTYPE html>

<!--
Group B
lager.html
-->

<html>


<div class="container">

<head>
   <title> Beer Buds </title>
  <meta charset="utf-8">  
  <link rel="stylesheet" href="gallery.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="starrating.css">

</head>
  
  <div class="page-header">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTudmqgPLcstgPENFzbTil71xx3i4A-uQI1JSdbTeTecpL3OEn0_g" alt="beer">
    <h1>Beer Buds Gallery </h1>
  </div>
  
    <!-- Here is the navbar at the top, right below the header-->
  <div class="topnav">
  <a href="home3.php">Home</a>
  <a href="blog.php">Blogs</a>
  <a class = "active" href="gallery.php">Gallery</a>
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
<h2>Lagers</h2>
<div id="gallery"><!--begin Gallery-->

<div class="row" id="american"><!-- begin Row 1-->

<div class="cell pic"><!--begin cell 1 r1-->
<p align= "center">American Lagers</p>
<img src="AmericanLager.jpg" width="300" height="165" alt="American Lager">
</div> <!--end cell 1 r1 -->

<div class="cell character"><!--begin character-->
<table>
<caption>Character</caption>

<tr>
<th scope="row">Body:</th>
<td>Full, Light Balanced</td>
</tr>

<tr>
<th scope="row">ABV:</th>
<td>4.5 - 5.5%</td>
</tr>

</table>
</div><!--end character-->

<div class="cell"><!--begin cell 2 row 1-->
<table>
<tr>
	<th scope="col">Brands</th>
	<th scope="row">Ratings</th>
</tr>

<tr><!--Budweiser start-->
<th scope="row">Budweiser</th>
<td>
<form>
  <div class="rating one">
    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Terrible"><span>&#9733</span></label>
  </div>
</form>
  
</td>
</tr><!--Budweiser end-->

<tr><!--PBR start-->
<th scope="row">PBR</th>
<td>
  <div class="rating two">
    <input type="radio" id="star5-2" name="rating2" value="5" /><label for="star5-2" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-2" name="rating2" value="4" /><label for="star4-2" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-2" name="rating2" value="3" /><label for="star3-2" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-2" name="rating2" value="2" /><label for="star2-2" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-2" name="rating2" value="1" /><label for="star1-2" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--PBR end-->


<tr><!--Coors start-->
<th scope="row">Coors</th>
<td>
<div class="rating three">
    <input type="radio" id="star5-3" name="rating3" value="5" /><label for="star5-3" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-3" name="rating3" value="4" /><label for="star4-3" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-3" name="rating3" value="3" /><label for="star3-3" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-3" name="rating3" value="2" /><label for="star2-3" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-3" name="rating3" value="1" /><label for="star1-3" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Coors end-->

<tr><!--Genessee start-->
<th scope="row">Genessee</th>
<td>
<div class="rating four">
    <input type="radio" id="star5-4" name="rating4" value="5" /><label for="star5-4" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-4" name="rating4" value="4" /><label for="star4-4" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-4" name="rating4" value="3" /><label for="star3-4" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-4" name="rating4" value="2" /><label for="star2-4" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-4" name="rating4" value="1" /><label for="star1-4" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Genessee end-->

</table>

</div><!--end cell 2 row 1-->

</div><!--end Row 1-->


<div class="row" id="pillsner"><!-- begin Row 2-->

<div class="cell pic"><!--begin cell 1 r2-->
<p align= "center">Pillsner</p>
<img src="pillsner.jpg" width="165" height="165" alt="pillsner">
</div> <!--end cell 1 r2-->

<div class="cell character"><!--begin character-->
<table>
<caption>Character</caption>

<tr>
<th scope="row">Body:</th>
<td>Very Light,Distinct Hops</td>
</tr>

<tr>
<th scope="row">ABV:</th>
<td>4.5 - 5.0%</td>
</tr>

</table>
</div><!--end character-->


<div class="cell"><!--begin cell2 row 2-->
<table>
<tr>
	<th scope="col">Brands</th>
	<th scope="row">Ratings</th>
</tr>

<tr><!--Beck's start-->
<th scope="row">Beck's</th>
<td>
<div class="rating five">
    <input type="radio" id="star5-5" name="rating5" value="5" /><label for="star5-5" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-5" name="rating5" value="4" /><label for="star4-5" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-5" name="rating5" value="3" /><label for="star3-5" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-5" name="rating5" value="2" /><label for="star2-5" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-5" name="rating5" value="1" /><label for="star1-5" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Beck's end-->

<tr><!--Radeberger start-->
<th scope="row">Radeberger</th>
<td>
<div class="rating six">
    <input type="radio" id="star5-6" name="rating6" value="5" /><label for="star5-6" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-6" name="rating6" value="4" /><label for="star4-6" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-6" name="rating6" value="3" /><label for="star3-6" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-6" name="rating6" value="2" /><label for="star2-6" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-6" name="rating6" value="1" /><label for="star1-6" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Radeberger end-->


<tr><!--Amstel start-->
<th scope="row">Amstel</th>
<td>
<div class="rating seven">
    <input type="radio" id="star5-7" name="rating7" value="5" /><label for="star5-7" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-7" name="rating7" value="4" /><label for="star4-7" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-7" name="rating7" value="3" /><label for="star3-7" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-7" name="rating7" value="2" /><label for="star2-7" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-7" name="rating7" value="1" /><label for="star1-7" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Amstel end-->

<tr><!--Stella Artois start-->
<th scope="row">Stella Artois</th>
<td>
<div class="rating eight">
    <input type="radio" id="star5-8" name="rating8" value="5" /><label for="star5-8" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-8" name="rating8" value="4" /><label for="star4-8" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-8" name="rating8" value="3" /><label for="star3-8" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-8" name="rating8" value="2" /><label for="star2-8" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-8" name="rating8" value="1" /><label for="star1-8" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Stella Artois end-->

</table>

</div> <!--end cell2 row2-->



</div><!--end Row 2-->

<div class="row"><!-- begin Row 3-->

<div class="cell pic" id="dunkel"><!--begin cell 1 r3-->
<p align= "center">Dunkel</p>
<img src="dunkel.jpg" width="165" height="165" alt="dunkel">
</div> <!--end cell 1 r3-->

<div class="cell character"><!--begin character-->
<table>
<caption>Character</caption>

<tr>
<th scope="row">Body:</th>
<td>Dark,Malty Flavor</td>
</tr>

<tr>
<th scope="row">ABV:</th>
<td>4.5 - 6.0%</td>
</tr>

</table>
</div><!--end character-->


<div class="cell"><!--begin cell 2 r3-->
<table>
<tr>
	<th scope="col">Brands</th>
	<th scope="row">Ratings</th>
</tr>

<tr><!--Harpoon Dark start-->
<th scope="row">Harpoon Dark</th>
<td>
<div class="rating nine">
    <input type="radio" id="star5-9" name="rating9" value="5" /><label for="star5-9" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-9" name="rating9" value="4" /><label for="star4-9" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-9" name="rating9" value="3" /><label for="star3-9" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-9" name="rating9" value="2" /><label for="star2-9" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-9" name="rating9" value="1" /><label for="star1-9" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Harpoon Dark end-->

<tr><!--Hofbrau Dunkel start-->
<th scope="row">Hofbrau Dunkel</th>
<td>
<div class="rating ten">
    <input type="radio" id="star5-10" name="rating10" value="5" /><label for="star5-10" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-10" name="rating10" value="4" /><label for="star4-10" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-10" name="rating10" value="3" /><label for="star3-10" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-10" name="rating10" value="2" /><label for="star2-10" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-10" name="rating10" value="1" /><label for="star1-10" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Hofbrau Dunkel end-->


<tr><!--Spaten Dunkel start-->
<th scope="row">Spaten Dunkel</th>
<td>
<div class="rating eleven">
    <input type="radio" id="star5-11" name="rating11" value="5" /><label for="star5-11" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-11" name="rating11" value="4" /><label for="star4-11" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-11" name="rating11" value="3" /><label for="star3-11" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-11" name="rating11" value="2" /><label for="star2-11" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-11" name="rating11" value="1" /><label for="star1-11" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Spaten Dunkel end-->
</table>
</div><!--end cell 2 r3-->

</div><!--end Row 3-->

<div class="row"><!-- begin Row 4-->

<div class="cell pic" id="bock"><!--begin cell 1 r4-->
<p align= "center">Bock</p>
<img src="bock.jpg" width="200" height="165" alt="bock">
</div> <!--end cell 1 r4-->

<div class="cell character"><!--begin character-->
<table>
<caption>Character</caption>

<tr>
<th scope="row">Body:</th>
<td>Strong,Rich,Toasty</td>
</tr>

<tr>
<th scope="row">ABV:</th>
<td>6.0 - 7.0%</td>
</tr>

</table>
</div><!--end character-->


<div class="cell"><!--begin cell 2 r4-->

<table>
<tr>
	<th scope="col">Brands</th>
	<th scope="row">Ratings</th>
</tr>

<tr><!--Shiner start-->
<th scope="row">Shiner</th>
<td>
<div class="rating twelve">
    <input type="radio" id="star5-12" name="rating12" value="5" /><label for="star5-12" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-12" name="rating12" value="4" /><label for="star4-12" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-12" name="rating12" value="3" /><label for="star3-12" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-12" name="rating12" value="2" /><label for="star2-12" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-12" name="rating12" value="1" /><label for="star1-12" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Shiner end-->

<tr><!--Anchor Bock start-->
<th scope="row">Anchor Bock</th>
<td>
<div class="rating thirteen">
    <input type="radio" id="star5-13" name="rating13" value="5" /><label for="star5-13" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-13" name="rating13" value="4" /><label for="star4-13" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-13" name="rating13" value="3" /><label for="star3-13" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-13" name="rating13" value="2" /><label for="star2-13" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-13" name="rating13" value="1" /><label for="star1-13" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Anchor Bock end-->


<tr><!--La Trappe start-->
<th scope="row">La Trappe</th>
<td>
<div class="rating fourteen">
    <input type="radio" id="star5-14" name="rating14" value="5" /><label for="star5-14" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-14" name="rating14" value="4" /><label for="star4-14" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-14" name="rating14" value="3" /><label for="star3-14" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-14" name="rating14" value="2" /><label for="star2-14" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-14" name="rating14" value="1" /><label for="star1-14" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--La Trappe end-->

<tr><!--Yuengling Bock start-->
<th scope="row">Yuengling Bock</th>
<td>
<div class="rating fifteen">
    <input type="radio" id="star5-15" name="rating15" value="5" /><label for="star5-15" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-15" name="rating15" value="4" /><label for="star4-15" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-15" name="rating15" value="3" /><label for="star3-15" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-15" name="rating15" value="2" /><label for="star2-15" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-15" name="rating15" value="1" /><label for="star1-15" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Yuengling Bock end-->

</table>
</div><!--end cell 2 r4-->

</div> <!--end Row 4-->


</div><!--end of Gallery-->


</body>

<!DOCTYPE html>

<!--
Group B
ale.html
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
<h2>Ales</h2>
<div id="gallery"><!--begin Gallery-->

<div class="row" id="paleAle"><!-- begin Row 1-->

<div class="cell pic"><!--begin cell 1 r1-->
<p align= "center">Pale Ale</p>
<img src="paleale.jpg" width="165" height="165" alt="pale ale">
</div> <!--end cell 1 r1 -->


<div class="cell character"><!--begin character-->
<table>
<caption>Character</caption>

<tr>
<th scope="row">Body:</th>
<td>Hoppy,Bitter</td>
</tr>

<tr>
<th scope="row">ABV:</th>
<td>4.5 - 6.5%</td>
</tr>

</table>
</div><!--end character-->


<div class="cell"><!--begin cell 2 row 1-->
<table>
<tr>
	<th scope="col">Brands</th>
	<th scope="col">Ratings</th>
</tr>

<tr><!--sierra nevada start-->
<th scope="row">Sierra Nevada</th>
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
</tr><!--sierra nevada end-->

<tr><!--anchor start-->
<th scope="row">Anchor</th>
<td>
  <div class="rating two">
    <input type="radio" id="star5-2" name="rating2" value="5" /><label for="star5-2" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-2" name="rating2" value="4" /><label for="star4-2" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-2" name="rating2" value="3" /><label for="star3-2" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-2" name="rating2" value="2" /><label for="star2-2" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-2" name="rating2" value="1" /><label for="star1-2" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Anchor end-->


<tr><!--Stone start-->
<th scope="row">Stone</th>
<td>
<div class="rating three">
    <input type="radio" id="star5-3" name="rating3" value="5" /><label for="star5-3" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-3" name="rating3" value="4" /><label for="star4-3" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-3" name="rating3" value="3" /><label for="star3-3" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-3" name="rating3" value="2" /><label for="star2-3" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-3" name="rating3" value="1" /><label for="star1-3" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--stone end-->

<tr><!--Dogfish Head start-->
<th scope="row">Dogfish Head</th>
<td>
<div class="rating four">
    <input type="radio" id="star5-4" name="rating4" value="5" /><label for="star5-4" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-4" name="rating4" value="4" /><label for="star4-4" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-4" name="rating4" value="3" /><label for="star3-4" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-4" name="rating4" value="2" /><label for="star2-4" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-4" name="rating4" value="1" /><label for="star1-4" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Dogfish head end-->

</table>

</div><!--end cell 2 row 1-->

</div><!--end Row 1-->


<div class="row" id="barleyWine"><!-- begin Row 2-->

<div class="cell pic"><!--begin cell 1 r2-->
<p align= "center">Barley Wine</p>
<img src="barleywine.jpg" width="215" height="165" alt="barley wine">
</div> <!--end cell 1 r2-->


<div class="cell character"><!--begin character-->
<table>
<caption>Character</caption>

<tr>
<th scope="row">Body:</th>
<td>Hoppy,Bitter,Strong</td>
</tr>

<tr>
<th scope="row">ABV:</th>
<td>6.0 - 8.0%</td>
</tr>

</table>
</div><!--end character-->


<div class="cell"><!--begin cell2 row 2-->
<table>
<tr>
	<th scope="col">Brands</th>
	<th scope="col">Ratings</th>
</tr>

<tr><!-- start-->
<th scope="row">Sierra Nevada</th>
<td>
<div class="rating five">
    <input type="radio" id="star5-5" name="rating5" value="5" /><label for="star5-5" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-5" name="rating5" value="4" /><label for="star4-5" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-5" name="rating5" value="3" /><label for="star3-5" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-5" name="rating5" value="2" /><label for="star2-5" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-5" name="rating5" value="1" /><label for="star1-5" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!-- Sierra nevada end-->

<tr><!--Hog Heaven start-->
<th scope="row">Hog Heaven</th>
<td>
<div class="rating six">
    <input type="radio" id="star5-6" name="rating6" value="5" /><label for="star5-6" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-6" name="rating6" value="4" /><label for="star4-6" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-6" name="rating6" value="3" /><label for="star3-6" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-6" name="rating6" value="2" /><label for="star2-6" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-6" name="rating6" value="1" /><label for="star1-6" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Hog Heaven end-->


<tr><!--Old Horizontal start-->
<th scope="row">Old Horizontal</th>
<td>
<div class="rating seven">
    <input type="radio" id="star5-7" name="rating7" value="5" /><label for="star5-7" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-7" name="rating7" value="4" /><label for="star4-7" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-7" name="rating7" value="3" /><label for="star3-7" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-7" name="rating7" value="2" /><label for="star2-7" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-7" name="rating7" value="1" /><label for="star1-7" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Old Horizontal end-->

<tr><!--Dog Fish head start-->
<th scope="row">Dogfish head</th>
<td>
<div class="rating eight">
    <input type="radio" id="star5-8" name="rating8" value="5" /><label for="star5-8" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-8" name="rating8" value="4" /><label for="star4-8" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-8" name="rating8" value="3" /><label for="star3-8" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-8" name="rating8" value="2" /><label for="star2-8" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-8" name="rating8" value="1" /><label for="star1-8" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--dogfish head end-->

</table>

</div> <!--end cell2 row2-->



</div><!--end Row 2-->

<div class="row"><!-- begin Row 3-->

<div class="cell pic" id="stoutPorter"><!--begin cell 1 r3-->
<p align= "center">Stout And Porter</p>
<img src="stoutporter.JPG" width="220" height="165" alt="stout porter">
</div> <!--end cell 1 r3-->

<div class="cell character"><!--begin character-->
<table>
<caption>Character</caption>

<tr>
<th scope="row">Body:</th>
<td>Dark,Rich,Malty</td>
</tr>

<tr>
<th scope="row">ABV:</th>
<td>6.0 - 8.0%</td>
</tr>

</table>
</div><!--end character-->


<div class="cell"><!--begin cell 2 r3-->
<table>
<tr>
	<th scope="col">Brands</th>
	<th scope="col">Ratings</th>
</tr>

<tr><!--sierra nevada start-->
<th scope="row">Sierra Nevada</th>
<td>
<div class="rating nine">
    <input type="radio" id="star5-9" name="rating9" value="5" /><label for="star5-9" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-9" name="rating9" value="4" /><label for="star4-9" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-9" name="rating9" value="3" /><label for="star3-9" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-9" name="rating9" value="2" /><label for="star2-9" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-9" name="rating9" value="1" /><label for="star1-9" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Sierra Nevada end-->

<tr><!--Great Lakes start-->
<th scope="row">Great Lakes</th>
<td>
<div class="rating ten">
    <input type="radio" id="star5-10" name="rating10" value="5" /><label for="star5-10" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-10" name="rating10" value="4" /><label for="star4-10" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-10" name="rating10" value="3" /><label for="star3-10" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-10" name="rating10" value="2" /><label for="star2-10" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-10" name="rating10" value="1" /><label for="star1-10" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Great Lakes end-->


<tr><!--Founders start-->
<th scope="row">Founders</th>
<td>
<div class="rating eleven">
    <input type="radio" id="star5-11" name="rating11" value="5" /><label for="star5-11" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-11" name="rating11" value="4" /><label for="star4-11" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-11" name="rating11" value="3" /><label for="star3-11" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-11" name="rating11" value="2" /><label for="star2-11" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-11" name="rating11" value="1" /><label for="star1-11" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Founders end-->

<tr><!--Black Butte start-->
<th scope="row">Black Butte</th>
<td>
<div class="rating twelve">
    <input type="radio" id="star5-12" name="rating12" value="5" /><label for="star5-12" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-12" name="rating12" value="4" /><label for="star4-12" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-12" name="rating12" value="3" /><label for="star3-12" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-12" name="rating12" value="2" /><label for="star2-12" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-12" name="rating12" value="1" /><label for="star1-12" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Black Butte end-->



</table>
</div><!--end cell 2 r3-->

</div><!--end Row 3-->

<div class="row"><!-- begin Row 4-->

<div class="cell pic" id="lambic"><!--begin cell 1 r4-->
<p align= "center">Lambic</p>
<<img src="lambic.jpg" width="373" height="165" alt="lambic">
</div> <!--end cell 1 r4-->


<div class="cell character"><!--begin character-->
<table>
<caption>Character</caption>

<tr>
<th scope="row">Body:</th>
<td>Dry,Fruity,Sour</td>
</tr>

<tr>
<th scope="row">ABV:</th>
<td>3.5 - 5.0%</td>
</tr>

</table>
</div><!--end character-->


<div class="cell"><!--begin cell 2 r4-->

<table>
<tr>
	<th scope="col">Brands</th>
	<th scope="col">Ratings</th>
</tr>

<tr><!--Brasserie start-->
<th scope="row"><font size="-1">Brasserie Cantillon</font></th>
<td>
<div class="rating thirteen">
    <input type="radio" id="star5-13" name="rating13" value="5" /><label for="star5-13" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-13" name="rating13" value="4" /><label for="star4-13" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-13" name="rating13" value="3" /><label for="star3-13" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-13" name="rating13" value="2" /><label for="star2-13" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-13" name="rating13" value="1" /><label for="star1-13" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Brasserie end-->

<tr><!--upland start-->
<th scope="row">Upland</th>
<td>
<div class="rating fourteen">
    <input type="radio" id="star5-14" name="rating14" value="5" /><label for="star5-14" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-14" name="rating14" value="4" /><label for="star4-14" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-14" name="rating14" value="3" /><label for="star3-14" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-14" name="rating14" value="2" /><label for="star2-14" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-14" name="rating14" value="1" /><label for="star1-14" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--upland end-->


<tr><!--Lindemands start-->
<th scope="row">Lindemans</th>
<td>
<div class="rating fifteen">
    <input type="radio" id="star5-15" name="rating15" value="5" /><label for="star5-15" title="Amazing"><span>&#9733</span></label>
    <input type="radio" id="star4-15" name="rating15" value="4" /><label for="star4-15" title="Very good"><span>&#9733</span></label>
    <input type="radio" id="star3-15" name="rating15" value="3" /><label for="star3-15" title="Average"><span>&#9733</span></label>
    <input type="radio" id="star2-15" name="rating15" value="2" /><label for="star2-15" title="Not Good"><span>&#9733</span></label>
    <input type="radio" id="star1-15" name="rating15" value="1" /><label for="star1-15" title="Terrible"><span>&#9733</span></label>
  </div>
</td>
</tr><!--Lindemans end-->


</table>
</div><!--end cell 2 r4-->

</div> <!--end Row 4-->


</div><!--end of Gallery-->


</body>

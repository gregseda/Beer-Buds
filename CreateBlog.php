<!DOCTYPE html>
<html lang = "en">
	<head>
		<title> Create Blog </title>
		<meta charset ="utf-8"/>
		<!-- Bootstrap files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="CreateBlogStyle.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- TinyMCE Scripts -->
		<script type="text/javascript" src="tinymce/js/jquery.min.js"></script>
		<script type="text/javascript" src="tinymce/js/tinymce.min.js"></script>
		<script type="text/javascript" src="tinymce/js/init-tinymce.js"></script>
		<!--  -->
		<style> 
			<!-- /* Remove the navbar's default margin-bottom and rounded borders */ -->
			.navbar { margin-bottom: 0; border-radius: 0;	}
			
			<!-- /* Set height of the grid so .sidenav can be 100% (adjust if needed) */ -->
			.row.content {height: 1300px}
    
			<!-- /* Set gray background color and 100% height */ -->
			.sidenav { padding-top: 20px; background-color: #f1f1f1; height: 50%; }

			<!-- /* On small screens, set height to 'auto' for sidenav and grid */ -->
			@media screen and (max-width: 767px) { 	.sidenav { height: auto; padding: 15px; }
													.row.content {height: auto;}				}
		</style>
		
	</head>
	<body>
<!-- Navigation Bar code *********************************************** -->
  <div class="page-header">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTudmqgPLcstgPENFzbTil71xx3i4A-uQI1JSdbTeTecpL3OEn0_g" alt="beer">
    <h1>Beer Buds Create Blog </h1>
  </div>
  
    <!-- Here is the navbar at the top, right below the header-->
  <div class="topnav">
  <a href="home3.php">Home</a>
  <a class= "active" href="blog.php">Blogs</a>
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

  </div>
<!-- ******************************************************************** -->
		<!--  -->
		<div class="container-fluid">
			<div class="row content">
<!-- Side Container for Blogitems *************** -->
				<div class="col-sm-3 sidenav">
					<h1>Blogs</h1>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for Blogs to Edit" >
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div><br>
					<ul class="nav nav-pills nav-stacked">
						<li><a>
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"> New &nbsp;
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</a></li>
						<li><a href="#example1">example1</a></li>
						<li><a href="#example2">example2</a></li>
						<li><a href="#example3">example3</a></li>
					</ul>
				</div><br>
<!-- *********************************** -->
<!-- Elements for the Creating a Blog	 -->
				<div class="col-sm-9">
					<form role="form" action="CreateBlogSave.php" name="BlogInfo" id="BlogElements" method ="POST">
						<div class="form-group">
							<label for ="Title" >Title:</label>
							<input class="form-control" required id ="Title" type="text" name="Title" placeholder="Enter Title" size ="20" >
						</div>
						<div class="form-group">
							<label for ="Tags" >Tags:</label>
							<input class="form-control" required id="Tags" type="text" name="Tags" placeholder="Enter Tags">
						</div>
						<div class="form-group">
							<label for="Blog" >Body:</label>
							<textarea  class = "tinymce" id="Blog" name="Blog" wrap="hard" placeholder="BlogBody" ></textarea>
						<!--    <textarea  class = "form-control" class = "form-control" id="Blog" required wrap="hard" placeholder="BlogBody" ></textarea> -->
							<br>
							<p>
							<button type ="button" class="btn btn-default">Cancel</button>
							<button type ="submit" class="btn btn-default"> Save </button>
							</P>
						</div>
					</form>
				</div>
<!-- *********************************** -->
			</div><!-- Row Content Closing Tag -->
		</div><!-- Container Fluid Closing Tag -->
<!-- *********************************** -->
	</body>
</html>

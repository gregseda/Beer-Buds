<!DOCTYPE html>
<html lang="en">

<head>
  <title>Beer Buds Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="blog.css">
  <!-- This links to the Bootstrap stylesheet-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- These link to the bootstrap javascript lib-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="page-header">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTudmqgPLcstgPENFzbTil71xx3i4A-uQI1JSdbTeTecpL3OEn0_g" alt="beer">
    <h1>Beer Buds Blog </h1>
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


<div class="container-fluid">
 <!-- This is the navbar on the left -->
    <div class="row content">
       <!-- This number is how many columns wide we want it (2) -->
      <div class="col-sm-2 sidenav">
        <h1><small>Find most recent post by category!</small></h1>
        <!-- Need to figure out alternative to ul, will cause a validator error!-->
        <ul class="nav nav-pills nav-stacked">
           <!-- The active means that it is selected -->
           <!-- There will be validator errors in here until there are enough blogs for the references!-->
          <li class="active"><a href="#">Categories:</a></li>
          <li><a href="#ipa">IPA</a></li>
          <li><a href="#hef">Hef</a></li>
          <li><a href="#pale">Pale</a></li>
          <li><a href="#blonde">Blonde</a></li>
          <li><a href="#stout">Stout</a></li>
          <li><a href="#porter">Porter</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#breweries">Breweries</a></li>
        </ul>
      </h1>


      <br>

      </div>

       <!-- This spaces the column , there are 12 columns in bootstrap so we need 10 more to fill the page-->

      <div class="col-sm-10">
        <h1>
        <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){?>
        <a class="btn btn-warning btn-lg" href="http://cis444.cs.csusm.edu/group_B/CreateBlog.php" role="button" >Create a new Blog!</a></h1>
        
        <?php } ?>
        <a class="btn btn-warning btn-lg" href="http://cis444.cs.csusm.edu/group_B/3postcomment.php" role="button" >View Post!</a></h1>
        <!-- These 2 ids connects to the navbar on the left! -->
        <p id="breweries">
          <h2 id="ipa"> Sample Blog </h2>
         <!-- This shows the small Time icon and time posted-->
          <span class="glyphicon glyphicon-time" title="clock"></span> Post by Kevin Truebe, Sep 27, 2017.
         <!-- Primary means the tag will be blue-->
          <span class="label label-primary">IPA</span> <span class="label label-primary">Breweries</span><br><br>
          <p> This will be an example blog paragraph about IPA beer and a specific brewery.</p>
          <br><br>




      <form action=""  >
          <!-- This section will be to leave a comment-->
            <div class="form-group">Leave a Comment:
              <textarea class="form-control" rows="3" name="commentBody" title="comment" required></textarea>
              <!-- Success creates a green button-->

            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
          <br><br>

          <h1><small>RECENT POSTS</small></h1>
          <hr>
          <!-- This ID connects to the nav bar on the left!-->
          <h2 id="pale">Another example post!</h2>
          <span class="glyphicon glyphicon-time"></span> Post by Greg Seda, Sep 24, 2017.
          <span class="label label-primary">Pale</span><br><br>
          <p> Yet another example blog post about Pale style beer!</p>
          </hr>

          <!-- This section will be to leave a comment-->
            <div class="form-group">Leave a Comment:
              <textarea class="form-control" rows="3" title="comment" required></textarea>
              <!-- Success creates a green button-->
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            </p>
            </div>
            </div>
            </div>
            </body>
            </html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> BeeBuds Post </title>
    <link rel="stylesheet" type="text/css" href="3postcomment.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    </div>

    <?php
    session_start();
    $db = mysqli_connect("localhost","group_b","dlnRGGrS9fsyC9qA");
      if (!$db) // Check connection if statement
        {
          echo "fail";exit;
        }

    $group_b = mysqli_select_db($db, "group_b");
      if (!$group_b)//if statement checks the database selected
        {
          print "error";exit;
        }

        $query = "SELECT Title, Tag, blogBody, blogDate FROM blogs";
        $result = mysqli_query($db,$query);


        if (mysqli_num_rows($result) > 0)
      {
        echo "<table><tr><th>Body</th><th>Title</th><th>Tag</th><th>Date</th></tr>";
          while($row = mysqli_fetch_assoc($result))
        {
          echo "<tr><td>" . $row["blogBody"]. "</td><td>" . $row["Title"]. "</td><td>" . $row["Tag"]. "</td><td>" . $row["blogDate"]. "</td></tr>";
        }
        echo "</table>";
      }
      ?>
    </body>
</html>

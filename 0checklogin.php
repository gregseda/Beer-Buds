<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> BeerBuds </title>
  </head>
  <body>
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

    $username = $_POST['username'];
    $UID = stripcslashes($UID);
    $UIDU = htmlspecialchars($UID);

    $password = $_POST['password'];
    $PID = stripcslashes($PID);
    $PIDU = htmlspecialchars($PID);

    $userid = $_POST['userid'];
    $_SESSION["userid"] = $userid;

    $query2 = "SELECT userid FROM users WHERE userid = '$userid'";
    $result2 = mysqli_query($db, $query2);
    if (mysqli_num_rows($result2) > 0)
    {
      while ($row = mysqli_fetch_assoc($result2)) {
        $_SESSION["userid"];
        echo "Userid session";
      }
    }

  $query = "SELECT email FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db,$query);


  if (mysqli_num_rows($result) > 0)
{
  
    while($row = mysqli_fetch_assoc($result))
  {

    $_SESSION["username"] = $username;
    $_SESSION['logged_in'] = true;

    echo "Logged in!";
    header("Location: home3.php");
  }
}
else
  {
      $wrongpw = "Username and/or Password incorrect.\\nTry again.";
      echo "<script type='text/javascript'>alert('$wrongpw');</script>";
  }

  ?>

</body>
  <br />
  <br />

<meta http-equiv="refresh" content="0; URL='http://cis444.cs.csusm.edu/group_B/0LogIn.php'"/>

</html>

<?php
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

  if (isset($_POST['username']) && isset($_POST['password']))
    {
      $firstname = $_POST['firstName'];
      $lastname = $_POST['lastName'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      $query = "INSERT INTO users (username, password, firstName, lastName, email) VALUES ('$username', '$password', '$firstname', '$lastname', '$email')";
      $result = mysqli_query($db,$query);
      if($result)
        {
        $_SESSION['reg_success'] = 1;
        header("Location: 0LogIn.php");

        }else {
          $failmsg="Registraion Failed";
        }
    }

  ?>

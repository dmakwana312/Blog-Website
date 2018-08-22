<?php

  $username = "";
  $password = "";

  if(isset($_POST['username'])){
    $username = $_POST['username'];
  }

  if(isset($_POST['password'])){
    $password = $_POST['password'];
  }

  if(($username === "username") && ($password === "password")){
    header("Location:  http://webprojects.eecs.qmul.ac.uk/dm314/blog/addEntry.html");
    die();
  }
  else{
    echo "ACCESS DENIED: INCORRECT USERNAME OR PASSWORD<br/>GO BACK TO LOGIN PAGE & TRY AGAIN";
  }

mysql_close($con);
 ?>

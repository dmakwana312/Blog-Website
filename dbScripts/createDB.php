<?php

  $serverName = "localhost";
  $username = "root";
  $password = "usbw";

  $con = mysqli_connect($serverName, $username, $password);

  if(!$con){
    die("Connection Failed: " - mysqli_connect_error());
  }

  $sql = "CREATE DATABASE blogEntries";

  if(mysqli_query($con, $sql)){
    echo "DB CREATED";
  }
  else{
    echo "Error creating database: " . mysqli_error($con);
  }

  mysql_close($con);

 ?>

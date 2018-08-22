<?php

$serverName = "dbprojects.eecs.qmul.ac.uk";
$username = "dm314";
$password = "gjWhDQYNjjGXB";
$dbName = "dm314";

$con = mysqli_connect($serverName, $username, $password, $dbName);

if(!$con){
  die("Connection Failed: " - mysqli_connect_error());
}
else{
  $sql = "DROP TABLE entries";

  if(mysqli_query($con, $sql)){
    echo "Table deleted";
  }
  else{
    echo "Error: " . mysqli_error($con);
  }
}

mysql_close($con);

?>

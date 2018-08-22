<?php

$serverName = "dbprojects.eecs.qmul.ac.uk";
$username = "dm314";
$password = "gjWhDQYNjjGXB";
$dbName = "dm314";

$con = mysqli_connect($serverName, $username, $password, $dbName);

if(!$con){
  die("Connection Failed: " - mysqli_connect_error());
}

$sql = "CREATE TABLE entries (
  id VARCHAR(80),
  dateOfEntry VARCHAR(80),
  title VARCHAR(255),
  content VARCHAR(800)
)";

if(mysqli_query($con, $sql)){
  echo "TABLE CREATED";
}
else{
  echo "Error creating table: " . mysqli_error($con);
}

mysql_close($con);

?>

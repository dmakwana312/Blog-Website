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
  date_default_timezone_set('UTC');
  $date = date("D, M dS, Y, H:i a T");



  $title = "";
  $content = "";

  if(isset($_POST['title'])){
    $title = $_POST['title'];
  }

  if(isset($_POST['content'])){
    $content = $_POST['content'];
  }


  if(($title === "") || ($content === "")){
    echo "TITLE OR BODY MISSING<br>PLEASE GO BACK AND RETRY";
  }
  else{

    $id = date("dmyGms");


    $sql = "INSERT INTO entries (id, dateOfEntry, title, content)
    VALUES ('" . $id . "','" . $date . "', '" . $title . "','" . $content . "')";

    if(mysqli_query($con, $sql)){
      header("Location:  http://webprojects.eecs.qmul.ac.uk/dm314/blog/viewBlog.php");
      die();
    }
    else{
      echo "Error: " . mysqli_error($con);
    }

  }
}

mysql_close($con);

?>

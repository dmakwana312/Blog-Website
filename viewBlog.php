<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
  <title>Welcome to my Blog! </title>
  <link rel = "stylesheet" type = "text/css" href = "style.css"/>

</head>

<body>

  <img src="logo.jpg" align = "center">

  <div id = "wrap">

    <div id = "main">


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

        $sql = "SELECT * FROM entries";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) == 0){
          redirectToLogin();
        }
        else{
          $count = 0;
          $dateOfEntry = array();
          $titles = array();
          $contents = array();

          while($row = mysqli_fetch_array($result)){
            $dateOfEntry[$count] = $row[1];
            $titles[$count] = $row[2];
            $contents[$count] = $row[3];
            $count++;
          }

          $count = $count-1;

          for($i = $count; $i >=0; $i--){
            echo "
            <p class = date> " . $dateOfEntry[$i] . "</p>
            <h2 = title>" . $titles[$i] . "</h2>
            <p class = content> " . $contents[$i] . "
            <hr>";

          }
        }
      }

      mysql_close($con);

      function redirectToLogin(){
        header("Location:  http://webprojects.eecs.qmul.ac.uk/dm314/blog/login.html");
        die();
      }


      ?>

    </div>

    <div id = "sidebar">
      <ul>
        <li><a href = "viewBlog.php">Home</a></li>
        <li><a href = "login.html">Add Entry</a></li>
      </ul>
    </div>



  </div>
</body>
</html>

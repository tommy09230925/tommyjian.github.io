<?php
      $servername ="localhost";
      $username = "root";
      $password="1qaz@wsx";
      $database = "class";
      //create.connection
      $conn = mysqli_connect($servername,$username,$password,$database);
      if (mysqli_connect_error()) {
           # code...
        print "fail to create.connection" . mysqli_connect_error();
       } 
       else
       {
        print "sucessful.create.connection";
        // echo "<br>";
       }
       mysqli_query($conn,"SET NAMES utf8");
?>       
<?php
    error_reporting(E_ERROR | E_PARSE);
   
     $connect = mysqli_connect("localhost:8111","root","","khel_mahakumbh");
     if($connect->connect_error)
     {
        die("not connected".$connect->connect_error);   //mysqli_error($connect)
     }
     else
     {
      //   echo "Database connected"."<br>"; 
     }
?>
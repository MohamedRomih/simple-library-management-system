<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "mywork#2";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' . mysqli_error($mysql));
        }
?>
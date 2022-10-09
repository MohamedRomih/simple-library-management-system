<?php
include_once '..\db.php';

if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $adress = $_POST['adress'];
     $phone = $_POST['phone'];
     $sql = "INSERT INTO users (username ,email, pasword, adress ,phone)
     VALUES ('$name','$email','$password','$adress','$phone')";
     if (  mysqli_query($conn, $sql) ) {
         
        header("Location: ..\login.php");
            
         
        }
        
        else {
            echo "error".mysqli_error();
            //    header('Location: registration.php');
        } 
     
    

    }
    
mysqli_close($conn);


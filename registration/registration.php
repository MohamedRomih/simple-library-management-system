<?php
session_start();
if (isset($_POST['submit'])){
    include_once('db.php');
    //escape special char
    $username = mysqli_escape_string($conn,$_POST ['name']);
    $email = mysqli_escape_string($conn,$_POST ['email']);
    $adress = mysqli_escape_string($conn,$_POST ['adress']);
    $phone = $_POST ['phone'];
    $password = $_POST ['password'];
    $query = " SELECT * FROM users WHERE username ='$username' and pasword ='$password' and email = '$email' and adress ='$adress' and phone ='$phone'  ";
    $result = mysqli_query($conn , $query);
    if($row = mysqli_fetch_assoc($result)){
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['adress'] = $row['adress'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['password'] = $row['password'];
    }
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Sign Up Form</h2>
                    </div>
                    
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label>Adress</label>
                            <input type="text" name="adress" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control"required>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        <br><br>
                        <a href="..\login.php">Aready a librarien member ? log in!</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>


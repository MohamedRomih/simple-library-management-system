<?php

    session_start();
if (isset($_POST['submit'])){
    include_once('db.php');
    //escape special char
    $username = mysqli_escape_string($conn,$_POST ['name']);
    $password = $_POST ['password'];
    $query = " SELECT * FROM users WHERE username ='$username' and pasword ='$password' ";
    $result = mysqli_query($conn , $query);
    if($row = mysqli_fetch_assoc($result)){
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['adress'] = $row['adress'];
    $_SESSION['password'] = $row['password'];
    header("Location: Admin\admin.php");
    exit;
    }else{
        $error = "Invalid email or password";
    }
    mysqli_close($conn);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        </style>
    <title>Log In</title>
</head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Library Management System</h2>
                    </div>
                    <p>Welcome librarian</p>
                    <?php if(isset($error)) echo '<script type="text/javascript">alert("'.$error.'");</script>'; ?>
                    <form  method="POST">
                        
                            
                        
                         
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" name="password" class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="log in"> <br><br>
                    
                    

                    </form>
                    <a href="Homepage\Home.php">Guest?</a><br><br>
                    <a href="registration\registration.php">Create librarien account?</a>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>


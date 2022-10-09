<?php
include_once('..\db.php');


if (isset($_POST['submit'])) {
    // $id= $_GET['id'];
    $book_id = $_POST['book_id'];
    $book_name = $_POST['book_name'];
    $book_author = $_POST['book_author'];
    $avail = $_POST['availability'];
    $add = "INSERT INTO books (book_id , book_name, book_author,availability)
VALUES ('$book_id','$book_name','$book_author','$avail')";
    if (mysqli_query($conn, $add)) {
        header("Location: admin.php");
    } else {
        echo "error" . mysqli_error();
    }
}
?>


<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
    <title>Add NewBook</title>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add NewBook</h2>
                    </div>


                    <form method="POST">

                </div>
                <div style="padding-bottom:5px;">

                </div>
                ID <br>
                
                <input type="number" name="book_id" value="<?= (isset($row['book_id'])) ? $row['book_id'] : ''; ?>" />
                <br>
                <br>
                Book Name <br>
                <input type="text" name="book_name" class="txtField" value="<?= (isset($row['book_name'])) ? $row['book_name'] : ''; ?>" />
                <br>
                <br>
                Author :<br>
                <input type="text" name="book_author" class="txtField" value="<?= (isset($row['Book_author'])) ? $row['book_author'] : ''; ?>" />
                <br>
                <br>
                Availability<br>
                <input type="text" name="availability" class="txtField" value="<?= (isset($row['availability'])) ? $row['availability'] : ''; ?>" />
                <br>
                <br>
                <br>
                <input type="submit" name="submit" value="Add" class="buttom">
                <br>
                <br>
                <a href="admin.php">Back to main page ?</a>
            </div>
        </div>
    </div>
    </div>
    </div>
    </form>
</body>

</html>
<?php

mysqli_close($conn);

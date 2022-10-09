<?php 
include_once ('..\db.php');


$id= $_GET['id'];
// $id = filter_input(INPUT_GET , 'book_id' ,FILTER_SANITIZE_NUMBER_INT);
$select = "SELECT * FROM books WHERE book_id='$id'" ;
$result = mysqli_query($conn , $select );
$row = mysqli_fetch_assoc($result);
// $name = mysqli_escape_string($conn, $_POST["book_name"]);
// $author = mysqli_escape_string($conn, $_POST["book_author"]);
// $avail = filter_input(INPUT_GET , 'availability' ,FILTER_SANITIZE_NUMBER_INT);
// if ( count($_POST) > 0){
    // $book_id=$_POST['id'];
if (isset($_POST['submit'])){   
$book_name = $_POST['book_name'];
$book_author = $_POST['book_author'];
$avail = $_POST['availability'];

$update = "UPDATE books set  book_name='$book_name' ,
book_author='$book_author ', availability='$avail' WHERE book_id='$id' ";
if (mysqli_query($conn, $update)){
    header("Location: admin.php");
}
else{
     echo mysqli_error($conn);
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
    <title>Update Record</title>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Edit Form</h2>
                    </div>
                    <h3>Which Information Would You like to edit?</h3>

                    <form method="POST" >
                       
                        </div>
                        <div style="padding-bottom:5px;">

                        </div>
                        ID <br>
                        <input type="hidden" name="id" class="txtField" value="<?php echo $row['book_id']; ?>">


                        <input type="number" name="id" readonly  value="<?= (isset($row['book_id'])) ? $row['book_id'] : ''; ?>" />
                        <br>
                        <br>
                        Book Name <br>
                        <input type="text" name="book_name" class="txtField" value="<?= (isset($row['book_name'])) ? $row['book_name'] : ''; ?>" />
                        <br>
                        <br>
                        Author :<br>
                        <input type="text" name="book_author" class="txtField"  value="<?= (isset($row['book_author'])) ? $row['book_author'] : ''; ?>" />
                        <br>
                        <br>
                        Availability<br>
                        <input type="text" name="availability" class="txtField" value="<?= (isset($row['availability'])) ? $row['availability'] : ''; ?>" />
                        <br>
                        <br>
                        <br>
                        <input type="submit" name="submit" value="Change" class="buttom">
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
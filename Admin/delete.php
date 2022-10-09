<?php
include_once('..\db.php');

$id=$_GET['id'];

$sql =" DELETE FROM books where book_id='$id'" ;
$result = mysqli_query($conn , $sql);

if($result > 0)
{
  header("Location: admin.php");
}
else
{
 echo "errore in deleting" . mysqli_error();
}


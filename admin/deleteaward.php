<?php
include('config.php');
$id=$_REQUEST['id'];
$query="DELETE  FROM award WHERE id=$id";
$result=mysqli_query($conn,$query);
header("Location: index.php");
?>
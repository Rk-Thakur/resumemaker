<?php
include('config.php');
$id=$_REQUEST['id'];
$query="DELETE FROM skills WHERE id=$id";
$result=mysqli_query($conn,$query);
header("Location: third.php");
?>
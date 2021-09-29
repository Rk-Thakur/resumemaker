<?php
include_once('config.php');
if(isset($_POST['submit']))
{
    $file=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $path="../images/".$file;

    move_uploaded_file($temp_name,$path);


$sql="INSERT into image(file) values('$file')";
$result=mysqli_query($conn,$sql);
if($result)
{
    //echo"Data inserted";
    header("Location: index.php");
}
else{
    echo"Data not inserted".mysqli_error($conn);
}

}

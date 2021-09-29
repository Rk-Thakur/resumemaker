<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $post=$_POST['post'];
    $about=$_POST['about'];
    $sql="INSERT INTO info(name,post,about) values('$name','$post','$about')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        //echo("data inserted");
        header("Location: third.php");

    }else{
        echo("data not inserted").mysqli_error($conn);
    }
}

?>
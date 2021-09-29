<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['messenger'];
    $post=$_POST['insta'];
    $pot=$_POST['github'];
    $sql="INSERT INTO social (messenger,insta,github) values('$name','$post','$pot')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        //echo("data inserted");
        header("Location: index.php");

    }else{
        echo("data not inserted").mysqli_error($conn);
    }
}

?>
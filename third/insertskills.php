<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['skill'];
    $post=$_POST['name'];
    $sql="INSERT INTO skills(skill,name) values('$name','$post')";
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
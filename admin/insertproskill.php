<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $skill=$_POST['skill'];
    $sql="INSERT INTO proskill(skill) values('$skill')";
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
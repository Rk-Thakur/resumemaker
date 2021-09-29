<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['phone'];
    $post=$_POST['email'];
    $pot=$_POST['website'];
    $nam=$_POST['address'];
    $sql="INSERT INTO contact(phone,email,website,address) values('$name','$post','$pot','$nam')";
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
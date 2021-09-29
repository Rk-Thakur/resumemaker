<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['phone'];
    $post=$_POST['email'];
    $pot=$_POST['website'];
    $sql="INSERT INTO contact(phone,email,website) values('$name','$post','$pot')";
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
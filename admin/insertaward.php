<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $post=$_POST['award'];
    $company=$_POST['company'];
    $firstdate=$_POST['date'];
    
    $sql="INSERT INTO award(award,company,date) values('$post','$company','$firstdate')";
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
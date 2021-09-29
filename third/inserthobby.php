<?php
include_once("config.php");
if(isset($_POST['submit'])){
    
    $firstdate=$_POST['hobby'];
    $enddate=$_POST['name'];
   
    $sql="INSERT INTO hobby(hobby,name) values('$firstdate','$enddate')";
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
<?php
include_once("config.php");
if(isset($_POST['submit'])){
    
    $firstdate=$_POST['firstdate'];
    $enddate=$_POST['enddate'];
    $post=$_POST['course'];
    $company=$_POST['university'];
    $description=$_POST['description'];
    $sql="INSERT INTO education(firstdate,enddate,course,university,description) values('$firstdate','$enddate','$post','$company','$description')";
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
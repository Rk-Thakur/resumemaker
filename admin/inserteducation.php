<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $post=$_POST['degree'];
    $company=$_POST['university'];
    $firstdate=$_POST['firstdate'];
    $enddate=$_POST['enddate'];
    $description=$_POST['gpa'];
    $sql="INSERT INTO education(degree,university,firstdate,enddate,gpa) values('$post','$company','$firstdate','$enddate','$description')";
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
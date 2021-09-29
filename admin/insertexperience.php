<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $post=$_POST['post'];
    $company=$_POST['company'];
    $firstdate=$_POST['firstdate'];
    $enddate=$_POST['enddate'];
    $description=$_POST['description'];
    $description1=$_POST['description1'];
    $description2=$_POST['description2'];
    $sql="INSERT INTO experience(post,company,firstdate,enddate,description,description1,description2) values('$post','$company','$firstdate','$enddate','$description','$description1','$description2')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("Location: index.php");
        //echo("data inserted");
    }else{
        echo("data not inserted").mysqli_error($conn);
    }
}

?>
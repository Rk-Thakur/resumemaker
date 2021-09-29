
<?php
 include('config.php');
    $query="SELECT * FROM about ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    $count=1;
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
                <h2>about  <a href="editabout.php?id=<?php echo$row["id"];?>"><i class="fas fa-user-edit"></i></a></h2>

       
<p><?php  echo $row["about"]?>  </p>
<?php $count++;?>
<?php
    }
}

?>





<?php
 include('config.php');
    $query="SELECT * FROM info ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    $count=1;
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
<div class="nama"><?php echo $row['name']?> <a href="edit.php?id=<?php echo$row["id"];?>"><i class="fas fa-user-edit"></i></a></div>
<div class="designare"><?php echo $row['post']?>  </div>
<?php $count++;?>
<?php
    }
}
?>





<?php
 include('config.php');
    $query="SELECT * FROM award ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
<h3><?php echo $row["award"] ?><a href="deleteaward.php?id=<?php echo $row["id"];?>"><i class="fas fa-minus-circle"></i></a></h3>
            <h4><?php echo $row["company"] ?> | <?php echo $row["date"] ?></h4>
            <?php
            
    }
}
?>
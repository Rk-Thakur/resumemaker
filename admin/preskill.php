<?php
 include('config.php');
    $query="SELECT * FROM preskill ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
        
        <ul>
              <li><?php echo $row["skill"] ?> <a href="deletepreskill.php?id=<?php echo $row["id"];?>"><i class="fas fa-minus-circle"></i></a></li>

        </ul>
        <?php
    }
}
        ?>
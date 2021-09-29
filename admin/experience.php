<?php
 include('config.php');
    $query="SELECT * FROM experience ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>    
    
    <h3><?php echo $row['post'] ?> <a href="deleteexperience.php?id=<?php echo $row["id"];?>"><i class="fas fa-minus-circle"></i></a></h3>
            <h4><?php echo $row['company'] ?> | <?php echo $row['firstdate']?> - <?php echo $row['enddate']?></h4>
        <ul>
              <li><?php echo $row['description'] ?></li>
              <li><?php echo $row['description1'] ?></li>
              <li><?php echo $row['description2'] ?></li>
        </ul>

           

        <?php

    }
}
?>
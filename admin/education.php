<?php
 include('config.php');
    $query="SELECT * FROM education ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>  
<h3><?php  echo $row['degree']?><a href="deleteeducation.php?id=<?php echo $row["id"];?>"><i class="fas fa-minus-circle"></i></a></h3>
            <h4><?php  echo $row['university']?> <?php echo $row['firstdate']?>-<?php echo $row['enddate']?></h4>
            <h3 class="gpa"> GPA<?php  echo $row['gpa']?></h3>


            <?php
    }
}
            ?>
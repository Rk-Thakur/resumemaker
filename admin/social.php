<?php
 include('config.php');
    $query="SELECT * FROM social ORDER BY id desc";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?> 
<h2>social <a href="editsocial.php?id=<?php echo$row["id"];?>"><i class="fas fa-user-edit"></i></a></h2>
            <p>
              <i class="fab fa-facebook-messenger"></i>
              <span><a href="https://m.me/aadeshere1"><?php  echo $row['messenger']?> </a></span><!-- facebook -->
            </p>
            <p>
              <i class="fab fa-instagram"></i>
              <span><a href="https://instagram.com/aadeshere1"><?php  echo $row['insta']?></a></span><!-- instagram -->
            </p>
            <p>
              <i class="fab fa-github-alt"></i>
              <span><a href="https://github.com/aadeshere1"><?php  echo $row['github']?></a></span><!-- github -->
            </p>

            <?php
    }
}

            ?>
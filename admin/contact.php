<?php
 include('config.php');
    $query="SELECT * FROM contact ORDER BY id desc";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>   
    <h2>contact <a href="editcontact.php?id=<?php echo$row["id"];?>"><i class="fas fa-user-edit"></i></a></h2>
                 
            <p>P: <?php echo $row['phone'] ?></p>
            <p>E: <?php echo $row['email'] ?></p>
            <p>W: <a href="https://blog.aadeshshrestha.com.np/"><?php echo $row['website'] ?></a></p>
            <?php $count++;?>

            <?php

    }
}
?>
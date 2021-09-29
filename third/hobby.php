<div class="hobbies_wrap pb">
					<div class="title">
						hobbies <a href="hobby.html"><i class="fas fa-plus-circle"></i></a>
					</div>
					<div class="hobbies">
						<ul>
                        <?php
 include('config.php');
    $query="SELECT * FROM hobby ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    $count=1;
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
							<li>
								<div class="li_wrap">
									<div class="icon"><?php  echo $row['hobby']?></div>
									<div class="text"><?php  echo $row['name']?></div><a href="deletehobby.php?id=<?php echo $row["id"];?>"><i class="fas fa-minus-circle"></i></a>
								</div>
                            </li>
                            <?php
                            
    }
}
?>	
						</ul>
					</div>
				</div>
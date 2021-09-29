<div class="skills_wrap pb">
					<div class="title">
						Skills <a href="skills.html"><i class="fas fa-plus-circle"></i></a>
					</div>
					<div class="skills">
						<ul>
                        <?php
 include('config.php');
    $query="SELECT * FROM skills ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    $count=1;
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
							<li>
								<div class="li_wrap">
									<div class="icon"><?php  echo $row['skill']?></div>
									<div class="text"><?php  echo $row['name']?></div><a href="deleteskills.php?id=<?php echo $row["id"];?>"><i class="fas fa-minus-circle"></i></a>
								</div>
                            </li>
                            <?php
    }
}
                            ?>
						</ul>
					</div>
				</div>
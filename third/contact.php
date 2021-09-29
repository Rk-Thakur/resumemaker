<div class="contact_wrap pb">
					<div class="title">
						Contact 
					</div>
					<div class="contact">
						<ul>
                        <?php
 include('config.php');
    $query="SELECT * FROM contact ORDER BY id desc";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?> 
                            <li>
								<div class="li_wrap">
                                    <div class="icon"> <a href="editcontact.php?id=<?php echo$row["id"];?>"><i class="fas fa-user-edit"></i></a>  </div>
								</div>
							</li>
                            <li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></div>
									<div class="text"><?php echo $row['phone'] ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
									<div class="text"><?php echo $row['email'] ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-weebly" aria-hidden="true"></i></div>
									<div class="text"><?php echo $row['website'] ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-map-signs" aria-hidden="true"></i></div>
									<div class="text"><?php echo $row['address'] ?></div>
								</div>
                            </li>
                            <?php
    }
}
?>
						</ul>
					</div>
                </div>

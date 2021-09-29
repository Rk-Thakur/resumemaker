<div class="exp">
						<div class="title">
							experience <a href="experience.html"><i class="fas fa-plus-circle"></i></a>
						</div>
						<div class="exp_wrap">
							<ul>
                            <?php
 include('config.php');
    $query="SELECT * FROM experience ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?> 
								<li>
									<div class="li_wrap">
										<div class="date">
                                            <?php echo $row['firstdate']?> - <?php echo $row['enddate']?>
										</div>
										<div class="info">
											<p class="info_title">
                                                <?php echo $row['post']?><a href="deleteexperience.php?id=<?php echo $row["id"];?>"><i class="fas fa-minus-circle"></i></a>
											</p>
											<p class="info_com">
                                                <?php echo $row['company']?>
											</p>
											<p class="info_cont">
                                                <?php echo $row['description']?>
                                            </p>
										</div>
									</div>
                                </li>
                                <?php
                                 }
                                }
                                ?>								
							</ul>
						</div>
					</div>
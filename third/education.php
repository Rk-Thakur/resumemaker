<div class="education">
						<div class="title">
							Education <a href="education.html"><i class="fas fa-plus-circle"></i></a>
						</div>
						<div class="education_wrap">
							<ul>
                            <?php
 include('config.php');
    $query="SELECT * FROM education ORDER BY id ASC";
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
                                               
                                                <?php echo $row['course']?> <a href="deleteeducation.php?id=<?php echo $row["id"];?>"><i class="fas fa-minus-circle"></i></a>
											</p>
											<p class="info_com">
                                                <?php echo $row['university']?>
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
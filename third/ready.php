<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resume CV Design</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="resume">
			<div class="left">
				<div class="img_holder">
					<img src="pic.png" alt="picture">
				</div>
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

				<div class="skills_wrap pb">
					<div class="title">
						Skills 
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
									<div class="text"><?php  echo $row['name']?></div>
								</div>
                            </li>
                            <?php
    }
}
                            ?>
						</ul>
					</div>
				</div>
				<div class="hobbies_wrap pb">
					<div class="title">
						hobbies 
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
									<div class="text"><?php  echo $row['name']?></div>
								</div>
                            </li>
                            <?php
                            
    }
}
?>	
						</ul>
					</div>
				</div>

			</div>
			<div class="right">
				<div class="header">
                <?php
 include('config.php');
    $query="SELECT * FROM info ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    $count=1;
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
                <div class="name_role">
						<div class="name">
                            <?php echo $row['name'] ?>  
						</div>
						<div class="role">
                            <?php echo $row['post'] ?>

						</div>
					</div>
					<div class="about">
                        <?php echo $row['about'] ?>

                    </div>
                    <?php $count++;?>

                    <?php
    }
}
                    ?>
				</div>
				<div class="right_inner">
                <div class="exp">
						<div class="title">
							experience 
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
                                                <?php echo $row['post']?>
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
					<div class="education">
						<div class="title">
							Education 
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
                                               
                                                <?php echo $row['course']?> 
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
				</div>
			</div>
			
		</div>

	</div>
</body>
</html>
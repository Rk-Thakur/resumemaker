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
				<?php
				include("contact.php");
				?>
				<?php
				include("skills.php");
				?>
				<?php
				 include("hobby.php");
				 ?>
				 	<button><a href="ready.php">Ready</a></button>

			</div>
			<div class="right">
				<div class="header">
					<?php 
					include("info.php");
					?>
				</div>
				<div class="right_inner">
					<?php
					include("experience.php");
					?>
					<?php
						include("education.php");
					?>
				</div>
			</div>
			
		</div>

	</div>
</body>
</html>
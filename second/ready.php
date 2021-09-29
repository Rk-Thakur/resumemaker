<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resume/CV Design</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
       <img src="https://i.imgur.com/eCijVBe.png" alt="profile_pic">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
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
        <p class="bold"><?php  echo $row['name']?> </p>
           <p class="regular"><?php echo $row['post']?></p>
           <?php $count++;?>
           <?php

    }
}
?>
         </div>
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
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data">
               <?php  echo $row['address']?> 
               
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
               <?php  echo $row['phone']?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-envelope"></i>
             </div>
             <div class="data">
               <?php  echo $row['email']?>

             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-weebly"></i>
             </div>
             <div class="data">
               <?php  echo $row['website']?>

             </div>
           </li>
           <?php
    }
}
           ?>
         </ul>
       </div>
       <div class="resume_item resume_skills">
       <div class="title">
           <p class="bold">skill's </p>
         </div>
         <ul>
         <?php
 include('config.php');
    $query="SELECT * FROM skill ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    $count=1;
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
           <li>
             <div class="skill_name">
               <?php echo $row["skill"]?>
             </div>
             <div class="skill_progress">
               <span style="width: <?php echo $row["percentage"]?>%;"></span>
             </div>
             <div class="skill_per"><?php echo $row["percentage"] ?>% </div>
           </li>
          <?php    
    }
}?>      
         </ul>
       </div>
       <div class="resume_item resume_social">       
       <?php
 include('config.php');
    $query="SELECT * FROM social ORDER BY id desc";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
    <div class="title">
           <p class="bold">Social </p>
         </div>
         <ul> 
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <p><?php echo $row['facebook']?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <p><?php echo $row['twitter']?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-youtube"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Youtube</p>
               <p><?php echo $row['youtube']?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-linkedin"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Linkedin</p>
               <p><?php echo $row['link']?></p>
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
  <div class="resume_right">
  <?php
 include('config.php');
    $query="SELECT * FROM about ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    $count=1;
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
<div class="resume_item resume_about">
        <div class="title">
           <p class="bold">About us </p>
</div>
        <p><?php  echo $row["about"]?></p>
    </div>
    <?php $count++;?>

    <?php
    
    }
}
?>
    <div class="resume_item resume_work">
    <div class="title">
           <p class="bold">Work Experience </p>
         </div>
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
                <div class="date"><?php echo $row['firstdate']?> - <?php echo $row['enddate']?> </div> 
                <div class="info">
                     <p class="semi-bold"><?php echo $row['post']?></p> 
                  <p><?php echo $row['description']?></p>
                </div>
            </li>
            
        <?php
    }
}
?>

</ul>


    </div>
    <div class="resume_item resume_education">
    <div class="title">
           <p class="bold">Education </p>
         </div>
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
                <div class="date"><?php echo $row['firstdate']?> - <?php echo $row['enddate']?> </div> 
                <div class="info">
                     <p class="semi-bold"><?php echo $row['degree']?> (<?php echo $row['university']?>)</p> 
                  <p><?php echo $row['description']?></p>
                </div>
            </li>
            <?php
    }
}
?>
        </ul>
    </div>
    <div class="resume_item resume_hobby">
    <div class="title">
           <p class="bold">Hobby </p>
         </div>
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
         <li><?php echo $row['first']?></li>
         <li><?php echo $row['second']?></li>
         <li><?php echo $row['third']?></li>
         <li><?php echo $row['fourth']?> </li>
         <?php $count++;?>
         <?php
    }
}
         ?>
      </ul>

    </div>
  </div>
</div>


</body>
</html>
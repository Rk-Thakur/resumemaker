<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Sanchez" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <title>Resume Design using Flexbox</title>
  <style>
    html {
      background-color: #ebeced;
      padding: 0 1em;
    }
    body {
      background-color: #fff;
      margin: 1em auto;
      max-width: 50em;
    }
    p, ul {
      font-family: 'Sanchez', serif;
      font-size: 12px;
      letter-spacing: 1px;
    }
    a {
      text-decoration: none;
      color: inherit;
    }
    :root {
      --yellowish: #eeb14f;
      --dark-purple: #263547;
    }
    .container {
      display: flex;
      flex-direction: column;
    }
    .header {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      background-color: var(--dark-purple);
      height: 150px;
    }
    .logo {
      background: url('./rss.png') no-repeat;
      width: 32px;
      height: 32px;
      margin: 20px;
    }
    .title-holder {
      align-items: center;
    }
    .nama {
      color: var(--yellowish);
      font-family: 'Montserrat', serif;
      text-transform: uppercase;
      font-size: 36px;
      font-weight: bold;
    }
    .designare {
      color: #ffffff;
      font-family: 'Sanchez', serif;
      text-transform: uppercase;
    }
    .content-body {
      display: flex;
      flex-direction: row;
    }
    .wrapper {
      margin: 20px;
    }
    .section-left {
      flex: 1;
      background-color: var(--yellowish);
    }
    .section-left ul {
      list-style: none;
      margin-left: -40px;
      text-transform: capitalize;
      font-size: 12px;
    }
    h2 {
      text-transform: uppercase;
      font-size: 0.9em;
      font-weight: bold;
      font-family: 'Montserrat', serif;
      letter-spacing: 2px;
    }
    h3 {
      text-transform: uppercase;
      font-size: 0.7em;
      font-family: 'Sanchez', serif;
      font-weight: normal;
      letter-spacing: 2px;
    }
    h4 {
      font-family: 'Sanchez', serif;
      font-weight: normal;
      font-size: 0.8em;
      margin-top: -10px;
      font-style: italic;
      letter-spacing: 1px;
    }
    .section-right {
      flex: 2;
    }
    .section-right .wrapper {
      margin-left: 50px;
    }
    .section-right ul {
      margin-left: -20px;
    }
    .section-right h2 {
      color: var(--yellowish);
      font-weight: bold;
    }
    .gpa {
      margin-top: -15px;
    }
    .footer {
      background-color: var(--dark-purple);
    }
    .ps {
      color: #ffffff;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="logo"></div>
      <div class="title-holder">
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
<div class="nama"><?php echo $row['name']?> </div>
<div class="designare"><?php echo $row['post']?>  </div>
<?php $count++;?>
<?php
    }
}
?>





      </div>
    </div> <!-- end header -->

    <div class="content-body">
      <div class="section-left">
        <div class="wrapper">
          <div class="lists">
            <h2>professional skills </h2>
            <?php
 include('config.php');
    $query="SELECT * FROM proskill ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
       <ul>
              <li><?php echo $row['skill'] ?> </li>
        </ul>
        <?php
    }
}
?>
          </div>

          <div class="lists">
            <h2>Personal Skills </h2>
            <?php
 include('config.php');
    $query="SELECT * FROM preskill ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
        
        <ul>
              <li><?php echo $row["skill"] ?> </li>

        </ul>
        <?php
    }
}
        ?>
          </div>

          <div class="lists">
          <?php
 include('config.php');
    $query="SELECT * FROM contact ORDER BY id desc";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>   
    <h2>contact </h2>
                 
            <p>P: <?php echo $row['phone'] ?></p>
            <p>E: <?php echo $row['email'] ?></p>
            <p>W: <a href="https://blog.aadeshshrestha.com.np/"><?php echo $row['website'] ?></a></p>
            <?php $count++;?>

            <?php

    }
}
?>
          </div>

          <div class="lists">
          <?php
 include('config.php');
    $query="SELECT * FROM social ORDER BY id desc";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?> 
<h2>social </h2>
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
          </div>

        </div> <!-- end wrapper -->
      </div> <!-- end section-left -->
      <div class="section-right">
        <div class="wrapper">
          <div class="content">
            
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
                <h2>about  </h2>

       
<p><?php  echo $row["about"]?>  </p>
<?php $count++;?>
<?php
    }
}

?>





          </div>

          <div class="content">
            <h2>work experience </h2>

            <?php
 include('config.php');
    $query="SELECT * FROM experience ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>    
    
    <h3><?php echo $row['post'] ?> </h3>
            <h4><?php echo $row['company'] ?> | <?php echo $row['firstdate']?> - <?php echo $row['enddate']?></h4>
        <ul>
              <li><?php echo $row['description'] ?></li>
              <li><?php echo $row['description1'] ?></li>
              <li><?php echo $row['description2'] ?></li>
        </ul>

           

        <?php

    }
}
?>
          </div>

          <div class="content">
            <h2>education </h2>
            <?php
 include('config.php');
    $query="SELECT * FROM education ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>  
<h3><?php  echo $row['degree']?></h3>
            <h4><?php  echo $row['university']?> <?php echo $row['firstdate']?>-<?php echo $row['enddate']?></h4>
            <h3 class="gpa"> GPA<?php  echo $row['gpa']?></h3>


            <?php
    }
}
            ?>
          </div>

          <div class="content">
            <h2>awards  </h2>
            <?php
 include('config.php');
    $query="SELECT * FROM award ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
<h3><?php echo $row["award"] ?> </h3>
            <h4><?php echo $row["company"] ?> | <?php echo $row["date"] ?></h4>
            <?php
            
    }
}
?>
          </div>


        </div>
      </div> <!-- end section right -->
    </div>

    <div class="footer">
      <p class="ps"></p>
    </div>
  </div>
  <button>Download</button>
</body>
</html>
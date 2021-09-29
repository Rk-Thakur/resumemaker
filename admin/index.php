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
        include("info.php");
        ?>
      </div>
    </div> <!-- end header -->

    <div class="content-body">
      <div class="section-left">
        <div class="wrapper">
          <div class="lists">
            <h2>professional skills <a href="proskill.html"><i class="fas fa-plus-circle"></i></a></h2>
            <?php 
            include("proskill.php");
            ?>
          </div>

          <div class="lists">
            <h2>Personal Skills <a href="preskill.html"><i class="fas fa-plus-circle"></i></a></h2>
                <?php
                  include("preskill.php");
                ?>
          </div>

          <div class="lists">
            <?php
            include("contact.php");
            ?>
          </div>

          <div class="lists">
            <?php
            include("social.php");
            ?>
          </div>

        </div> <!-- end wrapper -->
      </div> <!-- end section-left -->
      <div class="section-right">
        <div class="wrapper">
          <div class="content">
            <?php 
            include("about.php");
              ?>
          </div>

          <div class="content">
            <h2>work experience <a href="experience.html"><i class="fas fa-plus-circle"></i></a></h2>

            <?php
            include("experience.php");
            ?>
          </div>

          <div class="content">
            <h2>education <a href="education.html"><i class="fas fa-plus-circle"></i></a></h2>
            <?php
            include("education.php");
            ?>
          </div>

          <div class="content">
            <h2>awards  <a href="insertaward.html"><i class="fas fa-plus-circle"></i></a></h2>
            <?php
            include("award.php");
            ?>
          </div>


        </div>
      </div> <!-- end section right -->
    </div>

    <div class="footer">
      <p class="ps"></p>
    </div>
  </div>
<button> <a href="ready.php"> Ready</a></button>
</body>
</html>
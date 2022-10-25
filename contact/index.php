<!DOCTYPE html>
<html>
<head>
  <title>Study Material</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./f.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
    top: 0;
    width: 100%;
    z-index: 9999 !important;
  }

  .affix + .container-fluid {
    padding-top: 70px;
  }
 

.form-group
{
margin-bottom:15px;
}


  </style>
</head>
<body>

<div class="container-fluid" style="background-color:#1abc9c;color:#fff;height:200px;text-align: center;">
 <h1>Study Material</h1>
  <h3>Based On AKU syllabus</h3>
  <p>B.Tech</p>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <ul class="nav navbar-nav">
    <li><a href="../index.html"> Home Page </a></li>
    
  
  </ul>
</nav>

<div class="container-fluid" style="height:1000px">
<div class="container">
<div align="center">
<?php
session_start();
if(isset($_SESSION["Data"]))
echo $_SESSION["Data"];
?>
</div>
<form name="f" action="insert.php" method="post" enctype="multipart/form-data">
<div class="container">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname1" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname1" placeholder="Your last name..">

    <label for="lname">Your E-Mail</label>
    <input type="text" id="email" name="email1" placeholder="Enter Your E-Mail">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject1" placeholder="Write something.." style="height:80px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

</div>

 

</body>
</html>

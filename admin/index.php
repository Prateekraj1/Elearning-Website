<!DOCTYPE html>
<html>
<head>
  <title>Admin Pannel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./cse.css">
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
 

.form
{
margin:15px;
}


  </style>
<script>
</script>
</head>
<body>

<div class="container-fluid" style="background-color:#1abc9c;color:#fff;height:200px;text-align: center;">
 <h1>ADMIN PANNEL</h1>
  
  
</div>
<div class="row">
  <div class="col-md-offset-10 col-md-2 col-xs-offset-8 col-xs-2">
    <?php
    session_start();
    if(isset($_SESSION["UserName"]))
    {
      echo "WELCOME ";
      echo $_SESSION["UserName"];
    }
    else
    {
      header("location:login.php");
    }
?>
<form action="logout.php">
<button class="btn-link">Logout?</button></form>
  </div>
</div>
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <ul class="nav navbar-nav">
    
    <li><a href="../index.html"> Home Page </a></li>
   
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- --------------------------------------------------------------------------------------------------------------------- -->
  <div class="col-md-4 col-xs-6 form">
      <form action="details.php" method="post">
      <button class="btn btn-primary btn-lg btn-block active">To see Admin Details</button>
    </form>
</div>
    <!-- --------------------------------------------------------------------------------------------------------------------- -->

  
  <div class="col-md-4 col-xs-7 form">
    
<form action="feedback.php" method="post">
      <button class="btn btn-primary btn-lg btn-block active">To see Response Details</button>
    </form>



 
 </div>

    <!-- --------------------------------------------------------------------------------------------------------------------- -->

<div class="col-md-4 col-xs-6 form">
  
<form action="del.php" method="post">
      <button class="btn btn-primary btn-lg btn-block active">To Delete a Response</button>
    </form>
</div>
  </div>
</div>
</body>
</html>
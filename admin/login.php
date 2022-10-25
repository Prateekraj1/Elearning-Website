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
  ::-webkit-scrollbar {
    width: 0px;
  }
</style>
</head>
<body>

<div class="header">
  <h1>Study Material</h1>
  <h3>Based On AKU syllabus</h3>
  <p>B.Tech</p>
</div>
<div class="container-fluid" style="background-color:#1abc9c;color:#fff;height:100px;text-align: center;">
 <h1>ADMIN PANNEL</h1>
  
  
</div>
<div id="navbar">
  <a href="../index.html">Home</a>
  <a href="login.html">Admin Pannel</a>
  <a href="../nav/question.html" target="_blank" class="right">Question & Solution</a>
  <a href="../nav/books.html" target="_blank"  class="right">Books</a>
</div>




    <!-- --------------------------------------------------------------------------------------------------------------------- -->
      <form action="match.php" method="post">
      <div class="container-fluid">
        <div class="row text-center">
          <?php
    session_start();
    if(isset($_SESSION["Error"]))
    {
      echo $_SESSION["Error"];
    }
?>
        </div>
        <div class="row text-center">
          <div class="col-md-6 col-xs-6"><b>Enter Your Email ID</b></div>
          <div class="col-md-6 col-xs-6"><input type="txt" name="email1"></div>
        </div>
        <div class="row text-center">
          <div class="col-md-6 col-xs-6"><b>Enter Your Password</b></div>
          <div class="col-md-6 col-xs-6"><input type="Password" name="pass1"></div>
        </div>
        <div class="row">
          <div class="col-md-offset-8 col-md-2 col-xs-6"><button class="btn btn-block btn-primary">LOG IN</button></div>
          
        </div>
</div>
</form>      
</div>
  </div>

</body>
</html>
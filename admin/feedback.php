<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<table border=1 class="table table-hover table-striped">
<tr><th>Fname</th><th>Lname</th><th>Email</th><th>Content</th></tr>


<?php
session_start();

$con=mysqli_connect("sql205.epizy.com","epiz_28263856","VcJQsTPP29ho","epiz_28263856_mydb1");
if(!$con)
die("Server Could Not Connected");
$s="select * from main";
$no=mysqli_query($con,$s);

while($ro=mysqli_fetch_assoc($no))
{
	echo "<tr><td>".$ro["fname"]."</td><td>".$ro["lname"].
	"</td><td>".$ro["email"]."</td><td>".$ro["content"]."</td></tr>";
}



?>
</table>
<table align="center">
	
	<tr><td><a href="index.php" >GO BACK TO ADMIN PANNEL</a></td></tr>
</table>

</body>
</html>
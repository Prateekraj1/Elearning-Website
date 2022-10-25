<?php
session_start();
$n=$_POST["txt1"];
$con=mysqli_connect("sql205.epizy.com","epiz_28263856","VcJQsTPP29ho","epiz_28263856_mydb1");
if(!$con)
die("Server Could Not Connected");
$s="delete from main where email='".$n."'";
$no=mysqli_query($con,$s);
if($no!=0)
	header('location:del.php');
else
	echo "Something Wrong Happened 404";



?>
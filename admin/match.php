<?php
session_start();
$email=$_POST["email1"];
$pass=$_POST["pass1"];
$con=mysqli_connect("sql205.epizy.com","epiz_28263856","VcJQsTPP29ho","epiz_28263856_mydb1");
if(!$con)
die("Server Could Not Connected");
$s="select * from admin where UserName='".$email."'";
$no=mysqli_query($con,$s);

$ro=mysqli_fetch_assoc($no);
if($ro["Password"]==$pass)
{
	$_SESSION["UserName"]=$email;
	header("location:index.php");
}
else
	{
	$_SESSION["Error"]="<font color='red'>BAD CREDENTIAL TRY AGAIN</font>";
	header("location:login.php");	
	}
?>
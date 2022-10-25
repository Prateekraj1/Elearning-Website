<?php
session_start();
$fname=$_POST["firstname1"];
$lname=$_POST["lastname1"];
$email=$_POST["email1"];
$sub=$_POST["subject1"];
$con=mysqli_connect("localhost","root","","mydb1");
if(!$con)
die("Server Could Not Connected");
$s="insert into main values('".$fname."','".$lname."','".$email."','".$sub."')";
$no=mysqli_query($con,$s);
if($no!=0)
{
$_SESSION["Data"]="Response Recorded";
header("location:index.php");
}
else
echo"<font color='red'>Data Is Not Stored</font>";
?>
<?php 
session_start();
if(isset($_POST["Submit"])){
$fname=$_POST["name"];

$email=$_POST["email"];
$npassword=$_POST["password"];
$confirmpassword=$_POST["confirm_password"];
if($fname!=""AND $email!="" AND $npassword!="" AND $confirmpassword!="")
{
if($npassword!=$confirmpassword)
{ header("Location:changepassword.php?id=error&v=New password and Confirm  new password must be same."); 
}
else{
	$s="localhost";
$u="root";
$p="" ;
$db="mydb";
$conn=new mysqli($s,$u,$p,$db);
if($conn->connect_error){
die("connection failed : " .$conn->connect_error);
}
$sql="update lfinder set password='$npassword' 
where name='$fname'  AND email='$email' ";
$rslt=$conn->query($sql);
if($rslt===true){
	header("Location:index.php?id=success&v=Your password has changed successfully.");
	}
	else {
	header ("Location: index.php ? id=Error&v=Please ensure you have an account. Try again..." );
	 };
	}
}
else{
 header( "Location: signup.php?id=error &v=Error:All fields mandatory");
 }
}
else
{ header("Location: index.php?id=error&v=Please  submit your details first");
}
?>
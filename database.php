<?php function connect(){
	$s="localhost";
				$u="root";
				$p="";
				$db="MYDB";
				$con=new mysqli($s,$u,$p,$db);
				
				if($con->connect_error){
				die("connection failed : " .$con->connect_error);
				}
				return $con ;

} ?>
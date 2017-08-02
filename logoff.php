<?php
session_start();
if(isset($_SESSION["Name"])){ 
unset($_SESSION["Name"]);
header("Location:logoff-success.php");
}
else {
 header("Location: index.php");
}
?>
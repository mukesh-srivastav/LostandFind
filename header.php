
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lost & Find </title>
        <link rel="stylesheet" href="public/css/style.css" />
		<style>
		input[type='text']{ font-family:lucida calligraphy , serif ; font-size:16px ; }
		</style>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <a href="index.php"><img src="public/logo.jpg" alt="LOST&FIND " id="logo" /></a>
                <h1 id="sitename" ><a href="index.php" style="color:#FFFFFF">Lost & Find.com</a></h1>
                <h4 id="siteintro">A place to find your Lost.</h4>
                                <?php session_start();
				if(isset($_SESSION['Name'])){
				?><h3 id="signin" > <?php $a= $_SESSION['Name'] ; echo $a;  ?> </h3> 
				<a href="logoff.php" id="logoff" style="
    position:absolute;
    right:45px;
    top:150px;color:#FFFFFF;
     font-family: 'times new roman' , serif ;
    font-style: italic;
    font-size: 20px;" > LogOff </a><?php
				}
				else { ?> <a id="signin" href="signin.php">Sign In </a>
				<?php } ?>
            </div>
            <div id="navbar">
                <table>
                    <tr>
                    <td><a class="navheading" href="index.php">Home</a></td>
                    <td><a class="navheading" href="post.php">Post</a></td>
                    <td><a class="navheading" href="search.php">Search</a></td>
                    <td><a class="navheading" href="status.php">Status</a></td>
                    <td><a class="navheading" href="aboutus.php">About Us</a></td>
                    </tr>
                </table>
            </div>
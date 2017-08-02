<head>
<style>

</style>
</head>
<body>
<?php include_once("header.php");
		
					if(isset($_GET["id"]))
					{ echo "<div id=".$_GET["id"].">".$_GET["v"]."</div>";
					}
					?>
		<div id="signinwrapper" style="border:2px solid ; margin-left:200px">
					
					<form method="post" action="changepassword-user.php">
					 <table align="center">
                   <caption>Change Password Here</caption>
				    <tr><th>Name : </th><td><input type="text" name="name" class="signininput" required ></td></tr>
					 
                   <tr><th>Email : </th><td><input type="email" name="email" class="signininput" required ></td></tr>
                   <tr><th>Password : </th><td><input type="password" name="password" class="signininput" required ></td></tr>
				    <tr><th>Confirm Password : </th><td><input type="password" name="confirm_password" class="signininput" required ></td></tr>
				    
                   <tr><th  colspan="2" ><input type="submit" id="signinsubmit" name="Submit"  value="Submit" class="submit" ></th></tr>
                   <tr><td colspan="2"> <p id="signupline"> Remembered Password !<a id ="signuplink" href="signin.php">here </a></p></td></tr>
				 
                   </table>
					
					</form>
					
					
		</div>
	<?php include_once("Footer.php"); ?>
	</body>
	</html>
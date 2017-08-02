<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sign In</title>
        <link rel="stylesheet" href="public/css/style.css" />
		<style>
		input[type='email'] , input[type='password']  { font-family:lucida calligraphy , serif ; font-size:16px ; }
		</style>
    </head>
    <body>
       <div id="wrapper">
            <div id="header">
                <img src="public/logo.jpg " alt="LOST&FIND " id="logo" />
                <h1 id="sitename" ><a href="index.php" style="color:#FFFFFF">Lost & Find.com</a></h1>
                <h4 id="siteintro">A place to find your Lost.</h4>
                
            </div>
			<?php 
					if(isset($_GET["id"]))
					{ echo "<div style='text-align:center;
	padding-top:50px;
	font-weight:bold;
	font-size:20px;' id=".$_GET["id"].">".$_GET["v"]."</div>";
					}
					?>   
           <div id="signinwrapper">
               <form method="post" action="signinuser.php">
                   <table align="center">
                   <caption>Sign In here</caption>
                   <tr><th>Email : </th><td><input type="email" name="email" class="signininput" required ></td></tr>
                   <tr><th>Password : </th><td><input type="password" name="password" class="signininput" required ></td></tr>
                   <tr><th  colspan="2" ><input type="submit" id="signinsubmit" name="Submit"  value="Submit" class="submit" ></th></tr>
                   <tr><td colspan="2"> <p id="signupline"> Don't have account ! Sign Up <a id ="signuplink" href="signup.php">here </a></p></td></tr>
				   <tr><td colspan="2"><a id="signupline" href="changepassword.php"> Forgotten password?</a></td></tr>
                   </table>

               </form>
           </div>
           <div id="footer">
                <table> <tr>
                        <td><a class="footerheading " href="termsandpolicies.php">Terms & Policies </a></td>
                        <td><a class="footerheading" href="contactus.php">Contact Us </a></td>
                        <td> <a class="footerheading" href="logoff.php">Sign Out</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>

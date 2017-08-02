
			<?php include_once("header.php");
					if(isset($_GET["id"]))
					{ echo "<div style='text-align:center;
	padding-top:50px;
	font-weight:bold;
	font-size:20px;' id=".$_GET["id"].">".$_GET["v"]."</div>";
					}
					?> 
            <div id="post">
                
                <h3 style="margin-top:45px "> 
				Welcome <?php if(isset($_SESSION["Name"])) { echo $_SESSION["Name"] ; } ?>   </h3><hr id="tableline">
                <table summary="Post here" >
                <form action="postsubmit.php" method="post" enctype="multipart/form-data" >
                    <tr><caption id="posttabletitle"> Post the Object here and help a needy person </caption></tr>
                <tr class="posttablerow">   <th>Name</th><td><?php if(isset($_SESSION["name"])) { ?> <input class ="textinput" name="Name"  id="UserName" type="text" maxlength="30" value=" <?php echo $_SESSION["name"] ; ?>" /></td></tr> 
				 <?php } else {  ?>
				<input class ="textinput" name="Name"  id="UserName" type="text" maxlength="30" /></td></tr> <?php } ?>
                <tr class="posttablerow">   <th>Object</th><td><input class ="textinput" name="ObjectName"  id="Objectname" type="text" maxlength="20" /></td></tr>
                    <tr  class="posttablerow" ><th>Upload the photo</th><td><input id="ObjectImage" type="file" name="ObjectImage" ></td></tr>
                    <tr  class="posttablerow" ><th>Object Location where It was found:</th><td><input class="textinput" type="text" name="ObjectLocation" /></td></tr>
                    <tr  class="posttablerow" ><th>Date when Object found:</th><td><input type="text" class="textinput" name="ObjectDate" /> </td></tr>
                    <tr  class="posttablerow" ><th>Description / Information about Object : </th><td><input class="textareainput" width="400px"  type="textarea" name="ObjectInformation" /> </td></tr>
                    <tr  class="posttablerow" ><th> Contact Details (Email ,Mobile number ):</th><td><input type="text" class="textinput" name="ContactDetails" /></td></tr>
                    <tr  class="posttablerow" ><th> Contact Address  (for object): </th><td><input type="text" class="textinput" name="ContactAddress" /></td></tr>
                    <tr  class="posttablesubmit"><th><input type="Submit" class="submit" name="Submit" value="Post" /></th></tr>

                </form>
                </table>
            </div>
            <?php include_once("footer.php");?>
        </div>
    </body>
</html>

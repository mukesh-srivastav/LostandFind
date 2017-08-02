<?php include_once("header.php");
if(isset($_GET["id"]))
					{ echo "<div style='text-align:center;
	padding-top:50px;
	font-weight:bold;
	font-size:20px;' id=".$_GET["id"].">".$_GET["v"]."</div>";
					} ?>
             <div id="search">
                 <form id="searchform" action="search.php" method="get" >
                     <table id="searchtable" align="center">
                         <tr><th class="searchheading">Put the Search word here : </th>
						 <td><input type="text" id="searchinput"  name="searchinput" /></td>
						 </tr>
                         <tr>
						 <th class="searchheading">Search in Respect to : </th>
						 <td>
								<input type="radio" value="ObjectName" name="searchbasis" class="searchbasis"  > Object Name
                                <input type="radio" value="Location" name="searchbasis" class="searchbasis" >Location 
                                <input type="radio" value="Date" name="searchbasis" class="searchbasis" > Date</td> <br/>

                         <tr><th><input type="Submit" name="Submit" colspan="2" id="Searchsubmit" class="submit" value="Search" ></th></tr>
                     </table>
                 </form>
				</div>
<?php 
 

 
if(isset($_GET["Submit"]))
{
	$SearchInput=$_GET["searchinput"];
	$SearchBasis=$_GET["searchbasis"];
	
	if($SearchBasis!="" AND $SearchInput!="")
	{
		include_once("database.php");
		$conn=connect();
		//$sql="SELECT * FROM lost where '$SearchBasis' ='$SearchInput' ";
		if($SearchBasis=="ObjectName")
		{
			$GLOBALS['sql']="SELECT * FROM lost where ObjectName like '%$SearchInput%'  ";
		}
		else if($SearchBasis=="Location")
		{
			$GLOBALS['sql']="SELECT * from lost where Location like '%$SearchInput%' ";
		}
		else if($SearchBasis=="Date")
		{
			$GLOBALS['sql']="SELECT * from lost where Date like '%$SearchInput%' ";
		}
		$rslt=$conn->query($GLOBALS['sql']); if($rslt!=null) { echo " DATA Contains" ; }
		if($rslt->num_rows>0){ echo " Succesful query  " ;
			while($row=$rslt->fetch_assoc()){ 
			$a=$row["Name"];
			$b=$row["ObjectImage"];
			$c=$row["ObjectName"];
			$d=$row["Location"];
			$e=$row["Date"];
			$f=$row["Contact"];
			$g=$row["Address"];
			$h=$row["Description"] ; 
		?>
                <div id="newsfeed">
                    <div id="news">
                               <p id="newsline"> <?php echo $a ; ?> have got <?php echo $c ; ?> at <?php echo $d ; ?> on
							   <?php echo $e ; ?> </p>
                    </div>
                    <br/>
                    <img width="540px" height="320px" src="<?php echo $b ; ?> " id="objectpic" alt="Photo is not posted" />
                    <div id="newscontact"><h3> Contact Details :<?php echo $f ; ?></h3> </div>
                    <div id="newscontactaddress"><h3  > Address :<?php echo $g ; ?> </h3</div><br/>
                    <div id="objectinfo"><h3>Description : <?php echo $h ; ?> </h3></div>
                    
                </div>

 <?php       }
} else { ?> <div id="newsfeed" > <div id="error"> <?php echo " Sorry ! No Data matched with your input . " ; } 
} header("Location:search.php?id=error&&v=Fill 
Both Inputs before Search."); } 

             include_once("footer.php"); ?>
         </div>
    </body>
</html>

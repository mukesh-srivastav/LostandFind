
			<?php include_once("header.php");
					if(isset($_GET["id"]))
					{ echo "<div style='text-align:center;
	padding-top:50px;
	font-weight:bold;
	font-size:20px;' id=".$_GET["id"].">".$_GET["v"]."</div>";
					}
					?> 
            <div id="newsfeed">
			<?php 	
				include_once("database.php");
				$conn=connect();
				$sql="SELECT * FROM Lost  order by date desc ";
				$rslt=$conn->query($sql);
				if($rslt->num_rows>0){
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
                
                    <p id="newsline"> <?php echo $a ; ?>  have got <?php echo $c ; ?>
					at <?php echo $d ; ?>  on <?php echo $e ; ?>  </p><br/>
                <img width="540px" height="320px" src="<?php echo $b ; ?> " id="objectpic" alt=" " />
                <div id="newscontact"><h3> Contact Details : <?php echo $f ; ?> </h3>
                   
                    </div>
                <div id="newscontactaddress"><h3  > Address :<?php echo $g ; ?> </h3>
                    </div><br/>
                <div id="objectinfo"><h3>Description : <?php echo $h ; ?>  </h3>
                    </div>

				<hr/>
            </div>
			<?php }} 
			include_once("footer.php");
			?>
            
        </div>
    </body>
</html>

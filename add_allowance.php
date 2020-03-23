<?php
	
		require("db.php");
		
		@$id 			= $_POST['allowance_id'];
		@$transport 	= $_POST['transport'];
		@$meal 			= $_POST['meal'];
		@$housing 		= $_POST['housing'];
		@$ltg 			= $_POST['ltg '];
		


		$sql = mysql_query("UPDATE allowance SET meal='$meal', housing='$housing', ltg='$ltg', transport='$transport' WHERE allowance_id='1'");

		if($sql)
		{
			?>
		        <script>
		            alert('Allowance successfully updated...');
		            window.location.href='home_allowance.php';
		        </script>
		    <?php 
		}
		else {
			echo "Not Successfull!"; 
		}
 ?>
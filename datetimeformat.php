
<?php
//PHP Date function.
echo "Today is ".date("d/m/Y")."<br/>";
			echo "Today is ".date("l")."<br/>";
			echo "Default Time is ".date("h:i:sa")."<br/>";
			
			date_default_timezone_set('Asia/Dhaka');
					echo " Bangladesh Time: " .date("h:i:s A")."<br/>";
			
			echo date_default_timezone_get();
			
			
// You when write Copyright footer section give the php code Y is year.

<p>&copy; <?php echo date("Y");?> Training with live project</p>

?>

<?php
//PHP Exception

function numCheck($num){
				if($num > 1){
					throw new exception("Value must be 1 or below");
				}
				return true;
			}
			try{
				numCheck(2);
				echo "if you see this, the number is 1 or below";
			}
			catch(Exception $e)
			{
				echo "Message :" .$e->getMessage();
			}

?>


<?php

function numCheck($num){
				if($num > 1){
					throw new exception("Value must be 1 or below");
				}
				return true;
			}
			try{
				numCheck(0);
				echo "if you see this, the number is 1 or below";
			}
			catch(Exception $e)
			{
				echo "Message :" .$e->getMessage();
			}

?>

<?php
function numCheck($num){
				if($num != 5){
					throw new exception("Number is not 5");
				}
				return true;
			}
			try{
				numCheck(2);
				echo "if you see this, the number is 1 or below";
			}
			catch(Exception $e)
			{
				echo "Error :" .$e->getMessage();
			}

?>

<?php
function numCheck($num){
				if($num != 5){
					throw new exception("Number is not 5");
				}
				return true;
			}
			try{
				numCheck(5);
				echo "Yes you have done";
			}
			catch(Exception $e)
			{
				echo "Error :" .$e->getMessage();
			}

?>
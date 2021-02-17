
<?php
// set cookie.

if(!isset($_COOKIE['visited'])){
				setcookie("visited", "1", time()+85400, "/") or die("Could not set cookie !!");
				echo "This is your first visite in this website";
			} 
			else
			{
				echo "You are our old visitor.";
			}
?>

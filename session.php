
<?php

//session start will be.
session_start();

$_SESSION['user']=" Montashir";
			$_SESSION['password']=" 123";
			
			echo "Username is".$_SESSION['user']."<br/>";
			echo "Password is".$_SESSION['password'];

?>

<?php
//session unset.


$_SESSION['user']=" Montashir";
			$_SESSION['password']=" 123";
			
			echo "Username is".$_SESSION['user']."<br/>";
			session_unset();
			echo "Password is".$_SESSION['password'];


?>

<?php
// you when alredy logout

$_SESSION['user']=" Montashir";
			$_SESSION['password']=" 123";
			
			echo "Username is".$_SESSION['user']."<br/>";
			session_unset();
			echo "Password is".$_SESSION['password'];
			session_destroy();
			

?>
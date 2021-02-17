

<?php
//Filter.
	$str="<h2>I am Learning PHP.</h2>";
			$newstr = filter_var($str, FILTER_SANITIZE_STRING);
			echo $newstr;

?>


<?php
//Integer Not value.

			$int=50.6;
			if(filter_var($int, FILTER_VALIDATE_INT)){
				echo "It is integer value";
			}
			else
			{
				echo "It is not integer value";
			}

?>


<?php
//It si integer value.

			$int=50;
			if(filter_var($int, FILTER_VALIDATE_INT)){
				echo "It is integer value";
			}
			else
			{
				echo "It is not integer value";
			}

?>

<?php
//Validate Email Address.
$mail="montashir92@gmail.com";
			if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
				echo "$mail is validate email address";
			}
			else
			{
				echo "$mail is not validate email address";
			}

?>

<?php
//validate website address.

$url="http://www.trainingwithliveproject.com";
			if(filter_var($url, FILTER_VALIDATE_URL)){
				echo "$url is validate website address";
			}
			else
			{
				echo "$url is not validate website address";
			}
?>
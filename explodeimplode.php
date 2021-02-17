

<?php
//exploding array variation

		$mystr = "We are learning php";
		print_r(explode(" ", $mystr));

?>
<?php
		$mystr = "We are learning php";
			$str = (explode(" ", $mystr));
			echo $str[0];

?>
<?php
//implode php

	$mystr = array("We", "are", "learning", "php");
			echo implode(" ", $mystr);

?>

<?php 
$mystr = array("We", "are", "learning", "php");
			echo implode(", ", $mystr);

?>
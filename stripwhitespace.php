
<?php
//don't support whitespace & dot....
			if(isset($_POST['text'])){
				global $txt;
				$txt = $_POST['text'];
				echo trim($txt, ". ");
			}
?>
<?php
//don't support left whitespace,
			if(isset($_POST['text'])){
				global $txt;
				$txt = $_POST['text'];
				echo ltrim($txt, ". ");
			}

?>
<?php
//don't support right whitespace

			if(isset($_POST['text'])){
				global $txt;
				$txt = $_POST['text'];
				echo rtrim($txt, ". ");
			}


?>


//write html file.
		<form action="montashir.php" method="post"/>
			<input type="text" name="text" value="<?php global $txt; echo $txt; ?>">
			<input type="submit" name="Submit"/>
		</form>	
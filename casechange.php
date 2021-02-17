
<?php
//UpperCase.

			if(isset($_POST['text'])){
				global $txt;
				$txt = $_POST['text'];
				echo strtoupper($txt);
			}

?>
<?php
//Lower Case.

			if(isset($_POST['text'])){
				global $txt;
				$txt = $_POST['text'];
				echo strtolower($txt);
			}

?>
<?php
//First letter upper case.

			if(isset($_POST['text'])){
				global $txt;
				$txt = $_POST['text'];
				echo ucfirst($txt);
			}


?>
<?php
//every first word upper case.

			if(isset($_POST['text'])){
				global $txt;
				$txt = $_POST['text'];
				echo ucwords($txt);
			}

?>
//write html file.

		<form action="montashir.php" method="post"/>
			<input type="text" name="text" value="<?php global $txt; echo $txt; ?>">
			<input type="submit" name="Submit"/>
		</form>
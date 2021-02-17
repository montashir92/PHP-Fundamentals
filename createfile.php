
<?php
// Create file & Write file.

$createfile = fopen("new.txt", "w") or die("file not found !!");
			$one ="Montashir Billah\n";
			fwrite($createfile, $one);
			
			$two ="Bangladesh is small country in the world\n";
			fwrite($createfile, $two);
			fclose($createfile);


?>

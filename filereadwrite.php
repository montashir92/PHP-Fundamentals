
<?php
//just one step.
$ourfile= fopen("demo.txt", "r") or die("file not found !!");
			echo fread($ourfile, filesize("demo.txt"));
			fclose($ourfile);

?>


<?php
// just two step you show 1 line .
$ourfile= fopen("demo.txt", "r") or die("file not found !!");
			echo fgets($ourfile, filesize("demo.txt"));
			fclose($ourfile);

?>

<?php
//three step you show first character.

$ourfile= fopen("demo.txt", "r") or die("file not found !!");
			echo fgetc($ourfile);
			fclose($ourfile);

?>


<?php
//Sow all line in the display
$ourfile= fopen("demo.txt", "r") or die("file not found !!");
			while(!feof($ourfile)){
				echo fgets($ourfile)."<br/>";
			}
			fclose($ourfile);

?>


<?php
// you show only character in the display

$ourfile= fopen("demo.txt", "r") or die("file not found !!");
			while(!feof($ourfile)){
				echo fgetc($ourfile)."<br/>";
			}
			fclose($ourfile);
?>
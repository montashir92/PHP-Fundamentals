
<?php
//Uploaded file & Image.

if(isset($_FILES['image'])){
				$filename = $_FILES['image']['name'];
				$filetmp = $_FILES['image']['tmp_name'];
				move_uploaded_file($filetmp, "img/".$filename);
				echo "Image uploaded successfully";
				
			}

?>

// write here html code.

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
			<input type="file" name="image"/>
			<input type="submit" value="Submit"/>
</form>
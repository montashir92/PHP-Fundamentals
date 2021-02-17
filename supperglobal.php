//first step
<?php
//Supper GLOBALS Variable
			$x=5;
			$y=10;
			function sum(){
				$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
			}
			
			sum();
			echo $z;
	
			 /*supper global.
			$_SERVER,
			$_GLOBALS,
			$_SERVER,
			$_REQUEST,
			$_POST,
			$_GET,
			$_FILE,
			$_ENV,
			$_COOKIE,
			$_SESSION,
			*/
?>
//End first

//Second step

	<?php
	// your server location search.
	
	
	echo $_SERVER['PHP_SELF'];
	
	// your server name .
	
	echo $_SERVER['SERVER_NAME'];
	
	//php path where i am.
	
	echo $_SERVER['SCRIPT_NAME'];
	
	//what use browser show.
	
	echo $_SERVER['HTTP_USER_AGENT'];
	
	// Search your server IP Address.
	
	
	echo $_SERVER['SERVER_ADDR'];
	?>
//End second step

<?php
//ERROR REPORTING.

error_reporting(E_ERROR | E_WARNING |E_PARSE );
			$price = 45;
			
			if($price == 45)
			{
				echo "This price is $price";
			}
			else
			{
				echo "price is not 45";
			}
		

?>


<?php
//undefind notice

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
			$price = 45;
			
			if($pric == 45)
			{
				echo "This price is $price";
			}
			else
			{
				echo "price is not 45";
			}


?>
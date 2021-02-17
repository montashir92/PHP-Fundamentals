<?php
// Variable scope & Global create.
	$x=15;
			function test1(){
				global $x;
				$a=5;
				echo $a;
				echo "<br/>";
				echo "access from function test1".$x;
				echo "<br/>";
			}
			function test2(){
				global $x;
				$b=10;
				echo $b;
				echo "<br/>";
				echo "access from function test2".$x;
			}
			
			test1();
			test2();
?>
//You have write html file.

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        	username :<input type="text" name="username">
            <input type="submit" value="Submit">
        </form>


<?php
//REQUEST_METHOD & POST_METHOD.

if($_SERVER["REQUEST_METHOD"] =="POST"){
				$name = $_REQUEST['username'];
				if(empty($name)){
					echo "<span style='color:red'>username field must not be empty</span>";
					}
					else
					{
						echo "<span style='color:green'>You Have submited: " .$name."</span>";
					}
				
				}



?>
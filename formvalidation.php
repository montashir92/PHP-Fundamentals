//html form write here.

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <table>
        		
                <tr>
                <td>Name :</td>
                <td><input type="text" name="name" required></td>
                </tr>
                
                <tr>
                <td>E-mail :</td>
                <td><input type="text" name="email" required></td>
                </tr>
                
                <tr>
                <td>Website :</td>
                <td><input type="text" name="website" required></td>
                </tr>
                
                <tr>
                <td>Comment :</td>
                <td><textarea name="comment" rows="5" cols="40"></textarea></td>
                </tr>
                
                
                <tr>
                <td>Gender :</td>
                <td><input type="radio" name="sex" value="male"> Male
                <input type="radio" name="sex" value="female"> Female</td>
                </tr>
                
                
                <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Send"></td>
                </tr>
                
        </table>
	</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
				$name       = validate($_POST['name']);
				$email      = validate($_POST['email']);
				$website    = validate($_POST['website']);
				$comment    = validate($_POST['comment']);
				$sex        = validate($_POST['sex']);
				
				
				
				echo "Name :".$name."<br/>";
			    echo "Email :".$email."<br/>";
				echo "Website :".$website."<br/>";
				echo "Comment :".$comment."<br/>";
				echo "Sex :".$sex;
				
				}
				function validate($data){
					$data = trim($data);
					$data = stripcslashes($data);
					$data = htmlspecialchars($data);
					return $data;
					}
			

?>
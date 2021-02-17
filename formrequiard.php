
<?php
$errname = $erremail = $errwebsite = $errcomment = $errsex ="";
	
	$name = $email = $website = $comment = $sex ="";
			
			
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				
				if(empty($_POST['name'])){
					$errname = "<span style='color:red'>Name is Required</span>";
					}
					else
					{
						$name = validate($_POST['name']);
						}
						
						
				if(empty($_POST['email'])){
					$erremail = "<span style='color:red'>Email is Required</span>";
					}
					else
					{
						$email = validate($_POST['email']);
						}
						
						
				if(empty($_POST['website'])){
					$errwebsite = "<span style='color:red'>Website is Required</span>";
					}
					else
					{
						$website = validate($_POST['website']);
						}
						
						
				if(empty($_POST['sex'])){
					$errsex = "<span style='color:red'>Sex is Required</span>";
					}
					else
					{
						$sex = validate($_POST['sex']);
						}
						
				
				$comment    = validate($_POST['comment']);
				
				
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


// you write html file.




	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <table>
        		<p style="color:red">Required field</p>
                <tr>
                <td>Name :</td>
                <td><input type="text" name="name" >* <?php echo $errname; ?></td>
                </tr>
                
                <tr>
                <td>E-mail :</td>
                <td><input type="text" name="email" >* <?php echo $erremail; ?></td>
                </tr>
                
                <tr>
                <td>Website :</td>
                <td><input type="text" name="website" >* <?php echo $errwebsite; ?></td>
                </tr>
                
                <tr>
                <td>Comment :</td>
                <td><textarea name="comment" rows="5" cols="40"></textarea></td>
                </tr>
                
                
                <tr>
                <td>Gender :</td>
                <td><input type="radio" name="sex" value="male"> Male
                <input type="radio" name="sex" value="female"> Female* <?php echo $errsex; ?></td>
                </tr>
                
                
                <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Send"></td>
                </tr>
                
        </table>
	</form>
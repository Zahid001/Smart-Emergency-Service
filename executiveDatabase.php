
<?php
include "database.php";
class Executive 
{
public function executiveLogIn(){
		


		$obj=new Database;
		$mail=mysql_real_escape_string($_POST['email']) ;
		$pass=mysql_real_escape_string($_POST['psw']);
		$getInfoExecutive = mysqli_query($obj->con," SELECT * FROM `executive` WHERE `mail` = '$mail' ");
		$rowExecutive=mysqli_fetch_array($getInfoExecutive);

	
	if ($rowExecutive) {
		if ($pass == $rowExecutive['password']) {
			
			$id=$rowExecutive['eid'];
         	
         	$url = "requests.php?ID=".$id;
			 header("Location: ".$url);
			 exit();
		}
		else{
		echo "Invalid password";
	}
		
  
	}
	else{
		echo "Wrong email/password";
	}
	
	}



}
?>
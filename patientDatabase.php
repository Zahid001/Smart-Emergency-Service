<?php
include "database.php";
class Patient 
{

public function patientLogIn(){
		


		$obj=new Database;
		$mail=mysql_real_escape_string($_POST['email']) ;
		$pass=mysql_real_escape_string($_POST['psw']);
		$getInfoPatient = mysqli_query($obj->con," SELECT * FROM `patient` WHERE `mail` = '$mail' ");
		$rowPatient=mysqli_fetch_array($getInfoPatient);

	
	if ($rowPatient) {
		if ($pass == $rowPatient['password']) {
			
			$id=$rowPatient['pid'];
         	
         	$url = "index.php?ID=".$id;
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

	public function patientRegistration(){

			$obj = new DataOperation;
			$myArray = array(
			"name" => $_POST["name"],
			"gender" => $_POST["gender"],
			"dob" => $_POST["dob"],
			"phone" => $_POST["phone"], 
			"mail" => $_POST["email"],
			"password" => $_POST["psw"]
			);
			if($obj->insert_record("patient",$myArray)){
			echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}

		
	}
}

?>
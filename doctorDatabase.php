<?php

/**
 * 
 */
include "database.php";
class Doctor 
{
	
	/*$name = ;
	$gender = ;
	$phone = ;
	$email = ;
	$expertise = ;
	$password = ;
*/
	public function __construct(){
	}
	//public $obj = new DataOperation;

	public function doctorRegistration(){

			$obj = new DataOperation;
			$myArray = array(
			"doctorName" => $_POST["name"],
			"gender" => $_POST["gender"],
			"doctorPhone" => $_POST["phone"], 
			"doctorMail" => $_POST["email"],
			"doctorSpeciality" => $_POST["speciality"],
			"doctorPassword" => $_POST["password"]
			);
			if($obj->insert_record("doctor",$myArray)){
			echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}

		
	}
	public function doctorProfile($id){
		$obj = new DataOperation;
		$query = " SELECT * FROM `doctor` WHERE doctorId = ".$id ;
		$profileInfo = $obj->fetch_single_record($query); 
		return $profileInfo;
	}

	public function doctorStatus($id){
		$obj = new DataOperation;
		
		$sql = " UPDATE `doctor` SET `status` = '".$_POST['availability']."' WHERE doctorId = ".$id;
		
		if($obj->query_execution($sql)){
			echo "<script type='text/javascript'>alert('status submitted successfully!')</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}
		


	}
	public function doctorLogIn(){
		


		$obj=new Database;
		$mail=mysql_real_escape_string($_POST['email']) ;
		$pass=mysql_real_escape_string($_POST['psw']);
		$getInfoDoctor = mysqli_query($obj->con," SELECT * FROM `doctor` WHERE `doctorMail` = '$mail' ");
		$rowDoctor=mysqli_fetch_array($getInfoDoctor);

	
	if ($rowDoctor) {
		if ($pass == $rowDoctor['doctorPassword']) {
			
			$id=$rowDoctor['doctorId'];
         	
         	$url = "doctor.php?ID=".$id;
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


	public function doctorProfileEdit($id){
		$obj = new DataOperation;

		$sql = "UPDATE `doctor` SET `doctorName`='".$_POST['name']."',`gender`='".$_POST['gender']."',`doctorPhone`='".$_POST['phn']."',`doctorMail`='".$_POST['mail']."',`doctorSpeciality`='".$_POST['expert']."',`doctorPassword`='".$_POST['pass']."',`birthDate`='".$_POST['db']."' WHERE  ".$id;

		

		
		if($obj->update_record($sql)){
			echo "<script type='text/javascript'>alert('update successfully!')</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}


	}






}

/* $doctorObj = new Doctor;
    if(isset($_POST["doctorInfoSubmit"])){
        $doctorObj->doctorRegistration();
    }

    if(isset($_POST["updateBtn"])){
        $doctorObj->doctorProfileEdit('1');
    }
*/

?>
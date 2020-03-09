<?php


 if ($_POST['type'] == "Doctor") {
 	if (isset($_POST['login'])) {
	include 'doctorDatabase.php';

	$doctor=new Doctor;
	$doctor->doctorLogIn();


}
 }
	
if ($_POST['type'] == "Patient"){
	if (isset($_POST['login'])) {
		include 'patientDatabase.php';
		$patient = new Patient;
		$patient->patientLogIn();
		
	}
}

if ($_POST['type'] == "Executive"){
	if (isset($_POST['login'])) {
		include 'executiveDatabase.php';
		$executive = new Executive;
		$executive->executiveLogIn();
		
	}
}
	

 include ('header.html') ;


?>






<center>

<form method ="post" style="margin-top: 200px; margin-bottom: 100px;">
	<h3 style="padding-bottom: 20px;">Log In</h3>

	<table>
		<tr>
			<td>Email</td>
			<td><input type="email" placeholder="Email" name="email" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password"  placeholder="Password" name="psw" required></td>
		</tr>
		<tr>
			<td>
				<input type="radio" name="type" value="Patient">Patient
				<input type="radio" name="type" value="Doctor">Doctor
				<input type="radio" name="type" value="Executive">Executive
			</td>
			<td><input style="float: right; margin-top: 10px;" class="btn btn--pill btn--green" type="submit" value="Log In" name="login"></td>
		</tr>
		
		
	</table>
	
</form>

</center>




<?php include ('footer.html') ;?>

<?php
	
	
?>

<style>
	td{
		padding-right: 30px; 
	}
</style>
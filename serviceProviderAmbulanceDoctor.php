<?php
include "requestDatabase.php";
if (isset($_POST['requestSend'])){
	$reqObj = new Request ;
	$reqObj->insert_request();
}

?>




<?php include ('header.html'); ?>


<div style="padding-top: 200px; ">
	
	
<center>


<form method="post" style="height: 400px; padding-top: 150px;">
	<table style=" ">
		<tr>
			<td>Location</td>
			<td><input type="text" name="location" required><br></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact" required><br></td>
		</tr> 
		<tr style="padding-top: 25px;">
			<td>
				
			</td>
			<td>
				<input style="margin-left: 20px;"  type="radio" name="reqtype" value="Ambulance" checked>Ambulance
				<input style="margin-left: 0px;"  type="radio" name="reqtype" value="Doctor" checked>Doctor
				
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
			<td >
				<input class="btn btn--pill btn--green" style="margin-left: 100px; " type="submit" value="Send" name="requestSend">
			</td>
		</tr>
	</table>
  
  

  
  
  
  
</form>


</center>	

</div>	










<?php include ('footer.html'); ?>

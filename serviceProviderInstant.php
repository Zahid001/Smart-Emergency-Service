
<?php
if (isset($_POST['sendInstantRequest'])){
include "requestDatabase.php";

	$reqObj = new Request ;
	$reqObj->insert_request_instant_help();
}

?>



<?php include ('header.html'); ?>


<div style="padding-top: 200px; ">
	
	
<center>


<form method="post" style="height: 400px; padding-top: 150px;">
	<table style=" ">
		<tr>
			<td>Tell us your problem</td>
			<td><textarea name="asking" rows="4" cols="50" required></textarea><br></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td>
				<input type="text" name="contact" required>
				<input style="margin-left: 45px;"  type="radio" name="reqtype" value="Help" checked>Help
				<input class="btn btn--pill btn--green" style="margin-left: 45px; " type="submit" value="Send" name="sendInstantRequest">
			</td>
		</tr> 
		
	</table>
  
  

  
  
  
  
</form>


</center>	

</div>	










<?php include ('footer.html'); ?>

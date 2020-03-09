<?php include('header.html') ;

$idNumber = $_GET['ID'];
include "doctorDatabase.php";
$doctor = new Doctor;

if(isset($_POST['status'])){

  $doctor->doctorStatus($idNumber);
}

?>

<center>
<div  style= "background-image:url(images/home_background_1.jpg) ; padding-top: 200px; padding-bottom: 200px;">
	<h1>Availability</h1>
	
  <form method="post">
	<table style="margin-top: 50px;">
		 <tr>
			<td>
				<input type="radio" name="availability"  value="yes">yes
				<input style="padding-right: 50px;" type="radio" name="availability" value="no">no
			</td>
      
		</tr> 
    <tr>
      <td>
        <input type="submit" class="rounded-circle btn btn--pill btn--green" name="status" value="Go">
      </td>
    </tr>
		
	</table>
  </form>
	<table>
		<h2 style="padding-top: 80px; padding-bottom: 30px;">Request</h2>
		<tr>
          <td>Id</td>
          
          <td>Request Type</td>
          
          
          <td>Phone</td>
          <td>Place</td>
          <td>Action</td>
         </tr>
		<tr>
          <td>52</td>
          
          <td>Doctor</td>
          
          
          <td>01711111111</td>
          <td>Shukrabad</td>
          <td>
            <a href="requestApprove.php"><button style="background-color: green;">Accept</button></a>
            <a href="failed.php"><button style="background-color: red;">Reject</button></a>
          </td>
          
        </tr>
        <tr>
          <td>2</td>
          
          <td>Health Tips</td>
          

          
          <td>01711111111</td>
          <td>Shukrabad</td>
          <td>
            <a href="requestApprove.php"><button style="background-color: green;">Accept</button></a>
            <a href="failed.php"><button style="background-color: red;">Reject</button></a>
          </td>
          
        </tr>
	</table>
</div>
</center>


<?php include('footer.html') ;?>
<style>
button{
  border-radius: 17%;
  margin: 10px;
  color:  white;
  height: 50px;
  width: 100px;

}
table, tr, td {
    border: 1px solid black;
}
td,tr{
  text-align: center;
  padding: 20px;
}
</style>
<?php include('header.html') ;?>

<center>
	<div style="padding-top: 200px;padding-bottom: 200px;">
		<h1>Active Doctors</h1>
		<table>
			<tr>
				<td>Doctor Name</td>
				<td>Speciality</td>
				<td>Gender</td>
				<td>Contact</td>
				<td>Request</td>
			</tr>
			<tr>
				<td>Amin</td>
				<td>Kidney</td>
				<td>Male</td>
				<td>0189764369</td>
				<td><a href="success.php"><button style="background-color: green;">Send</button></a></td>
			</tr>
			<tr>
				<td>Sayra</td>
				<td>Liver</td>
				<td>Female</td>
				<td>0189764369</td>
				<td><a href="success.php"><button style="background-color: green;">Send</button></a></td>
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
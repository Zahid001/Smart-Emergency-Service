<?php include('header.html'); ?>
<div style="height: 800px; padding-top: 300px;">

	<center>
		<h1>Request & Validation</h1><br><br>
		<table style="height: 200px;">
			<tr>
				<td>Consumer ID</td>
				<td>trxID</td>
    			<td>Request Type</td>
    			<td>Charge</td>
    			<td>Payment Completed</td>
    			<td>Contact</td>
    			<td>Feedback</td>
    			<td>Clearence</td>
  			</tr>
  			<tr>
  				<td>22</td>
    			<td>xb663o</td>
    			<td>Ambulance</td>

    			<td>1000 tk</td>
    			<td>
    				<input type="radio" value="yes" name="" > yes
    				<input type="radio" value="no" name="" > no
    			</td>
    			<td>01711111111</td>
    			<td>Good</td>
    			<td>
    				<button>Yes</button>
    				<button>No</button>
    			</td>
  			</tr>
  			<tr>
  				<td>52</td>
    			<td>xb663ow</td>
    			<td>Doctor</td>
    			<td>2000 tk</td>
    			<td>
    				<input type="radio" value="yes" name="" > yes
    				<input type="radio" value="no" name="" > no
    			</td>
    			<td>01711111111</td>
    			<td>Good</td>
    			<td>
    				<button>Yes</button>
    				<button>No</button>
    			</td>
  			</tr>
  			<tr>
  				<td>2</td>
    			<td>xb663ow</td>
    			<td>Health Tips</td>
    			<td>20 tk</td>

    			<td>
    				<input type="radio" value="yes" name="" > yes
    				<input type="radio" value="no" name="" > no
    			</td>
    			<td>01711111111</td>
    			<td>Good</td>
    			<td>
    				<button>Yes</button>
    				<button>No</button>
    			</td>
  			</tr>
			
		</table>
	</center>

</div>


<style>
table, tr, td {
    border: 1px solid black;
}
td,tr{
	padding: 10px;
	text-align: center;
}
</style>




<?php include('footer.html'); ?>
<style>
	button{
  border-radius: 17%;
  margin: 10px;
  color:  black;
  height: 50px;
  width: 100px;

}
</style>
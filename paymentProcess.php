<?php  
	if (isset($_POST['done'])) {
		include "paymentDatabase.php";
		$payment = new  Payment; 
		$pay = $payment->get_clearence();
		if($pay){
			header("Location:paymentSuccess.php");
		}
		else{
			header("Location:paymentProcessFailue.php");
		}
	}
	

?>
<?php include ('header.html'); ?>



<div class="super_container">
	
	<!-- Header -->

	

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/services.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">About <span>SES</span></div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">Home</a></li>
									<li>Payment Process</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 



	<center>

	<div>
		



<form method="post" style="height: 400px; padding-top: 150px;">
	<div>trxID<input style="margin-left: 50px;"  type="text" name="trx"></div>
	<div>Amount<input style="margin-left: 30px;"  type="text" name="tk"></div>
	<div>Ref<input style="margin-left: 60px;"  type="text" name="ref"></div>
  
  
  <input class="btn" style="margin-left: 190px;" type="submit" value="Send" name="done">
</form>


</center>

	</div>






<?php include ('footer.html'); ?>
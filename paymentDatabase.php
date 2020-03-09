<?php
	include "database.php";
	
	class Payment 
	{
		public function get_payment_info(){
			$obj = new DataOperation;

			$addSql ="";

			$info=$obj->fetch_record("payment",$addSql);
		return $info;
		}
		public function get_clearence(){
			$bool = false;
			$paymentObj = new Payment;
			$details=$paymentObj->get_payment_info();
			foreach ($details as $row) {
				if (($row['trxId']==$_POST['trx']) && ($row['amount']==$_POST['tk']) && ($row['ref']==$_POST['ref'])) {
					$bool=true;
				}
				
			}
			return $bool;

		}

	}
?>
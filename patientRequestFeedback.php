


<?php 


include('header.html'); ?>
<div style=" padding-top:300px; padding-bottom:  200px;">

  <center>
    <h1>Request Status</h1><br><br>
    <table style="height: 200px;">
      <tr>
        
        
          <td>Request Type</td>
          
          <td>Contact</td>
          <td>Location</td>
          <td>Feedback</td>
          <td>Done</td>
        </tr>

        <?php
        include "requestDatabase.php";
          $request = new Request;
          $information=$request->fetch_request();

          foreach ($information as $row) {
//breaking point
?>





        <tr>
          <td><?php echo $row['type'];?></td>
          <td><?php echo $row['contact'];?></td>
          <td><?php echo $row['location'];?></td>
          <td>
            
            <?php $row['feedback'];?>
            
          </td>
          <td>
            <a href="payment.php"><button>Yes</button></a>
            <a href=""><button>No</button></a>
            
          </td>
          
        </tr>

        <?php
}

?>
        
      
    </table>
  </center>

</div>







<?php include('footer.html'); ?>
<style>
button{
  border-radius: 17%;
  margin: 10px;
  color:  black;
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
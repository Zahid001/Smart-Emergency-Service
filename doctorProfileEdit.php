
<?php
  $idNumber = $_GET['id'];
include "doctorDatabase.php";
  if(isset($_POST["updateBtn"])){
        $doctorObj = new Doctor;
        $doctorObj->doctorProfileEdit($idNumber);
        header("Location:doctorProfile.php?id=".$idNumber);
    }

include('header.html') ;
      

?>

        
            

            <div style="padding-top: 300px;">
            <center>
              <h2>Edit Information</h2>
              <form method="POST" >
            <table >
              <tr>
                <td style="padding-right: 170px ; padding-left: 0px;">Name</td>
                <?php 

                     $doctorObject = new Doctor;
                    //$where = array("id"=>'1',);
                    $row = $doctorObject->doctorProfile($idNumber);
                      /*$doctorObject = new DataOperation;

                      $doctorProfileInformation = $obj->fetch_single_record('1'); */

                      //foreach ($doctorProfileInformation as $row) {
                        # code...
                     
                ?>
                
                <td style="padding-left: ;" >
                  <input type="text" name="name" value="<?php echo $row['doctorName']; ?>">
                  
                    
                </td>
              </tr>

              <tr>
                <td style="padding-right: 170px ; padding-left: 0px;">Phone</td>
                
                <td style="padding-left: ;" >
                  <input type="phn" name="phn" value="<?php echo $row['doctorPhone']; ?>"></td>
              </tr>

              <tr>
                <td style="padding-right: 170px ; padding-left: 0px;">Email</td>
                
                <td style="padding-left: ;" >
                  <input type="Email" name="mail" value="<?php echo $row['doctorMail']; ?>"></td>
              </tr>

              <tr>
                <td style="padding-right: 170px ; padding-left: 0px;">Gender</td>
                
                <td style="padding-left: ;" >
                  <input type="text" name="gender" value="<?php echo $row['gender']; ?>"></td>
              </tr>
              
              <tr>
              <td style="padding-right:  ; padding-left: 0px;">Date Of Birth</td>
                
                <td style="padding-left: ;" >
                  <input type="Date" name="db" value="<?php echo $row['birthDate']; ?>"></td>
              </tr>
              <tr>
              <td style="padding-right:  ; padding-left: 0px;">Password</td>
                
                <td style="padding-left: ;" >
                  <input type="Password" name="pass" value="<?php echo $row['doctorPassword']; ?>"></td>
              </tr>
              <tr>
               <td style="padding-right:  ; padding-left: 0px;">Speciality</td>
                
                <td style="padding-left: ;" >
                  <input type="text" name="expert" value="<?php echo $row['doctorSpeciality']; ?>"></td>
              </tr>
              

            </table>


            </center>
    
            

<div style="float: right; padding-top: 10px;padding-bottom: 100px; margin-right: 485px;">
 
    <input type="submit" name="updateBtn" value="Update" class=" btn btn--pill btn--green"></input>
  
  
</div>

</div>  
        
</form>

</div>

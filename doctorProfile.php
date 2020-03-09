
<?php
$idNumber = $_GET['id'];
include "doctorDatabase.php";
include('header.html') ;
      

?>

        
            <div class="box-body"  style="padding-top: 200px;">
                     <div class="col-sm-12">
                     <div  align="center"> <img style="height: 150px; width: 150px; border-radius: 50%;" alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> <br>
                
                      <input id="profile-image-upload" class="hidden" type="file">
                      <div style="color:#999; margin-top: 20px;" ><button class=" btn btn--pill btn--green">Profile Picture</button></div>
                
           
                     </div>
              
              <br>
    
            </div>
            <div style="padding-left: 00px;">
            
              <center>
                <h4 style="color:#00b1b1; margin-left: 0px;">Prasad Shankar Aryas </h4>
              </center>
            
                        
            

            
            <center>
            <table>
              <tr>
                <td style="padding-right: 170px ; padding-left: 0px;">Name</td>
                <?php 

                    $doctorObject = new Doctor;
                    
                    $row = $doctorObject->doctorProfile($idNumber);
                      
                     
                ?>
                
                <td style="padding-left: ;" ><?php echo $row['doctorName']; ?></td>
              </tr>

              <tr>
                <td style="padding-right: 170px ; padding-left: 0px;">Phone</td>
                
                <td style="padding-left: ;" ><?php echo $row['doctorPhone']; ?></td>
              </tr>

              <tr>
                <td style="padding-right: 170px ; padding-left: 0px;">Email</td>
                
                <td style="padding-left: ;" ><?php echo $row['doctorMail']; ?></td>
              </tr>
              
              <tr>
              <td style="padding-right:  ; padding-left: 0px;">Date Of Birth</td>
                
                <td style="padding-left: ;" ><?php echo $row['birthDate']; ?></td>
              </tr>
              <tr>
              <td style="padding-right:  ; padding-left: 0px;">Password</td>
                
                <td style="padding-left: ;" ><?php echo $row['doctorPassword']; ?></td>
              </tr>
              <tr>
               <td style="padding-right:  ; padding-left: 0px;">Speciality</td>
                
                <td style="padding-left: ;" ><?php echo $row['doctorSpeciality']; ?></td>
              </tr>
              

            </table>
            </center>
    
            

<div style="float: right; padding-top: 20px;padding-bottom: 100px; margin-right: 510px;">
  <a href="doctorProfileEdit.php?id=<?php echo $row['doctorId']; ?>"><button class=" btn btn--pill btn--green">Edit</button></a>
  
 
</div>

</div>  
        


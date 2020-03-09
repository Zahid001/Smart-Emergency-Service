 

<?php
    include 'doctorDatabase.php' ;
    
    if(isset($_POST["doctorInfoSubmit"])){

        if ($_POST["password"] == $_POST["confirmPassword"]) {
            $doctorObj = new Doctor;
             $doctorObj->doctorRegistration();
            header("Location:login.php");
        }
        else{
             echo "<script type='text/javascript'>alert('password missmatch!')</script>";
        }
       
    }
    else{
                echo "<script type='text/javascript'>alert('something wrong!')</script>";
            }
 include('header.html');
    
    
?>

       
    


        <div  style="height: 800px; padding-top: 200px;">
        
                <center>          
                    <h2 class="title">Doctor Registration</h2> <br><br>
                </center>      
                    <form method="POST" action="" style="margin-left: 600px;">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" required>
                        </div>
                       
                        <div class="input-group">
                            
                                <select name="gender" required>
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                               
                            
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="date" placeholder="Date of Birth" name="dob" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="speciality" name="speciality" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirm Password" name="confirmPassword" required>
                        </div><br>
                        
                        
                        <div class="p-t-10" style="padding-left: 85px;">
                            
                            <input name="doctorInfoSubmit" class="btn btn--pill btn--green" type="submit" value="Sign Up">
                        </div>
                    </form>
                    
        </div>
    
    



<?php 
//include "doctorDatabse.php";

    
    include('footer.html');
?>

                
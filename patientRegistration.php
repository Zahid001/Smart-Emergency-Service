 

<?php include('header.html');

include 'patientDatabase.php' ;
    
    if(isset($_POST["patientInfoSubmit"])){

        if ($_POST["psw"] == $_POST["confirmPsw"]) {
            $patientObj = new Patient;
            $patientObj->patientRegistration();
            header("Location:login.php");
        }
        else{
             echo "<script type='text/javascript'>alert('password missmatch!')</script>";
        }
       
    }
    /*else{
                echo "<script type='text/javascript'>alert('something wrong!')</script>";
            }*/

?>

       
    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">About <span>SES</span></div>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>Registration</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div  style="height: 800px; padding-top: 200px;">
        
                <center>          
                    <h2 class="title">Patient Registration</h2> <br><br>
                </center>      
                    <form method="POST" style="margin-left: 600px;">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name">
                        </div>
                       
                        <div class="input-group">
                            
                                <select name="gender">
                                   <option disabled="disabled" selected="selected">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                               
                            
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="date" placeholder="Date of Birth" name="dob" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Password" name="psw">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Confirm Password" name="confirmPsw">
                        </div>
                        
                        <div class="p-t-10" style="padding-left: 85px;">
                            
                            <button class="btn btn--pill btn--green" name="patientInfoSubmit" type="submit">Sign Up</button>
                        </div>
                    </form>
                    
        </div>
    
    



<?php include('footer.html');?>

                
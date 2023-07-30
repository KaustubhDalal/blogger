<script type="text/javascript">
          //function for firstname validation//




//function for password//
function mypass(){
var myPass = document.getElementById("newpass");
var letter = document.getElementById("letter");
var cnfpass = document.getElementById("cnewpass");
var p = document.getElementById("p");


  //Validate  password//
  var v = /[a-z]/;
  var u = /[A-Z]/;
  var w = /[0-9]/;
  
  if(myPass.value.match(v) && myPass.value.match(u) && myPass.value.match(w) && myPass.value.length >= 8){
    document.getElementById("letter").innerHTML = " ";
  }
  else{
    document.getElementById("letter").innerHTML = "Password must contains numeric,lowercase and <br >uppercase characters and minimum 8 characters";
  }

}
//Function for confirm Password//
function mycpass(){
var myPass = document.getElementById("newpass");
var cnfpass = document.getElementById("cnewpass");
    if(myPass.value == cnfpass.value){
      document.getElementById("p1").innerHTML = " ";
    }
    else{
      document.getElementById("p1").innerHTML = "Password does not match";
    }


}
       </script>
<?php

   error_reporting(0);
   ob_start();
   session_start();
   include("header2.php");
   include_once 'conn.php';

 $verrified_mail=$_SESSION['login_user_email'];
//echo  $verrified_mail.'<br>';
    if (isset($_POST['submit']))
    {    
    	
		   // $usernm=$_POST['username'];
        $newpass=$_POST['newpass'];
        $cnewpass=$_POST['cnewpass'];
        
        
       // $id=$_POST['blogid'];
		    //$pass=$_POST['password'];

	  		 $sql = "update membership_users set Password='$newpass' ,CPassword='$cnewpass' WHERE Email='$verrified_mail' ";
			 //echo $sql;
	 	   	 $result=mysqli_query($conn, $sql);
         //echo $result;
         
         if($sql)
         {
          $msg="Password Updated";
         }
	   		 if (mysqli_num_rows($result)==1) 
         {
	   			//header("Location:Login.php");
	   			echo "password updated";
	  		 } 
	  		 else 
	  		 {
          
	  			//$error = "Incorrect username or password.";
	  			//echo $error;
	   		 }
   			 mysqli_close($conn);
		}

	
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;

}


span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>



    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    
   <div class="col-lg-4 " style=" margin-top: 5%;">
                     <h2>Reset Password</h2>
                    <!-- Contact Form -->
                    <form action="" method="post"  name="message" data-focus="false" style="border:none !important;">
                         <!--<input type="hidden" class="form-control-input" name="blogid" id="blogid"  >-->
                        
                        <div class="form-group">
                            <input type="password" class="form-control-input" name="newpass" id="newpass" oninput="mypass()" required>
                            <label class="label-control" for="cemail">New Password</label>
                            <div class="help-block with-errors"></div>
                        </div>
                         <p id="letter" style="color: red"></p>
                         <div class="form-group">
                            <input type="password" class="form-control-input" name="cnewpass" id="cnewpass"  oninput="mycpass()" required>
                            <label class="label-control" for="cemail">Confirm Password</label>
                            <div class="help-block with-errors"></div>
                             <p id="p1" style="color: red"></p>
                        </div>
                       <?php echo $msg?>
                       
                        <div class="form-group">
                            <input type="submit" class="form-control-submit-button" value="Reset"name="submit">
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                        
                         <div class="form-message">
                            <p>Don't have an account? <a href="registeruser.php">Sign in</a>.</p>
                        </div>
                         <div class="form-message">
                            <p>Already have an account? <a href="login.php">Login</a>.</p>
                        </div>
                    </form>
                    <!-- end of contact form -->

                
            </div> <!-- end of row -->
        
   


                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/img6.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


<?php 
include('footer.php');
?>
</body>

        
           <!-- end of row -->
            
               
    <!-- end of contact -->
</html>

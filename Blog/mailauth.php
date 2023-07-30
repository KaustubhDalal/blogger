<script type="text/javascript">
          //function for firstname validation//

 

function mymail(){

//Function for Email//
var myEmail = document.getElementById("email");
var eml = document.getElementById("eml");


  var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(myEmail.value.match(pattern)){
    document.getElementById("eml").innerHTML = " ";
    document.register_form.email.focus();
  }
  else{
    document.getElementById("eml").innerHTML = "Please provide a valid email address ";
  }
}



       </script>
<?php

   error_reporting(0);
   ob_start();
   session_start();
   include("header2.php");
   include_once 'conn.php';


    if (isset($_POST['submit']))
    {    
    	
		    $email=$_POST['email'];
        //$id=$_POST['blogid'];
		    //$pass=$_POST['password'];

	  		 $sql = "SELECT * FROM membership_users WHERE Email='$email'";
			 //echo $sql;
	 	   	 $result=mysqli_query($conn, $sql);
	   		 if (mysqli_num_rows($result)==1) 
         {
	   			header("Location:resetpass.php");
	   			$_SESSION['login_user']=$usernm;
          $_SESSION['login_user_id']=$id;
          $_SESSION['login_user_email']=$email;
	   			echo $_SESSION['login_user'];
	  		 } 
	  		 else 
	  		 {
          
	  			$error = "Incorrect email.";
	  		
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
                     <h2>Verify Email</h2>
                    <!-- Contact Form -->
                    <form action="" method="post"  name="message" data-focus="false" style="border:none !important;">
                         <input type="hidden" class="form-control-input" name="blogid" id="blogid"  >
                        <div class="form-group">
                            <input type="email" class="form-control-input" name="email" id="email" oninput="mymail()" required>
                            <label class="label-control" for="cname">Email</label>
                            <div class="help-block with-errors"></div>
                            <p id="eml" style="color: red"></p>
                        </div>
                        <?php echo $error;?>
                        
                       
                       
                        <div class="form-group">
                            <input type="submit" class="form-control-submit-button" value="Verify" name="submit">
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                         <div class="form-message">
                            <p>Don't have an account? <a href="registeruser.php">Sign in</a>.</p>
                        </div>
                    </form>
                    <!-- end of contact form -->

                
            </div> <!-- end of row -->
        
   


                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/img7.svg" alt="alternative">
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

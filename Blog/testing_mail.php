<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
          //function for firstname validation//

  

       </script>

<?php

   error_reporting(0);

  // ob_start();
   session_start();
   include("header2.php");
   include_once 'conn.php';


    if (isset($_POST['submit']))
    {    

		$email=mysqli_real_escape_string($conn,$_POST['email']);
		
        //$id=$_POST['blogid'];
		//$pass=$_POST['password'];

	  	 $sql = "SELECT * FROM membership_users WHERE Email='$email'";
         
		//echo $sql;
			// echo $sql;
	 	 $result=mysqli_query($conn, $sql);
         
	   	 if (mysqli_num_rows($result)>0) 
         {

    		while($row1=mysqli_fetch_assoc($result))
	    	{	
	    		$username=$row1['Username'];
	    		//echo "string".$username;
	    		$token=$row1['token'];
	    		//echo "string".$token;
	         	$subject="Password Reset for Blooger Account";

	         	$body= "Hi, $username!,Seems like you forgot your password. To reset it please click on the link below http://localhost/web/reset_password.php?token=$token Thank you!";
	         	//echo "string".$body;
	         	$sender_email="From: kaustubhvd5@gmail.com";
	         	
	         	//echo "Username:".$username.'<br>';
	         	//echo "token:".$token.'<br>';
	         	//echo "subject:".$subject.'<br>';
	         	//echo "body:".$body.'<br>';
	         	//echo "sender_email:".$sender_email.'<br>';
	         	
	         	if(mail($email,$subject,$body,$sender_email)){
	         		$_SESSION['msg']="Check your mail to reset your account $email";
	         		// header("Location:login.php");
	         		 $msg="Check your mail to reset your account $email";
	         	}
	         	else{
	         		$msg1="Email Sending Failed...";
	         	}
	         }
         }
         else{
          $msg3="Email id is not found in Database";
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
                     <h2>Recover Account...</h2>
                      <h6>Please fill email id properly</h6>
                    <!-- Contact Form -->
                    <form action="" method="post"  name="message" data-focus="false" style="border:none !important;">
                         <input type="hidden" class="form-control-input" name="blogid" id="blogid"  >
                        <div class="form-group" >
                            <input type="email" class="form-control-input" name="email" id="email" style="margin: 3px 0 !important;" required>
                            <label class="label-control" for="cname">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <p id="demo" style="color: red"></p>
                       
                       
                        <div class="form-group">
                            <input type="submit" class="form-control-submit-button" value="Send Mail"name="submit">
                        </div>
                      
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                         
                         <div class="form-message">
                            <p>Don't have an account? <a href="registeruser.php">Sign in</a>.</p>
                        </div>
                        <div style="color: green;">  <?php echo $msg;?></div>
                        <div style="color: red;">  <?php echo $msg1;?></div>
                        <div style="color: red;">  <?php echo $msg3;?></div>
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

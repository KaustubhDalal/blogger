<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
          //function for firstname validation//

  function Firstname_val() {
    var x = document.getElementById("username").value;
   if(!/^[a-zA-Z]*$/g.test(document.message.username.value)){
 document.getElementById("demo").innerHTML = "Enter alphabates or characters only";

}
else{
 document.getElementById("demo").innerHTML = " ";
}
}

//function for password//
function mypass(){
var myPass = document.getElementById("password");
var letter = document.getElementById("letter");
var cnfpass = document.getElementById("psw_repeat");
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

       </script>

<?php

   error_reporting(0);
   ob_start();
   session_start();
   include("header2.php");
   include_once 'conn.php';


    if (isset($_POST['submit']))
    {    
    	
		    $usernm=$_POST['username'];
        $id=$_POST['blogid'];
		    $pass=$_POST['password'];

	  		 $sql = "SELECT * FROM membership_users WHERE (Username='$usernm' and Password='$pass') and Is_ApprovedBanned=0 ";
         $sql1 = "SELECT Is_ApprovedBanned FROM membership_users WHERE  Username='$usernm' and Password='$pass' ";

			// echo $sql;
	 	   	 $result=mysqli_query($conn, $sql);
         $result1=mysqli_query($conn, $sql1);
	   		 if (mysqli_num_rows($result)==1) 
         {
          if($usernm!='admin')
          {
  	   			header("Location:Home.php");
  	   			$_SESSION['login_user']=$usernm;
            $_SESSION['login_user_id']=$id;
  	   			echo $_SESSION['login_user'];
          }
          elseif($usernm=='admin'){
            header("Location:adminpanel/index2.php");
            $_SESSION['admin_user']=$usernm;
            echo $_SESSION['admin_user'];
          }
	  		 } 
	  		 elseif((mysqli_num_rows($result1)!=1) )
	  		 {
          $error="You Are Entering An invalid Credentials";
	   		 }
         else{
         $error="Sorry,You Are Blocked By The Admin";

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
                     <h2>Login Here...</h2>
                    <!-- Contact Form -->
                    <form action="" method="post"  name="message" data-focus="false" style="border:none !important;">
                         <input type="hidden" class="form-control-input" name="blogid" id="blogid"  >
                        <div class="form-group" >
                            <input type="text" class="form-control-input" name="username" id="username" oninput="Firstname_val()" style="margin: 3px 0 !important;" required>
                            <label class="label-control" for="cname">Username</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <p id="demo" style="color: red"></p>
                        <div class="form-group">
                            <input type="password" class="form-control-input" name="password" id="password" oninput="mypass()" style="margin: 3px 0 !important;" required>
                            <label class="label-control" for="cemail">Password</label>
                            <div class="help-block with-errors"></div>
                        </div>
                       <p id="letter" style="color: red"></p>
                       
                        <div class="form-group">
                            <input type="submit" class="form-control-submit-button" value="Login"name="submit">
                        </div>
                      <div style="color: red;">  <?php echo $error;?></div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                         <div class="form-message">
                           <!-- <p>Forgot Password? <a href="mailauth.php">Reset Password</a>.</p>-->
                             <p>Forgot Password? <a href="recover_mail.php">Reset Password</a>.</p>
                        </div>
                         <div class="form-message">
                            <p>Don't have an account? <a href="registeruser.php">Sign in</a>.</p>
                        </div>
                    </form>
                    <!-- end of contact form -->

               
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="background-color: #00bfd8 !important;border-radius: 1.5rem; ">Message Admin</button>-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Your ID:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Your Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
            </div> <!-- end of row -->
        

                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/img3.svg" alt="alternative">
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

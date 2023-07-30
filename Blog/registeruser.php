 <script type="text/javascript">
          //function for firstname validation//

  function Firstname_val() {
    var x = document.getElementById("username").value;
   if(!/^[a-zA-Z]*$/g.test(document.register_form.username.value)){
 document.getElementById("demo").innerHTML = "Enter alphabates or characters only";
 document.register_form.username.focus();
}
else{
 document.getElementById("demo").innerHTML = " ";
}
}

function mobile() {

  var y = document.getElementById('phone').value;
if (/^\d{11}$/.test(y)) {
    document.getElementById("m1").innerHTML = "Enter upto 10 numbers only";
} else {
  document.getElementById("m1").innerHTML = " ";
}
}


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



//function for password//
function mypass(){
var myPass = document.getElementById("psw");
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
//Function for confirm Password//
function mycpass(){
var myPass = document.getElementById("psw");
var cnfpass = document.getElementById("psw_repeat");
    if(myPass.value == cnfpass.value){
      document.getElementById("p1").innerHTML = " ";
    }
    else{
      document.getElementById("p1").innerHTML = "Password does not match";
    }


}
       </script>
<?php

include('header2.php');
//include('conn.php');

include_once 'conn.php';
error_reporting(E_ALL);
if(isset($_POST['Register']))
{  

$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['psw'];
$cpass=$_POST['psw_repeat'];
$add=$_POST['address'];
$city=$_POST['City'];
$mob=$_POST['phone'];

$token=bin2hex(random_bytes(15));
  
   $sql = "INSERT into `membership_users` (Username,Email,Password,CPassword,Address,City,Phone,token) 
VALUES ('$username','$email','$pass','$cpass','$add','$city','$mob','$token')";
 //header("location:login.php");
   if (mysqli_query($conn, $sql)) {
    
    echo "success";
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}



?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<style>
body {
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=number], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=number]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
textarea{
  background-color: #f1f1f1;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>-->
<style type="text/css">
  
  
</style>
</head>
<script>

function validate()
{
    //Validation for user name
  if(document.register_form.username.value=="" )
    {
        alert("UserName must be filled..");
        document.register_form.username.focus();
        return false; 
  }

  if(!/^[a-zA-Z]*$/g.test(document.register_form.username.value)){
    alert("Enter alphabates only for username");
        document.register_form.username.focus();
        return false;
  }
  if(document.register_form.email.value=="" )
    {
        alert("Email must be filled..");
        document.register_form.email.focus();
        return false; 
  }
  var reg=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if(reg.test(document.register_form.email.value)==false){
    alert("Enter Correct Email Id");
    document.register_form.email.focus();
        return false;
  }

   //Validation for address
  if(document.register_form.address.value=="" )
    {
        alert("Address must be filled..");
        document.register_form.address.focus();
        return false; 
  }


 /* if(!/^[a-zA-Z]*$/g.test(document.register_form.address.value)){
    alert("Enter alphabates only");
        document.register_form.address.focus();
        return false;
  }*/
   //Validation for city
  if(document.register_form.City.value=="" )
    {
        alert("City must be filled..");
        document.register_form.City.focus();
        return false; 
  }

  if(!/^[a-zA-Z]*$/g.test(document.register_form.city.value)){
    alert("Enter alphabates only for city");
        document.register_form.city.focus();
        return false;
  }


    //validation for mob no
    
      
    //validation for password
   var len = document.getElementById("psw").value.length;
    if(len < 8 || len >15)
    {
        alert("password must be greater than 8 characters and less than 15 characters");
        document.register_form.psw.focus();
        return false;
    }
    


    //to check wether password and confirm password are equal or not
    if(document.getElementById("psw").value!=document.getElementById("psw_repeat").value)
    {
        alert("confirmation password & password does not matches!");
        document.register_form.psw_repeat.focus();
        return false;
    }
}
</script> 
<body>



    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <form action="" method="post"  name="register_form" data-focus="false" onsubmit="return validate()" style="border:none !important;">
   <div class="col-lg-12 " style=" margin-top: 5%;">
                     <h1>Register Here...</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
                    <!-- Contact Form -->
                  
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="username" id="username" oninput="Firstname_val()" required>
                            <label class="label-control" for="cname">Username</label>
                            <div class="help-block with-errors"></div>
                        </div>
                       
                        <p id="demo" style="color: red"></p>
                      
                        <div class="form-group">
                            <input type="email" class="form-control-input" name="email" id="email"  oninput="mymail()" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                         
                         <p id="eml" style="color: red"></p>
                        <div class="form-group">
                            <input type="password" class="form-control-input" name="psw" id="psw" oninput="mypass()"  required>
                            <label class="label-control" for="cemail">Password</label>
                            <div class="help-block with-errors"></div>
                        </div>
                         <p id="letter" style="color: red"></p>
                        <div class="form-group">
                            <input type="password" class="form-control-input" name="psw_repeat"  oninput="mycpass()" id="psw_repeat"required>
                            <label class="label-control" for="cemail">Repeat Password</label>
                            <div class="help-block with-errors"></div>
                        </div>
                         <p id="p1" style="color: red"></p>
                        <div class="form-group">
                            <textarea class="form-control-textarea"  name="address" id="address" required></textarea>
                            <label class="label-control" for="cmessage">Your Address</label>
                            <div class="help-block with-errors"></div>
                        </div>
                         <p id="demo" style="color: red"></p>
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="City" id="City"required>
                            <label class="label-control" for="cemail">Enter City</label>
                            <div class="help-block with-errors"></div>
                        </div>
                         <p id="demo" style="color: red"></p>
                         <div class="form-group">
                            <input type="text" class="form-control-input"  name="phone" id="phone" oninput="mobile()" required>
                            <label class="label-control" for="cemail">Mobile No</label>
                            <div class="help-block with-errors"></div>
                        </div>
                         <p id="m1" style="color: red"></p>
                        <div class="form-group ">
                            <input type="hidden" id="cterms" value="Agreed-to-Terms"  ><div style="color: white !important;">bfndsfmsbfnmbfmsdbfnbmsdbfmbmnfsnmbnfmbfmnsddsdbdabd</div>
                        </div>
                        <div class="form-group">
                          
                            <input type="submit" class="form-control-submit-button " style="margin-top: -10%;" value="Register" name="Register" onclick="return validate()">
                        </div>
                        <div class="form-message">
                            <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                        </div>
                    </form>
                    <!-- end of contact form -->

                
            </div> <!-- end of row -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/img5.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
 
        
   
<!--
<form action="" method="post"  name="register_form" onsubmit="return validate()" style="margin-top: 3%; margin-bottom: 3%;" >
  <div class="col-4 container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" >

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required>

    <label for="psw-repeat"><b>Address</b></label>
    <br>
    <textarea placeholder="Enter Address" name="address" id="address" rows="4" cols="63" required></textarea>
    <label for="email"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="City" id="City" required>
    <label for="email"><b>Phone</b></label>
    <input type="number" placeholder="Enter Phone number" name="phone" id="phone" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <input type="submit" class="registerbtn" value="Register"name="Register" onclick="return validate()">
  </div>
  
  <div class="col-4 container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
-->
</body>

<?php 
include('footer.php');
?>
</html>

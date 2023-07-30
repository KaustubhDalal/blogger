<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">



</style>
</head>
<?php 
include('headersidebar_adminpanel.php');
?>

          <?php


//include('conn.php');

include_once '../conn.php';
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
  
   $sql = "INSERT into `membership_users` (Username,Email,Password,CPassword,Address,City,Phone) 
VALUES ('$username','$email','$pass','$cpass','$add','$city','$mob')";
 //header("location:login.php");
   if (mysqli_query($conn, $sql)) {?>
    
    <div class="alert alert-success">
      <p>User Added Successfully</p>      
    </div>
   <?php } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
?>
  <div class="alert alert-warning">
      <p>Spmething Went Wrong..</p>      
    </div>
<?php
   }
   mysqli_close($conn);
}



?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container1 {
  padding: 16px;
  background-color: white;
  max-width: 900px;
  margin-left: 100px
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
    var y = document.getElementById('phone').value;
    if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false; 
           }
           if (y.length<10)
           {
                alert("enter 10 characters");
                return false;
           }

      
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

<form action="" method="post"  name="register_form" onsubmit="return validate()" style="margin-top: 3%; margin-bottom: 3%;" >
  <div class="col-lg-4 container1">
    <br><br><h1>Add User</h1>
    
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
    <br>
    <label for="email"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="City" id="City" required>
    <label for="email"><b>Phone</b></label>
    <input type="number" placeholder="Enter Phone number" name="phone" id="phone" required>
    <hr>
    
    <input type="submit" class="registerbtn" value="Add User"name="Register" onclick="return validate()">
  </div>
  
  
</form>

</body>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

<head>
  <link href="profile.css" rel="stylesheet">
</head>
<?php
session_start();
$userdata=$_SESSION['admin_user'];
if($_SESSION['admin_user'])
{?>
<a href="index2.php"><img src="../images/home.png" height="40px" width="40px" style="margin-left: 5%;margin-top: 2%"></a>
<?php
}
else
{?>
<a href="../Home.php"><img src="../images/home.png" height="40px" width="40px" style="margin-left: 5%;margin-top: 2%"></a>
<?php
}?>


<?php
error_reporting(0);
include_once('../conn.php');


$admininfo=$_SESSION['admin_user'];
$userid=$_SESSION['UserId'];

if(isset($_POST['Update_user_info']))
{  
 
  $user_fname=$_POST['fullname'];
  $user_email=$_POST['eMail'];
  $user_phone=$_POST['phone'];
  $user_pass=$_POST['pass'];
  $user_cpass=$_POST['cpass'];
  $user_address=$_POST['address'];
  $user_city=$_POST['ciTy'];
  
  //$file1=addslashes(file_get_contents($_FILES["imagefile"]["tmp_name"]));

    
     $user_info_sql = "update membership_users set Username='$user_fname',Email='$user_email',Password='$user_pass', CPassword='$user_cpass',Address='$user_address',City='$user_city' ,Phone='$user_phone' where ID='$userid'";

     if (mysqli_query($conn, $user_info_sql)) 
     {
    
      echo "your Details updated successfully !";
     } else
      {
      echo "Error: " . $sql . "
  " . mysqli_error($conn);
    }
   //mysqli_close($conn);
}


?>

<style type="text/css">
  .card {
  transition: box-shadow .3s;

  
}
.card:hover {
  box-shadow: 0 0 11px rgba(33,33,33,.2); 

}
</style>
<?php 



 


  $sql1 = "SELECT * FROM membership_users where Username='$admininfo' ";

         $result1 = mysqli_query($conn, $sql1);

         if (mysqli_num_rows($result1) >0)
         {

            while($row1 = mysqli_fetch_assoc($result1)) 
            {?>

              <div class="container" style="margin-top: 3%;">
                <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="account-settings">
                      <div class="user-profile">
                        <div class="user-avatar">
                          <img src="https://bootdey.com/img/Content/avatar/avatar7.png" height="100px" width="100px" style="align-items: center;" alt="Maxwell Admin">
                        </div>
                        <h5 class="user-name"><?php echo $admininfo ?></h5>
                        <h6 class="user-email"><?php  echo $row1["Email"];?></h6>
                      </div>
                      <div class="about">
                        <h5>About</h5>
                        <p>As the administrator of your organization's , I am responsible for setting up and running a system .
                          <br><br>
                        <a class="btn-solid-lg page-scroll" href="../logout.php">Logout</a></p>
                      </div>

                    </div>
                  </div>
                </div>
                </div>
                
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                  <form action="updatedadminprofile.php" method="post"  name="update_profile_form" >
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row gutters">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Personal Details</h6>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="fullName">Username</label>
                          <input type="text" class="form-control" name="fullname"id="fullName" placeholder="Enter full name" value="<?php echo $admininfo ?>">
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="eMail">Email</label>
                          <input type="email" class="form-control" name="eMail" id="eMail" placeholder="Enter email ID" value="<?php  echo $row1["Email"];?>">
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number" value="<?php  echo $row1["Phone"];?>">
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="website">Password</label>
                          <input type="text" class="form-control" name="pass" id="pass" placeholder="Password" value="<?php  echo $row1["Password"];?>">
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="website">Confirm Password</label>
                          <input type="tezt" class="form-control" name="cpass" id="cpass" placeholder="Password" value="<?php  echo $row1["CPassword"];?>">
                        </div>
                      </div>
                    </div>
                    <div class="row gutters">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mt-3 mb-2 text-primary">Address</h6>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="Street">Street</label>
                          <input type="name" class="form-control" name="address" id="address" placeholder="Enter Street" value="<?php  echo $row1["Address"];?>">
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="ciTy">City</label>
                          <input type="name" class="form-control" name="ciTy" id="ciTy" placeholder="Enter City" value="<?php  echo $row1["City"];?>">
                        </div>
                      </div>
                     
                    </div>
                    <div class="row gutters">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                          
                          <input  type="submit" name="Update_user_info" value="Update" class="btn btn-primary">
                          <a href="index.php"><button  type="button" id="submit" name="submit" class="btn btn-primary">Cancel</button></a> 

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  </form>
                </div>
            
                </div>
                </div>
             
                   
               
            <?php
          }
         } else {
            echo "0 results";
         }
         //mysqli_close($conn);

?>

<?php ?>

<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
  <link href="../css/magnific-popup.css" rel="stylesheet">
  <link href="../css/styles.css" rel="stylesheet">
    <link href="../social.css" rel="stylesheet">
  
</head>
<div class="row gutters-sm">
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" style="margin-left: 13%;padding-right: 2%;margin-top: 3%">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">My Blogs  </i></h6>

<?php
function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}

?>
                      <?php  $sql2 = "select * from blog_records where userid='$userid'";

                           $result2=mysqli_query($conn, $sql2);
                          if (mysqli_num_rows($result2) > 0) {
                            while($row2 = mysqli_fetch_assoc($result2)) {?>

                 <div class="col-12 box-body p-0">
                    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                      
                        <div class="font-weight-bold mr-3">
                            <div class="text-truncate"><?php echo $row2["btitle"];?></div>
                            <div class="small"><?php custom_echo($row2["bcontent"],100);?></div>
                            <?php echo " <a href='single_blog.php?id=$row2[bid] '  >Read More</a>";?>
                        </div>
                        <span class="ml-auto mb-auto">
    
                           
                            <div class="text-right text-muted pt-1"><?php echo $row2["DateTime"];?></div>
                        </span>
                    </div>
                       <?php  
}

}else{
  echo "something went wrong";
}
?>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div><br><br><br><br><br><br><br><br><br>
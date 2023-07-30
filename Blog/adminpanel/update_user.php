<head>
  <link href="profile.css" rel="stylesheet">
</head>
<?php
error_reporting(0);

session_start();
   

include_once '../conn.php';
$userdata=$_SESSION['admin_user'];
if($_SESSION['login_user'])
{?>
<a href="../Home.php"><img src="../images/home.png" height="40px" width="40px" style="margin-left: 5%;margin-top: 2%"></a>
<?php
}
else
{?>
<a href="../index.php"><img src="../images/home.png" height="40px" width="40px" style="margin-left: 5%;margin-top: 2%"></a>
<?php
}?>

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

<?php 

$get_id=$_GET['id'];
//if(isset($_POST['approved']))
//{
 // $sql1 = "update `membership_users` set Is_ApprovedBanned=1 where ID='$get_id' ";
//}
//else{
 // $sql1 = "update `membership_users` set Is_ApprovedBanned=0 where ID='$get_id' ";
//}
   
 
  // if (mysqli_query($conn, $sql1)) {
    
  //  echo "";
   //} else {
   // echo "Error: " . $sql1 . "
//" . mysqli_error($conn);
 //  }
  


?>

<style>
.dropdown-list-image {
    position: relative;
    height: 2.5rem;
    width: 2.5rem;
}
.dropdown-list-image img {
    height: 2.5rem;
    width: 2.5rem;
}
.btn-light {
    color: #2cdd9b;
    background-color: #e5f7f0;
    border-color: #d8f7eb;
}
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
       
}
.main-body {
    padding: 15px;
}
.card:hover {
    box-shadow: 0 0 11px rgba(33,33,33,.2); 
}

.card {
  transition: box-shadow .6s;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
      border:1px solid rgba(0, 0, 0, 0.125)
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
</style>  


<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
  <link href="css/magnific-popup.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
    <link href="social.css" rel="stylesheet">
  
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>                 
<?php 



$get_id=$_GET['id'];
$get_username=$_GET['user'];
$get_email=$_GET['email'];
$user=$_SESSION['admin_user'];
	 
	  $sql1 = "SELECT * FROM membership_users where ID='$get_id' ";
         $result1 = mysqli_query($conn, $sql1);

         if (mysqli_num_rows($result1) >0)
         {

            while($row1 = mysqli_fetch_assoc($result1)) 
            {?>

			<div class="container">
			    <div class="main-body">
                    <div class="row gutters-sm">
			            <div class="col-md-4 mb-3">
			              <div class="card">
			                <div class="card-body">
			                  <div class="d-flex flex-column align-items-center text-center">
			                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
			                    <div class="mt-3">
			                      <h4><?php echo $row1["Username"];?></h4>
			                      <p class="text-secondary mb-1">Full Stack Developer</p>
			                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
			                      <!--<button class="btn btn-primary">Follow</button>
			                      <button class="btn btn-outline-primary">Message</button>-->
			                    </div>
			                  </div>
			                </div>
			              </div>
			              <div class="card mt-3">
			                <ul class="list-group list-group-flush">
			                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
			                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
			                    <a href="https://bootdey.com"><span class="text-secondary">Blogger.com</span></a>
			                  </li>
			                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
			                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
			                    <a href="https://bootdey.com"><span class="text-secondary">Github.com</span>
			                  </li>
			                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
			                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
			                    <a href="https://bootdey.com"><span class="text-secondary">Twitter.com</span></a>
			                  </li>
			                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
			                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
			                    <a href="https://bootdey.com"><span class="text-secondary">instagram.com</span></a>
			                  </li>
			                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
			                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
			                    <a href="https://bootdey.com"><span class="text-secondary">facebook.com</span></a>
			                  </li>
			                </ul>
			              </div>
			            </div>
			            <div class="col-md-8">
			              <div class="card mb-3">
			                <div class="card-body">
			                  <div class="row">
			                    <div class="col-sm-3">
			                      <h6 class="mb-0">Full Name</h6>
			                    </div>
			                    <div class="col-sm-9 text-secondary">
			                      <?php echo $row1["Username"];?>
			                    </div>
			                  </div>
			                  <hr>
			                  <div class="row">
			                    <div class="col-sm-3">
			                      <h6 class="mb-0">Email</h6>
			                    </div>
			                    <div class="col-sm-9 text-secondary">
			                      <?php echo $row1["Email"];?>
			                    </div>
			                  </div>
			                  <hr>
			                  <div class="row">
			                    <div class="col-sm-3">
			                      <h6 class="mb-0">Phone</h6>
			                    </div>
			                    <div class="col-sm-9 text-secondary">
			                      <?php echo $row1["Phone"];?>
			                    </div>
			                  </div>
			                  <hr>
			                  <div class="row">
			                    <div class="col-sm-3">
			                      <h6 class="mb-0">City</h6>
			                    </div>
			                    <div class="col-sm-9 text-secondary">
			                     <?php echo $row1["City"];?>
			                    </div>
			                  </div>
			                  <hr>
			                  <div class="row">
			                    <div class="col-sm-3">
			                      <h6 class="mb-0">Address</h6>
			                    </div>
			                    <div class="col-sm-9 text-secondary">
			                      <?php echo $row1["Address"];?>
			                    </div>
			                  </div>
			                </div>
			              </div>
			              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"> Manage  <?php echo $row1["Username"];?></i></h6>


                 <div class="col-12 box-body p-0">
                    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                        <div class="font-weight-bold mr-3">
                            <div class="text-truncate"></div>
                            <div class="small"></div>
                           
                        </div>
                        <span class="ml-auto mb-auto">




<?php 
if(isset($_POST['block']))
{  

$insert_approve=$_POST['approved'];

if($insert_approve==1)
  {
    $sql_app = "update `membership_users` set Is_ApprovedBanned=1 where ID='$get_id' ";
  }
  else{
    $sql_app = "update `membership_users` set Is_ApprovedBanned=0 where ID='$get_id' ";
  }
  if (mysqli_query($conn, $sql_app)) 
  {
   // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql_app . "
  " . mysqli_error($conn);
  }
}

$mysql_approve = "SELECT Is_ApprovedBanned,Username FROM membership_users where Is_ApprovedBanned='1' and ID=$get_id";
//$mysql_block = "SELECT Is_ApprovedBanned FROM membership_users where Is_ApprovedBanned='0' and ID=$get_id";

$myresult_approve = mysqli_query($conn, $mysql_approve);
 if (mysqli_num_rows($myresult_approve) > 0) 
    {
      while($myrow_approve = mysqli_fetch_assoc($myresult_approve)) 
      {
        $mycheck_approve=$myrow_approve['Is_ApprovedBanned'];
        $mycheck_name=$myrow_approve['Username'];
       
      }
    }

  
?>
<form method="post" action="#">

 <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="approved" name="approved" value="1" 
  <?php
   if($mycheck_approve==1)
    {
     echo "checked";
   }else if($mycheck_approve==0){
    echo "unchecked";
   }?>
   >
   <label><?php
   if($mycheck_approve==1)
    {
     echo "Blocked";
   }else if($mycheck_approve==0){
     echo "Unlocked";
   }?></label>
 <input type="submit" class="btn btn-primary " style="float:right; margin-left: 30px; margin-top: -5px; " name="block" value="Save">           

</div>


 
</form>
            <style>
            	tr{
            		line-height: 45px;
   min-height: 45px;
   height: 45px;
            	}
            	td{
            		line-height: 65px;
   min-height: 65px;
   height: 65px;
            	}
            </style>               
                            <div class="text-right text-muted pt-1"></div>
                        </span>
                    </div>
			            </div>

                      </div>
			        </div>
			        
			    </div>

            </div>
	   </div>
			  <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Set Access Permissions for  <?php echo $row1["Username"];?></i></h6>

                   
                 <div class="col-12 box-body p-0">
                    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                        
                       
    
                           <table class="table table-bordered">
  <thead>
    <tr>
      <th class="col-2">Choice</th>
      <th class="col-2">Insert</th>
      <th class="col-2">View</th>
      <th class="col-2">Edit</th>
      <th class="col-2">Delete</th>
    </tr>
  </thead>
  <tbody>
<?php

    $mysql1 = "SELECT allow_insert FROM member_permissions where options='Blogs' and mem_id=$get_id";
    $mysql2 = "SELECT allow_view FROM member_permissions where options='Blogs' and mem_id=$get_id";
    $mysql3 = "SELECT allow_edit FROM member_permissions where options='Blogs' and mem_id=$get_id";
    $mysql4 = "SELECT allow_delete FROM member_permissions where options='Blogs' and mem_id=$get_id";

    $mysql5 = "SELECT allow_insert FROM member_permissions where options='Categories' and mem_id=$get_id";
    $mysql6 = "SELECT allow_view FROM member_permissions where options='Categories' and mem_id=$get_id";
    $mysql7 = "SELECT allow_edit FROM member_permissions where options='Categories' and mem_id=$get_id";
    $mysql8 = "SELECT allow_delete FROM member_permissions where options='Categories' and mem_id=$get_id";

    $mysql9 = "SELECT allow_insert FROM member_permissions where options='manage users' and mem_id=$get_id";
    $mysql10 = "SELECT allow_view FROM member_permissions where options='manage users' and mem_id=$get_id";
    $mysql11 = "SELECT allow_edit FROM member_permissions where options='manage users' and mem_id=$get_id";
    $mysql12 = "SELECT allow_delete FROM member_permissions where options='manage users' and mem_id=$get_id";

    $mysql13 = "SELECT allow_insert FROM member_permissions where options='manage contacts' and mem_id=$get_id";
    $mysql14 = "SELECT allow_view FROM member_permissions where options='manage contacts' and mem_id=$get_id";
    $mysql15 = "SELECT allow_edit FROM member_permissions where options='manage contacts' and mem_id=$get_id";
    $mysql16 = "SELECT allow_delete FROM member_permissions where options='manage contacts' and mem_id=$get_id";

    $myresult1 = mysqli_query($conn, $mysql1);
    $myresult2 = mysqli_query($conn, $mysql2);
    $myresult3 = mysqli_query($conn, $mysql3);
    $myresult4 = mysqli_query($conn, $mysql4);

    $myresult5 = mysqli_query($conn, $mysql5);
    $myresult6 = mysqli_query($conn, $mysql6);
    $myresult7 = mysqli_query($conn, $mysql7);
    $myresult8 = mysqli_query($conn, $mysql8);

    $myresult9  = mysqli_query($conn, $mysql9);
    $myresult10 = mysqli_query($conn, $mysql10);
    $myresult11 = mysqli_query($conn, $mysql11);
    $myresult12 = mysqli_query($conn, $mysql12);

    $myresult13 = mysqli_query($conn, $mysql13);
    $myresult14 = mysqli_query($conn, $mysql14);
    $myresult15 = mysqli_query($conn, $mysql15);
    $myresult16 = mysqli_query($conn, $mysql16);


    //blogs conditions  
    if (mysqli_num_rows($myresult1) > 0) 
    {
      while($myrow1 = mysqli_fetch_assoc($myresult1)) 
      {
        $mycheck1=$myrow1['allow_insert'];
       
      }
    }
    if (mysqli_num_rows($myresult2) > 0) 
    {
      while($myrow2 = mysqli_fetch_assoc($myresult2) ) 
      {
        
        $mycheck2=$myrow2['allow_view'];
      }
    }
    if (mysqli_num_rows($myresult3) > 0) 
    {
      while($myrow3 = mysqli_fetch_assoc($myresult3) ) 
      {
        
        $mycheck3=$myrow3['allow_edit'];
      }
    }
    if (mysqli_num_rows($myresult4) > 0) 
    {
      while($myrow4 = mysqli_fetch_assoc($myresult4) ) 
      {
        
        $mycheck4=$myrow4['allow_delete'];
      }
    }

    //categories conditions  
    if (mysqli_num_rows($myresult5) > 0) 
    {
      while($myrow5 = mysqli_fetch_assoc($myresult5)) 
      {
        $mycheck5=$myrow5['allow_insert'];
       
      }
    }
    if (mysqli_num_rows($myresult6) > 0) 
    {
      while($myrow6 = mysqli_fetch_assoc($myresult6) ) 
      {
        
        $mycheck6=$myrow6['allow_view'];
      }
    }
    if (mysqli_num_rows($myresult7) > 0) 
    {
      while($myrow7 = mysqli_fetch_assoc($myresult7) ) 
      {
        
        $mycheck7=$myrow7['allow_edit'];
      }
    }
    if (mysqli_num_rows($myresult8) > 0) 
    {
      while($myrow8 = mysqli_fetch_assoc($myresult8) ) 
      {
        
        $mycheck8=$myrow8['allow_delete'];
      }
    } 

    //manage users conditions  
    if (mysqli_num_rows($myresult9) > 0) 
    {
      while($myrow9 = mysqli_fetch_assoc($myresult9)) 
      {
        $mycheck9=$myrow9['allow_insert'];
       
      }
    }
    if (mysqli_num_rows($myresult10) > 0) 
    {
      while($myrow10 = mysqli_fetch_assoc($myresult10) ) 
      {
        
        $mycheck10=$myrow10['allow_view'];
      }
    }
    if (mysqli_num_rows($myresult11) > 0) 
    {
      while($myrow11 = mysqli_fetch_assoc($myresult11) ) 
      {
        
        $mycheck11=$myrow11['allow_edit'];
      }
    }
    if (mysqli_num_rows($myresult12) > 0) 
    {
      while($myrow12 = mysqli_fetch_assoc($myresult12) ) 
      {
        
        $mycheck12=$myrow12['allow_delete'];
      }
    }

    //manage contacts conditions  
    if (mysqli_num_rows($myresult13) > 0) 
    {
      while($myrow13 = mysqli_fetch_assoc($myresult13)) 
      {
        $mycheck13=$myrow13['allow_insert'];
       
      }
    }
    if (mysqli_num_rows($myresult14) > 0) 
    {
      while($myrow14 = mysqli_fetch_assoc($myresult14) ) 
      {
        
        $mycheck14=$myrow14['allow_view'];
      }
    }
    if (mysqli_num_rows($myresult15) > 0) 
    {
      while($myrow15 = mysqli_fetch_assoc($myresult15) ) 
      {
        
        $mycheck15=$myrow15['allow_edit'];
      }
    }
    if (mysqli_num_rows($myresult16) > 0) 
    {
      while($myrow16 = mysqli_fetch_assoc($myresult16) ) 
      {
        
        $mycheck16=$myrow16['allow_delete'];
      }
    }  
?>

<form  action="" method="post" name="access_Permissions">
    <input type="hidden" name="access_user_id" value="<?php echo $get_id ?>">
    <tr>
      <th scope="row">Blogs</th>
    <td> <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="blogs_insert" name="blogs_insert" value="1" 
  <?php

   if($mycheck1==1)
    {
     echo "checked";
   }else if($mycheck1==0){
    echo "unchecked";
   }
     ?> >
  

</div></td>
    <td>  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="blogs_view" name="blogs_view" value="1" 
  <?php
   if($mycheck2==1)
    {
     echo "checked";
   }else if($mycheck2==0){
    echo "unchecked";
   }?>
   >
 
</div></td>
   <td>  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="blogs_edit" name="blogs_edit" value="1"
 <?php
   if($mycheck3==1)
    {
     echo "checked";
   }else if($mycheck3==0){
    echo "unchecked";
   }?>
  >
  
</div></td>
    <td>   <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="blogs_delete" name="blogs_delete" value="1" 
  <?php
   if($mycheck4==1)
    {
     echo "checked";
   }else if($mycheck4==0){
    echo "unchecked";
   }?> 
   >
  
</div></td>
    </tr>
    <tr>
      <th scope="row">Blog Categories</th>
      <td> <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="cat_insert" name="cat_insert" value="1"
<?php
   if($mycheck5==1)
    {
     echo "checked";
   }else if($mycheck5==0){
    echo "unchecked";
   }?>
   >

</div></td>
    <td>  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="cat_view" name="cat_view" value="1" 
<?php
   if($mycheck6==1)
    {
     echo "checked";
   }else if($mycheck6==0){
    echo "unchecked";
   }?>
   >
 
</div></td>
   <td>  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="cat_edit" name="cat_edit" value="1" 
<?php
   if($mycheck7==1)
    {
     echo "checked";
   }else if($mycheck7==0){
    echo "unchecked";
   }?>
   >
  
</div></td>
    <td>   <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="cat_delete" name="cat_delete" value="1"
<?php
   if($mycheck8==1)
    {
     echo "checked";
   }else if($mycheck8==0){
    echo "unchecked";
   }?>
   >
  
</div></td>
    </tr>
    <tr>
      <th scope="row">Manage Users</th>
      <td> <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="user_insert" name="user_insert" value="1" 
<?php
   if($mycheck9==1)
    {
     echo "checked";
   }else if($mycheck9==0){
    echo "unchecked";
   }?>
   >

</div></td>
    <td>  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="user_view" name="user_view" value="1" 
<?php
   if($mycheck10==1)
    {
     echo "checked";
   }else if($mycheck10==0){
    echo "unchecked";
   }?>
   >
 
</div></td>
   <td>  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="user_edit" name="user_edit" value="1" 
<?php
   if($mycheck11==1)
    {
     echo "checked";
   }else if($mycheck11==0){
    echo "unchecked";
   }?>
   >
  
</div></td>
    <td>   <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="user_delete" name="user_delete" value="1"
<?php
   if($mycheck12==1)
    {
     echo "checked";
   }else if($mycheck12==0){
    echo "unchecked";
   }?>
  >
  
</div></td>
    </tr>
     <tr>
      <th scope="row">Manage Editor's Choice</th>
       <td> <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="contact_insert" name="contact_insert" value="1" 
<?php
   if($mycheck13==1)
    {
     echo "checked";
   }else if($mycheck13==0){
    echo "unchecked";
   }?>
   >

</div></td>
    <td>  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="contact_view" name="contact_view" value="1" 
<?php
   if($mycheck14==1)
    {
     echo "checked";
   }else if($mycheck14==0){
    echo "unchecked";
   }?>
   >
 
</div></td>
   <td>  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="contact_edit" name="contact_edit" value="1" 
<?php
   if($mycheck15==1)
    {
     echo "checked";
   }else if($mycheck15==0){
    echo "unchecked";
   }?>
   >
  
</div></td>
    <td>   <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="contact_delete" name="contact_delete" value="1" 
<?php
   if($mycheck16==1)
    {
     echo "checked";
   }else if($mycheck16==0){
    echo "unchecked";
   }?>
   >
  
</div></td>
    </tr>
  </tbody>
</table>

                        
                    </div>       
 <a href="manageusers.php"><button type="button" class="btn btn-warning" style="float: right;margin-left: 12px;">Cancel</button></a>
    
<input type="submit" name="submit_permission" class="btn btn-primary" style="float:right;margin-left: 12px; " value="Save Changes" >
<input type="submit" name="update_permission" class="btn btn-primary" id="reload" style="float:right; margin-left: 12px;" value="Update">

</form>
	<?php }


	}
    else{
 			 echo "something went wrong";
}
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
        if( window.localStorage )
  {
    if( !localStorage.getItem( 'firstLoad' ) )
    {
      localStorage[ 'firstLoad' ] = true;
      window.location.reload();
    }  

    else
      localStorage.removeItem( 'firstLoad' );
  }
        });
</script>

<?php 
//session_start();
   //include("../header.php");
   include_once '../conn.php';



//$userinfo=$_SESSION['login_user'];
//$userid=$_SESSION['UserId'];

error_reporting(0);

if(isset($_POST['submit_permission']))
{  
$access_user_id=$_POST['access_user_id'];
$options1="Blogs";
$insert1=$_POST['blogs_insert'];
$view1=$_POST['blogs_view'];
$edit1=$_POST['blogs_edit'];
$delete1=$_POST['blogs_delete'];


$access_user_id=$_POST['access_user_id'];
$options2="Categories";
$insert2=$_POST['cat_insert'];
$view2=$_POST['cat_view'];
$edit2=$_POST['cat_edit'];
$delete2=$_POST['cat_delete'];

$access_user_id=$_POST['access_user_id'];
$options3="manage users";
$insert3=$_POST['user_insert'];
$view3=$_POST['user_view'];
$edit3=$_POST['user_edit'];
$delete3=$_POST['user_delete'];

$access_user_id=$_POST['access_user_id'];
$options4="manage contacts";
$insert4=$_POST['contact_insert'];
$view4=$_POST['contact_view'];
$edit4=$_POST['contact_edit'];
$delete4=$_POST['contact_delete'];

  
   $savesql = "INSERT into `member_permissions` (mem_id,options,allow_insert,allow_view,allow_edit,allow_delete) 
VALUES ($access_user_id,'$options1',$insert1,$view1,$edit1,$delete1),
       ($access_user_id,'$options2',$insert2,$view2,$edit2,$delete2),
       ($access_user_id,'$options3',$insert3,$view3,$edit3,$delete3),
       ($access_user_id,'$options4',$insert4,$view4,$edit4,$delete4)";
 
   if (mysqli_query($conn, $savesql)) {
   
    echo "Permissions set successfully !";
   } else {
    echo "Error: " . $savesql . "
"; //. mysqli_error($conn);
   }
  // mysqli_close($conn);
}



?>
<?php 
if(isset($_POST['update_permission']))
{  
  $access_user_id=$_POST['access_user_id'];
  $options1="Blogs";
  $insert1=$_POST['blogs_insert'];
  $view1=$_POST['blogs_view'];
  $edit1=$_POST['blogs_edit'];
  $delete1=$_POST['blogs_delete'];


  $access_user_id=$_POST['access_user_id'];
  $options2="Categories";
  $insert2=$_POST['cat_insert'];
  $view2=$_POST['cat_view'];
  $edit2=$_POST['cat_edit'];
  $delete2=$_POST['cat_delete'];

  $access_user_id=$_POST['access_user_id'];
  $options3="manage users";
  $insert3=$_POST['user_insert'];
  $view3=$_POST['user_view'];
  $edit3=$_POST['user_edit'];
  $delete3=$_POST['user_delete'];

  $access_user_id=$_POST['access_user_id'];
  $options4="manage contacts";
  $insert4=$_POST['contact_insert'];
  $view4=$_POST['contact_view'];
  $edit4=$_POST['contact_edit'];
  $delete4=$_POST['contact_delete'];



  if($insert1==1)
  {
    $sql3 = "update `member_permissions` set allow_insert=1 where mem_id='$get_id' and options='$options1' ";
  }
  else{
    $sql3 = "update `member_permissions` set allow_insert=0 where mem_id='$get_id' and options='$options1' ";
  }
  if (mysqli_query($conn, $sql3)) 
  {
    // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql3 . "
  " . mysqli_error($conn);
  }
  // mysqli_close($conn);



  if($view1==1)
  {
    $sql2 = "update `member_permissions` set allow_view=1 where mem_id='$get_id' and options='$options1' ";
  }
  else{
    $sql2 = "update `member_permissions` set allow_view=0 where mem_id='$get_id' and options='$options1' ";
  }
  if (mysqli_query($conn, $sql2)) 
  {
   // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql2 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);

  if($edit1==1)
  {
    $sql4 = "update `member_permissions` set allow_edit=1 where mem_id='$get_id' and options='$options1' ";
  }
  else{
    $sql4 = "update `member_permissions` set allow_edit=0 where mem_id='$get_id' and options='$options1' ";
  }
  if (mysqli_query($conn, $sql4)) 
  {
   // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql4 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);

  if($delete1==1)
  {
    $sql5 = "update `member_permissions` set allow_delete=1 where mem_id='$get_id' and options='$options1' ";
  }
  else{
    $sql5 = "update `member_permissions` set allow_delete=0 where mem_id='$get_id' and options='$options1' ";
  }
  if (mysqli_query($conn, $sql5)) 
  {
   // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql5 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);


  if($insert2==1)
  {
    $sql6 = "update `member_permissions` set allow_insert=1 where mem_id='$get_id' and options='$options2' ";
  }
  else{
    $sql6 = "update `member_permissions` set allow_insert=0 where mem_id='$get_id' and options='$options2' ";
  }
  if (mysqli_query($conn, $sql6)) 
  {
    // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql6 . "
  " . mysqli_error($conn);
  }
  // mysqli_close($conn);

  if($view2==1)
  {
    $sql7 = "update `member_permissions` set allow_view=1 where mem_id='$get_id' and options='$options2' ";
  }
  else{
    $sql7 = "update `member_permissions` set allow_view=0 where mem_id='$get_id' and options='$options2' ";
  }
  if (mysqli_query($conn, $sql7)) 
  {
   // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql7 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);

  if($edit2==1)
  {
    $sql8 = "update `member_permissions` set allow_edit=1 where mem_id='$get_id' and options='$options2' ";
  }
  else{
    $sql8 = "update `member_permissions` set allow_edit=0 where mem_id='$get_id' and options='$options2' ";
  }
  if (mysqli_query($conn, $sql8)) 
  {
   // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql8 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);

  if($delete2==1)
  {
    $sql9 = "update `member_permissions` set allow_delete=1 where mem_id='$get_id' and options='$options2' ";
  }
  else{
    $sql9 = "update `member_permissions` set allow_delete=0 where mem_id='$get_id' and options='$options2' ";
  }
  if (mysqli_query($conn, $sql9)) 
  {
    //echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql9 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);

  if($insert3==1)
  {
    $sql10 = "update `member_permissions` set allow_insert=1 where mem_id='$get_id' and options='$options3' ";
  }
  else{
    $sql10 = "update `member_permissions` set allow_insert=0 where mem_id='$get_id' and options='$options3' ";
  }
  if (mysqli_query($conn, $sql10)) 
  {
     //echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql10 . "
  " . mysqli_error($conn);
  }
  // mysqli_close($conn);

  if($view3==1)
  {
    $sql11 = "update `member_permissions` set allow_view=1 where mem_id='$get_id' and options='$options3' ";
  }
  else{
    $sql11 = "update `member_permissions` set allow_view=0 where mem_id='$get_id' and options='$options3' ";
  }
  if (mysqli_query($conn, $sql11)) 
  {
    //echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql11 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);

  if($edit3==1)
  {
    $sql12 = "update `member_permissions` set allow_edit=1 where mem_id='$get_id' and options='$options3' ";
  }
  else{
    $sql12 = "update `member_permissions` set allow_edit=0 where mem_id='$get_id' and options='$options3' ";
  }
  if (mysqli_query($conn, $sql12)) 
  {
   // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sq12 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);

  if($delete3==1)
  {
    $sql13 = "update `member_permissions` set allow_delete=1 where mem_id='$get_id' and options='$options3' ";
  }
  else{
    $sql13 = "update `member_permissions` set allow_delete=0 where mem_id='$get_id' and options='$options3' ";
  }
  if (mysqli_query($conn, $sql13)) 
  {
    //echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql3 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);  

  if($insert4==1)
  {
    $sql14 = "update `member_permissions` set allow_insert=1 where mem_id='$get_id' and options='$options4' ";
  }
  else{
    $sql14 = "update `member_permissions` set allow_insert=0 where mem_id='$get_id' and options='$options4' ";
  }
  if (mysqli_query($conn, $sql14)) 
  {
     //echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql14 . "
  " . mysqli_error($conn);
  }
  // mysqli_close($conn);

  if($view4==1)
  {
    $sql15 = "update `member_permissions` set allow_view=1 where mem_id='$get_id' and options='$options4' ";
  }
  else{
    $sql15 = "update `member_permissions` set allow_view=0 where mem_id='$get_id' and options='$options4' ";
  }
  if (mysqli_query($conn, $sql15)) 
  {
   // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql15 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);

  if($edit4==1)
  {
    $sql16 = "update `member_permissions` set allow_edit=1 where mem_id='$get_id' and options='$options4' ";
  }
  else{
    $sql16 = "update `member_permissions` set allow_edit=0 where mem_id='$get_id' and options='$options4' ";
  }
  if (mysqli_query($conn, $sql16)) 
  {
   // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sq16 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);

  if($delete4==1)
  {
    $sql17 = "update `member_permissions` set allow_delete=1 where mem_id='$get_id' and options='$options4' ";
  }
  else{
    $sql17 = "update `member_permissions` set allow_delete=0 where mem_id='$get_id' and options='$options4' ";
  }
  if (mysqli_query($conn, $sql17)) 
  {
   // echo "Permissions set successfully !";
  } 
  else 
  {
      echo "Error: " . $sql7 . "
  " . mysqli_error($conn);
  }
    // mysqli_close($conn);

}

?>

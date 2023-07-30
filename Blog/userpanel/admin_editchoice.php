<?php
echo "Editors choice";
?><!DOCTYPE html>
<html lang="en">
<?php
error_reporting(E_ALL);
include_once('../conn.php');

session_start();
error_reporting(0);
$userid=$_SESSION['UserId'] ;

if(isset($_POST['editor_blog']))
{  

$edit=$_POST['editor'];
 $sql = "update `blog_records` set is_editor_choice=1 where btitle='$edit' ";

  echo $sql;
  
  // $sql = "INSERT into `editors_choice` (Editor_blog) 
//VALUES ('$edit')";

 
   if (mysqli_query($conn, $sql)) {
    header("location:admin_editchoice.php");
    echo "blog record created successfully !";
   } else {
    echo "Error: " . $sql;
   }
 
}

 ?>
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
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<?php 
include('headersidebar_adminpanel.php');
?>

 <?php 

  $mysql1 = "SELECT allow_insert FROM member_permissions where options='manage contacts' and mem_id=$userid";
  $mysql2 = "SELECT allow_view FROM member_permissions where options='manage contacts' and mem_id=$userid";
  $mysql3 = "SELECT allow_edit FROM member_permissions where options='manage contacts' and mem_id=$userid";
  $mysql4 = "SELECT allow_delete FROM member_permissions where options='manage contacts' and mem_id=$userid";

  $myresult1 = mysqli_query($conn, $mysql1);
  $myresult2 = mysqli_query($conn, $mysql2);
  $myresult3 = mysqli_query($conn, $mysql3);
  $myresult4 = mysqli_query($conn, $mysql4);

 if (mysqli_num_rows($myresult1) > 0) 
    {
      while($myrow1 = mysqli_fetch_assoc($myresult1)) 
      {
        $mycheck1=$myrow1['allow_insert'];
        if($mycheck1==1){
           $display="d-block";
        }
        elseif($mycheck1==0) {
           $display="d-none";
        }
        
    }
  }


  if (mysqli_num_rows($myresult2) > 0) 
    {
      while($myrow2 = mysqli_fetch_assoc($myresult2)) 
      {
        $mycheck2=$myrow2['allow_view'];
        if($mycheck2==1){
           $display2="d-block";
        }
        elseif($mycheck2==0) {
           $display2="d-none";
        }
        
    }
  }

   if (mysqli_num_rows($myresult3) > 0) 
    {
      while($myrow3 = mysqli_fetch_assoc($myresult3)) 
      {
        $mycheck3=$myrow3['allow_edit'];
        if($mycheck3==1){
           $display3="d-block";
        }
        elseif($mycheck3==0) {
           $display3="d-none";
        }
        
    }
  }

   if (mysqli_num_rows($myresult4) > 0) 
    {
      while($myrow4 = mysqli_fetch_assoc($myresult4)) 
      {
        $mycheck4=$myrow4['allow_delete'];
        if($mycheck4==1){
           $display4="d-block";
        }
        elseif($mycheck4==0) {
           $display4="d-none";
        }
        
    }
  }
?>

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="index2.php">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>

                                    <a href="/web/adminpanel/admincreateblog.php"><button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>Add New Blog</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

      
<div class="">
<br><br>
<form action="" method="post"  name="blog_form"  >
<?php   
    include_once '../conn.php';
     $sql3 = 'SELECT * FROM blog_records where is_editor_choice=0';
    
     
         $result3 = mysqli_query($conn, $sql3);
        
        
               ?>

               <select class="form-select col-3 <?php echo $display;?>" aria-label="Default select example" name="editor" id="editor">

                <option selected>Open this select blog</option>
       
               
                 <?php if ((mysqli_num_rows($result3) > 0) ) {
            while(($row3 = mysqli_fetch_assoc($result3)) ) {?>
                 <option ><?php echo $row3["btitle"];?></option> </a>
          
                <?php
            }
            ?>
</select>
      
            <?php
         } else {
            //echo "0 results";
         }
        ?>
        <span class="input-group-btn <?php echo $display;?>">
          <input type="submit" class="btn btn-primary btn-lg" name="editor_blog" value="Add">
      </span>
    </form>
   </div>
   <br><br>
 <?php

if(isset($_POST['submitdeletebtn'])){
    $key=$_POST['keyToDelete'];

    $check=mysqli_query($conn,"select * from blog_records where bid='$key'") or die("not found".mysqli_error());
    if(mysqli_num_rows($check)>0){
        $querydelete=mysqli_query($conn,"update blog_records set is_editor_choice=0 where bid='$key'")or die("not deleted".mysqli_error());
        ?>
        <div class="alert alert-success">
            <p>Blog Removed from Editor's Choice!</p>          
        </div>
        <?php
    }else
    {?>
        <div class="alert alert-warning">
            <p>Record Doesn't Exist</p>         
        </div>
    <?php 
    }
}

 ?>

 <table class="table <?php echo $display2;?>">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Id</th>
      
      <th scope="col">Editor's choice blogs</th>
      
       <th scope="col" class="<?php echo $display4;?>">Remove from editor choice</th>
       <th></th>
        <th scope="col" class="<?php echo $display3;?>">Update</th>
    </tr>
  </thead>
  <tbody>
<?php 

 
  $sql1 = 'SELECT * FROM blog_records where is_editor_choice=1';
         $result1 = mysqli_query($conn, $sql1);

         if (mysqli_num_rows($result1) > 0) {
            while($row1 = mysqli_fetch_assoc($result1)) {?>
    <tr>
      <form action="" method="post" name="editdelete">
        <td>
            <input type="checkbox" name="keyToDelete" value="<?php echo $row1["bid"];?>">
        </td>
      <th scope="row"><?php echo $row1["bid"];?></th>
      <td><?php echo $row1["btitle"];?></td>
      
       <td class="<?php echo $display4;?>">
            <input type="submit" value="Remove"name="submitdeletebtn" class="btn btn-info">
        </td>
        <td></td>
        <td class="<?php echo $display3;?>">
            <input type="submit" value="Update"name="submitupdatebtn" class="btn btn-success">
        </td>
       <!--<?php echo "<td> <a href='update_editchoice.php?ed=$row1[ID] & eb=$row1[btitle]'>Update</a>";?>-->
     
    </tr>
     <?php
            }
         } else {
           // echo "0 results";
         }
       

?>
 
</form>
 

      

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

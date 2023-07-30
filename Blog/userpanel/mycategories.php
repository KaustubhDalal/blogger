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
session_start();
error_reporting(E_ALL);
$userinfo=$_SESSION['login_user'];
$userid=$_SESSION['UserId'];
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
                                    <a href="newcategory.php"><button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>Add New Category</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

        <div>
<?php
 include_once '../conn.php'; 
if(isset($_POST['submitdeletebtn'])){
    $key=$_POST['keyToDelete'];

    $check=mysqli_query($conn,"select * from blog_categories where cid='$key'") or die("not found".mysqli_error());
    if(mysqli_num_rows($check)>0){
        $querydelete=mysqli_query($conn,"delete from blog_categories where cid='$key'")or die("not deleted".mysqli_error());
        ?>
        <div class="alert alert-success">
            <p>Category Deleted!</p>          
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

<br>
<hr>
<br>

<h3>Categories Created by you</h3>`
<table class="table table-bordered">
  <thead>
    <tr>
         <th scope="col"></th>
      <th scope="col">Id</th>
      <th scope="col">category</th>
     
      <th scope="col">Delete Category</th>
    
    </tr>
  </thead>
  <tbody>
<?php 

  
  $sqlcat1 = "SELECT * FROM `blog_categories` WHERE uid=$userid";
         $resultcat1 = mysqli_query($conn, $sqlcat1);

echo "string".$sqlcat1.' <br> ';
echo "resultcat1".$resultcat1.' <br> ';
         if (mysqli_num_rows($resultcat1) > 0) {
            while($rowcat1 = mysqli_fetch_assoc($resultcat1)) {
                echo "rowcat1".$rowcat1.' <br> ';
                echo "string";
                ?>

    <tr>
      
       
      
    </tr>
     <?php
            }
         } else {
            echo "0 results";
         }
        

?>
  </tbody>
</table>
</table>

        </div>

    </div>

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

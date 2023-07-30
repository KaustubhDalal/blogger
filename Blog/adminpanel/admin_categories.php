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
 <table class="table table-bordered">
  <thead>
    <tr>
         <th scope="col"></th>
      <th scope="col">Id</th>
      <th scope="col">category</th>
     
      <th scope="col">Delete Category</th>
      <!--<th scope="col">Update Category</th>-->
    </tr>
  </thead>
  <tbody>
<?php 

  
  $sqlcat = 'SELECT * FROM blog_categories';
         $resultcat = mysqli_query($conn, $sqlcat);

         if (mysqli_num_rows($resultcat) > 0) {
            while($rowcat = mysqli_fetch_assoc($resultcat)) {?>
    <tr>
        <form action="" method="post" name="userdelete">
            <td>
            <input type="checkbox" name="keyToDelete" value="<?php echo $rowcat["cid"];?>">
        </td>
      <th scope="row"><?php echo $rowcat["cid"];?></th>
      <td><?php echo $rowcat["CName"];?></td>
       
        <td>
            <input type="submit" value="Delete"name="submitdeletebtn" class="btn btn-info">
        </td>
       <!--  <td>
            <input type="submit" value="Update"name="submitdeletebtn" class="btn btn-info">
        </td>-->
       
       <!-- <td>
           <a href="admin_editcat.php?id=<?php echo $rowcat["cid"]; ?>">Update</a>
        </td>-->
    </tr>
     <?php
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);

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

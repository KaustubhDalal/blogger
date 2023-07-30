<?php
?>
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
error_reporting(0);
include('headersidebar_adminpanel.php');
session_start();
error_reporting(0);
$userid=$_SESSION['UserId'] ;
?>

<?php 

  $mysql1 = "SELECT allow_insert FROM member_permissions where options='manage users' and mem_id=$userid";
  $mysql2 = "SELECT allow_view FROM member_permissions where options='manage users' and mem_id=$userid";
  $mysql3 = "SELECT allow_edit FROM member_permissions where options='manage users' and mem_id=$userid";
  $mysql4 = "SELECT allow_delete FROM member_permissions where options='manage users' and mem_id=$userid";

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
                                    <div class="<?php echo $display;?>">
                                    <a href="adduser.php"><button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>Add New User</button></a>
                                      </div>
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

	$check=mysqli_query($conn,"select * from membership_users where ID='$key'") or die("not found".mysqli_error());
	if(mysqli_num_rows($check)>0){
		$querydelete=mysqli_query($conn,"delete from membership_users where ID='$key'")or die("not deleted".mysqli_error());
		?>
		<div class="alert alert-success">
			<p>Record Deleted!</p>			
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
  <thead class="thead-light">
    <tr>
      <th scope="col"></th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Mobile no</th>
      <th scope="col" class="<?php echo $display4;?>">Delete Record</th>
      <th></th>
      <th scope="col" class="<?php echo $display3;?>">Update Record</th>
    </tr>
  </thead>
  <tbody>
<?php 

  include_once '../conn.php';
  $sql = "SELECT * FROM membership_users where (ID NOT LIKE '$userid%' and ID NOT LIKE '60%') AND Username<>'admin'" ;
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>
    <tr>
    	<form action="" method="post" name="userdelete">
        <td>
         <input type="checkbox" name="keyToDelete" value="<?php echo $row["ID"];?>">
        </td>
        <th scope="row"><?php echo $row["ID"];?></th>
        <td><?php echo $row["Username"];?></td>
        <td><?php echo $row["Email"];?></td>
        <td><?php echo $row["Address"];?></td>
        <td><?php echo $row["City"];?></td>
        <td><?php echo $row["Phone"];?></td>
		
    		<td class="<?php echo $display4;?>">
    			<input type="submit" value="Delete" name="submitdeletebtn" class="btn btn-info">
    		</td>
      </form>
        <td></td>
        <td class="<?php echo $display3;?>">
           <?php echo "<td> <a class='btn btn-info' href='../adminpanel/update_user.php?id=$row[ID]  & user=$row[Username] & email=$row[Email] '>Update</a>";?> 
        </td>


    </tr>
     <?php
            }
         } else {
            //echo "0 results";
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

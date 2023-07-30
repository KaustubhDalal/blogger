<?php
 ob_start();
session_start();
error_reporting(0);
$userdata=$_SESSION['login_user'];
if($_SESSION['login_user'])
{?>
<a href="Home.php"><img src="./images/home.png" height="40px" width="40px" style="margin-left: 5%;margin-top: 2%"></a>
<?php
}
else
{?>
<a href="index.php"><img src="./images/home.png" height="40px" width="40px" style="margin-left: 5%;margin-top: 2%"></a>
<?php
}?>
<head>
	    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    


     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
  <h3 style="margin-left: 5%;margin-top: 3%; font-weight: 700;">Explore Categories:</h3>
<style>
 .box {
  transition: box-shadow .3s;
 
  
}
.box:hover {
  box-shadow: 11px 11px 11px rgba(33,33,33,.2); 
}


.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.card:hover .image {
  opacity: 0.9;
}

.card:hover .middle {
  opacity: 1;
}

.text {

  color: white;
  font-size: 20px;
  font-weight: 700;
  padding: 16px 32px;
}
/* Centered text */
.centered {
text-align: center;
    font-size: 15px;
    display: block;
    height: 40px;
    line-height: 40px;
    color: #fff;
    background: rgba(0,0,0,.7);
    position: absolute;
    bottom: 0;
    width: 100%;
}
.card{
    max-width: 300px;
   
}
img{
     max-height: 300px;
     max-width: 300px;
}
.imageclass{
      width: 87%;
    height: 16.5vw;
    object-fit: cover;
}


</style>
<body style="background-image: url('./images/back6.jpg');background-size: 1580px 1024px;">


  <div class="py-5">
    <div class="container" style="margin-top: -3%;">
    	  <div class="row hidden-md-up">
	 <?php   
        include_once 'conn.php';
     $sql3 = 'SELECT * FROM blog_categories ORDER BY CName';
    
     //$sql_cat_count = 'SELECT count(*) as total1 from blog_categories ';
         $result3 = mysqli_query($conn, $sql3);
         //$result_cat_count = mysqli_query($conn, $sql_cat_count);
         //$dat=mysqli_fetch_assoc($result_cat_count);
         if (mysqli_num_rows($result3) > 0) {
            while($row3 = mysqli_fetch_assoc($result3) ) {?>
               
               
                 <div class="col-md-3" style="padding-top: 30px;">
			          <div class="card" >
                  
			            <div class="card-block " style="object-fit: contain; width:300px;">
                  <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row3["cat_image"] ).'"  style="    width: 87%;
    height: 13vw;
    object-fit: cover;" />';?>
			             <!-- <img class="img-fluid box" src="images/categorybackimage.jpg" width="300px" width="300px" alt="alternative">-->
                      </div>


			           <!--   <div class="middle">
			    				<div class="text" style="color: white !important;"> <?php //echo " <a href='category_blog.php?CName=$row3[CName] '  style='color:white;'>"?> <?php //echo $row3["CName"];?></div>
			  			  </div>
			            </div>-->
			             <div class="centered" style="color: white !important;"> <?php echo " <a href='category_blog.php?CName=$row3[CName] '  style='color:white;'>"?> <?php echo $row3["CName"];?></div>
			          </div>
			        </div> 




                
                

                <?php
            }
         } else {#B31217;
            echo "0 results";
         }
        

?>

        
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>

</body>

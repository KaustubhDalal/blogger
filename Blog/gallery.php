<?php 

include_once('conn.php');


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
<body style="background-image: url('./images/back6.jpg');background-size: 1580px 1024px;">
<style type="text/css">
  .gal {
  
  
  -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
    
  
  } 
  .gal img{ width: 100%; padding: 7px 0;}
@media (max-width: 500px) {
    
    .gal {
  
  
  -webkit-column-count: 1; /* Chrome, Safari, Opera */
    -moz-column-count: 1; /* Firefox */
    column-count: 1;
    
  
  }
    
  }

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
text-align: left;
    font-size: 15px;
    display: block;
    height: 40px;
    line-height: 40px;
    color: #fff;
    background: rgba(0,0,0,.7);
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top: -48px;
}
.card{
    max-width: 300px;
   
}
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<h1 class="my-4 font-weight-bold" style="margin-left: 5%;margin-top: 3%; font-weight: 700;">Bloggers Gallery</h1>
<div class="container" style="padding-bottom: 100px;">



<div class="col-md-12">
<div class="row">
<hr>

  <div class="gal">
  
     
<?php 

  
  $sql1 = 'SELECT * FROM blog_records where bstatus="Publish"';
         $result1 = mysqli_query($conn, $sql1);

         if (mysqli_num_rows($result1) > 0) {
            while($row1 = mysqli_fetch_assoc($result1)) {?>
               
       
       <div>
                       <?php echo '<img src="blog_images/'.$row1['bimage'].'" />';?>

                          <div class="centered" style="color: white !important;"> <?php echo " <a href='single_blog.php?id=$row1[bid] '  style='color:white; font-weight:15;font-size:14px;'>"?> &nbsp;<?php $date=$row1["DateTime"];
 echo date('F d, Y',strtotime($date));?></div> 
                          </div>
                       

                <?php
            }
         } else {
            echo "0 results";
         }
         //mysqli_close($conn);
?>
  
   
  
      
      
    
  </div>
  
</div>
</div>
</div>
</body>

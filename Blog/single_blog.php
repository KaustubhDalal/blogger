
<?php
error_reporting(0);

  include_once 'conn.php';
session_start();
$userdata=$_SESSION['login_user'];
$get_id=$_GET['id'];
$user_id= $_SESSION['UserId'];



if($_SESSION['login_user'])
{?>
<a href="Home.php"><img src="./images/home.png" height="40px" width="40px" style="margin-left: 5%;margin-top: 2%"></a>
<?php
}
else
{?>
<a href="index.php"><img src="./images/home.png" height="40px" width="40px" style="margin-left: 5%;margin-top: 2%"></a>
<?php
}

  $usersql = "SELECT * FROM membership_users where Username='$userdata'";
         $userresult = mysqli_query($conn, $usersql);

         if (mysqli_num_rows($userresult) > 0) {
            while($userrow = mysqli_fetch_assoc($userresult)) {?>
    <tr style="visibility: hidden;">
       <td ><?php  $userrow["ID"];
       $userid=$userrow["ID"];
       ?></td>
    <?php $_SESSION['UserId'] = $userid;?>
    </tr>
     <?php
            }
         } else {
            echo "";
         }
         //mysqli_close($conn);

?>

<?php

session_start();

if(isset($_SESSION['views']))
  $_SESSION['views'] = $_SESSION['views']+1;
else
  $_SESSION['views']=1;

$view_count=$_SESSION['views'];
  
 $sql1 = "update `blog_records` set views=$view_count where bid='$get_id' ";
 
   if (mysqli_query($conn, $sql1)) {
    
    echo "";
   } else {
    echo "Error: " . $sql1;
   }
  

?>

<?php
error_reporting();
include_once('conn.php');
if (isset($_POST['add']))
{
    $blog_id = $_POST["blog_id"];
    $cur_user_id=$_POST["cur_user_id"];
    $rating = $_POST["rating"];
    

    $sql = "INSERT INTO ratings (blog_id,rate,cur_user_id) VALUES ('$blog_id','$rating','$cur_user_id')";
    if (mysqli_query($conn, $sql))
    {
       header("location:Home.php");
        echo "New Rate addedddd successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

</head>

<style type="text/css">
  #hat {
  width: 70px;
  height: 70px;
  position: absolute;
  left: 640px;
  top: 0px;
  z-index: 100;
}
  .box {
  transition: box-shadow .3s;
 
  
}
.box:hover {
  box-shadow: 0 0 11px rgba(33,33,33,.2); 
}
.commet_box{
  margin-left: 400px;
}
</style>
<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <style >
        img{
            object-fit: cover;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Bloggers</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link href="social.css" rel="stylesheet">
	

<?php 
error_reporting(0);
session_start();



/*$get_title=$_GET['title'];
$get_content1=$_GET['content'];
$get_tag1=$_GET['tag1'];
$get_cat1=$_GET['cat1'];*/
//$get_img1=$_GET['img1'];


//include('header.php');

include_once 'conn.php';


 
	
	//$stat=$_GET['bstatus'];
	//$file1=addslashes(file_get_contents($_FILES["imagefile"]["tmp_name"]));
	
	  
	   $sql = "select * from blog_records where bid='$get_id'";

	   $result=mysqli_query($conn, $sql);
	    if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>



<body>

  <div class="container">

    <div class="row">
      <div class="col-lg-4" style="margin-left: : 10%">
<div class="image-container">
                            <img class="img-fluid" src="images/img4.svg" alt="alternative">
                        </div>
                        </div>
      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $row["btitle"];?></h1>
         <?php
                        if($row['is_editor_choice']==1)
                        {?>
                             <img id="hat" src="images/editlogo.jpg" alt="editor">
                        <?php }?>
        <!-- Author -->
        <p class="lead" style="color: #17a2b8;">
          by
           
         &nbsp; <?php echo " <a href='user_account.php?uid=$row[userid] '  >"?><?php echo $row["user"];?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p style="font-size: 15px; font-weight: 700;">Posted On: <?php echo date('F d, Y',strtotime($row["DateTime"]))."&nbsp &nbsp Category:".$row["bcategory"]."&nbsp &nbsp  Tag:".$row["btag"]."&nbsp &nbsp  Views:".$row["views"];?></p>


        <hr> 

        <!-- Preview Image -->
       <?php echo '<img src="blog_images/'.$row['bimage'].'" height="300" width="730" style="width: inherit;
    object-fit: fill;" />';?>

        <hr>

        

       

        <p style="text-align: justify;
  text-justify: inter-word; font-size: 15px !important; line-height: normal; line-height: 40px;"><?php echo $row["bcontent"];?></p>

        <hr>

	 <?php  
}
}


/*echo $get_title.'<br><br>';
echo $get_content1.'<br><br>';
echo $get_cat1.'<br><br>';
echo $get_tag1.'<br><br>';*/
//echo '<img src="data:image/jpeg;base64,'.base64_encode($get_img1).'" height="300" width="300" />';

?>
<?php
error_reporting(E_ALL);
$ratesql=  mysqli_query($conn,"SELECT avg(rate) as myrate FROM ratings where blog_id='$get_id'");


$raterow = mysqli_fetch_assoc($ratesql);
$aa=round($raterow['myrate'], 2);
//echo "rate" .$aa?>
<!--<div class="rateyo" id= "rating"
data-rateyo-rating="<?php //echo $aa;?>"
          >
         </div>-->
                 
<?php ?>

<script type="text/javascript">
  function validate()
{
  alert("Enter alphabates only for username");
}
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>
<p class="d-none">.</p>
<?php
?>
<?php
error_reporting(0);
if($_SESSION['login_user']|| $_SESSION['admin_user'])
{
?>


 <h5>Rate This blog</h5>
<div class="container">
    <div class="row">

<form action="" method="post"  >
    <div>
        <input type="hidden" name="blog_id" value="<?php echo $get_id;?>">
    </div>
     <div>
        <input type="hidden" name="cur_user_id" value="<?php echo $userid;?>">
    </div>

         <div class="rateyo" id= "rating"
         data-rateyo-rating="<?php echo $aa;?>"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>

    <span class='result'>0</span>
    <input type="hidden" name="rating">

    </div>
    <div><input type="submit" name="add"> </div>
</form>
</div>
</div>

        <!-- Comments Form -->
        <div class="card my-4 commet_box">
          <h5 class="card-header">Leave a Comment <?php echo $_SESSION['login_user']; ?>:</h5>
          <div class="card-body">
            <form action="" method="post"  name="comment" id="comment_form" data-focus="false" style="border:none !important;width: 699 !important;">
              <div class="form-group">
              
                  <input type="hidden" name="bloguserid" id="bloguserid" value="<?php echo $userid; ?>" class="form-control"  />
                
              </div>
              <div class="form-group">
              
                  <input type="hidden" name="blogid" id="blogid" value="<?php echo $get_id;?>" class="form-control"  />
                
              </div>
              <div class="form-group">
              
                  <input type="hidden" name="comment_name" id="comment_name" value="<?php echo $_SESSION['login_user']; ?>" class="form-control"  />
                
              </div>
               <div class="form-group">
              
                 <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Write Comment" rows="3"></textarea>
                
              </div>
              <div class="form-group">
              <input type="hidden" name="comment_id" id="comment_id" value="0" />
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Add Comment"/>
                
              </div>
            </form>
            <span id="comment_message"></span>
          <br/>
           <span id="display_comment"></span>
          </div>
        </div>

<!--<?php 
if(1)
{  
$blogid=$_POST['blogid'];
$bloguserid=$_POST['bloguserid'];


  
   $blogid_and_userid_sql = "INSERT into `comments` (blogid,bloguserid) 
VALUES ($blogid,$bloguserid)";
 //header("location:login.php");
   if (mysqli_query($conn, $blogid_and_userid_sql)) {
    //header("location:Home.php");
    echo "ID's inserted successfully !";
   } else {
    echo "Error: " . $blogid_and_userid_sql . "
" . mysqli_error($conn);
   }
  // mysqli_close($conn);
}
?>-->
<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
        <br><br><br><br><br><br><br><br><br><br><br><br>
<?php }?>

     

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4 d-none" >

        <!-- Search Widget -->
        <form action="search.php" method="get">
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control"  name="search"  id="search" placeholder="Search for...">
              <span class="input-group-append">
                <input type="submit" value="Go" />
              </span>
            </div>
          </div>
        </div>
        </form>
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
              	<a href=""> <ul class="list-group ">

     <?php   
      
     $sql3 = 'SELECT * FROM blog_categories';
    
     $sql_cat_count = 'SELECT count(*) as total1 from blog_categories ';
         $result3 = mysqli_query($conn, $sql3);
         $result_cat_count = mysqli_query($conn, $sql_cat_count);
         $dat=mysqli_fetch_assoc($result_cat_count);
         if ((mysqli_num_rows($result3) > 0) && (mysqli_num_rows($result_cat_count) > 0)) {
            while(($row3 = mysqli_fetch_assoc($result3)) && ($row_cat_count = $dat)) {?>
               
               
                 
                  <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $row3["CName"];?>
                  	<span class="badge badge-primary badge-pill"><!--<?php echo $dat['total1']; ?>--></span>
                  </li>
                  
                       
                

                <?php
            }
         } else {
            echo "0 results";
         }
        

?>


                
             
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container
  </footer>-->
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>



   
<!DOCTYPE html>
<html lang="en">



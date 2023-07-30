<style type="text/css">
  .box {
  transition: box-shadow .3s;
 
  
}
.box:hover {
  box-shadow: 0 0 11px rgba(33,33,33,.2); 
}
#hat {
  width: 90px;
  height: 90px;
  position: absolute;
  left: 580px;
  top: 0px;
  z-index: 100;
}
@import url('https://fonts.googleapis.com/css?family=Roboto:300i,400');



a{
  text-decoration: none;
}

body {
    background-color: #36BEA6;
}

.share__icon {
    width: 30px;
    height: 30px;
    fill: #E00000 ;
    display: inline-block;
    vertical-align: top;
    margin-right: 3px;
    margin-top: -13px;
}
.share__icon:last-of-type{
   margin-right: 5px;
   margin-left: 5px;
}

.share-button {
  cursor: pointer;
    display: inline-block;
    height:42px;
    position: absolute;
    top: 90%;
    transform: translateY(-50%) translateX(-50%);
    -webkit-transform: translateY(-50%) translateX(-50%);
   -moz-transform: translateY(-50%) translateX(-50%);
    left: 560px;
  -webkit-perspective: 200px;
  -moz-perspective: 200px;
  perspective: 200px;
  
}

.share-button__back {
    background-color: #ffffff;
   /* padding: 5px;*/
   height: inherit;
    border-radius: 20px;
  overflow: hidden;
  box-shadow: 0px 0px 14px rgba(0,0,0,0.1) inset;
}

.share-button__front {
    width: 100%;
    height: 100%;
    background-color: #fff;
    border-radius: 20px;
    position: absolute;
    top: 0;
    left: 0;
    transform-origin: center top;
    -webkit-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -moz-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -ms-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -o-transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
}



.share-button__text {
    margin: 0;
    line-height: 42px;
    font-size: 16px;
    text-align: center;
    color: #b6b6b6;
}

.share__link {
    position: relative;
    top: 40px;
    display: inline-block;
    opacity: 0;
  -webkit-transition: top .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -moz-transition: top .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -ms-transition: top .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -o-transition: top .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition: top .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);

  }

.share-button:hover .share-button__front {
    transform: rotateX(90deg);
}

.share-button:hover .share__link {
    top:0;
  opacity: 1;
}

.share-button:hover .share__link:nth-of-type(1){
  transition-delay:0.1s;
}

.share-button:hover .share__link:nth-of-type(2){
  transition-delay:0.2s;
}

.share-button:hover .share__link:nth-of-type(3){
  transition-delay:0.3s;
}

.share-button:hover .share__link:nth-of-type(4){
  transition-delay:0.4s;
}

.cathov:hover{
color: red;
}


</style>


<?php
 include_once './conn.php';
 error_reporting(0);
 $find_counts="select *from user_counter";

 $countsql = 'SELECT * FROM user_counter';
 $countresult = mysqli_query($conn, $countsql);

if (mysqli_num_rows($countresult) > 0) 
{
    while($countrow = mysqli_fetch_assoc($countresult)) 
    {
    
  $current_count=$countrow['counts'];
  $new_count=$current_count+1;
  //echo $new_count;
  
  }
}
$countsql1 = "update user_counter set counts=$new_count";
       //echo $sql;
  $countresult1=mysqli_query($conn, $countsql1);
  if (mysqli_num_rows($countresult1)>0) 
         {
          //header("Location:Login.php");
          echo $new_count;
         } 
      $_SESSION['visitor']=$new_count;   
//mysqli_close($conn);
?>
<?php
error_reporting(0);
  include_once 'conn.php';
session_start();
$userdata=$_SESSION['login_user'];
$userid=$_SESSION['UserId'];
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
           // echo "0 results";
         }
         //mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    


     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    
<?php 

include('header.php');?>
    

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                         
                        <h1><span class="turquoise"><?php echo "Welcome ".$_SESSION['login_user']; ?></span> </h1>
                           
                            <p class="p-large">Express your thoughts.... </p>
                            <a class="btn-solid-lg page-scroll" href="logout.php">Logout</a>
                            <?php if($userdata)
                            {?>
                              <a class="btn-solid-lg page-scroll" href="userprofile.php">Profile</a>
                            <?php
                            }
                            else
                            {?>
                              <a class="btn-solid-lg page-scroll" href="adminpanel/adminprofile.php">Profile</a>
                            <?php
                            }?>
                            
                            <a class="btn-solid-lg page-scroll" href="userpanel/index2.php">Dashboard</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/details-1-office-worker.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!--  <h3 style="position: absolute;left:73%;top:125%;">Social Links
      <div id="buttons">
  <div class="facebook button">
    <i class="icon">
      <i class="fa fa-facebook"></i>
  </i>
  <div class="slide">
    <p>
      Facebook
    </p>
  </div>
  <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fenablingwp%2F&width=62&layout=button&action=like&size=large&show_faces=false&share=false&height=65&appId" width="62" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
  </div>
  
  
  <div class="google button">
    <i class="icon">
      <i class="fa fa-google-plus"></i>
  </i>
  <div class="slide">
    <p>
      Google+
    </p>
  </div>
  <!-- Place this tag where you want the +1 button to render. -
  <div class="g-follow" data-annotation="bubble" data-href="https://plus.google.com/+Enablingwp/" data-rel="publisher"></div>
  
  <!-- Place this tag after the last +1 button tag. -
  <script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
  </div>
  <div class="youtube button">
    <i class="icon">
      <i class="fa fa-youtube"></i>
  </i>
  <div class="slide">
    <p>
      YouTube
    </p>
  </div>
  <div class="g-ytsubscribe" data-channel="techpingo" data-layout="default" data-count="default" data-onytevent="onYtEvent"></div>
    <script src="https://apis.google.com/js/platform.js"></script>

<script>
  function onYtEvent(payload) {
    if (payload.eventType == 'subscribe') {
      // Add code to handle subscribe event.
    } else if (payload.eventType == 'unsubscribe') {
      // Add code to handle unsubscribe event.
    }
    if (window.console) { // for debugging only
      window.console.log('YT event: ', payload);
    }
  }
</script>

</div>
<div class="twitter button">
    <i class="icon">
      <i class="fa fa-twitter"></i>
  </i>
  <div class="slide">
    <p>
      Twitter
    </p>
  </div>
  <a href="https://twitter.com/iamrahuldc" class="twitter-follow-button" data-show-count="false" data-via="mariuCSS">
    Tweet
  </a>
  <script>
    !function(d,s,id){
      var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
      if(!d.getElementById(id)){
        js=d.createElement(s);
        js.id=id;
        js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
  </script>
  </div>
  
  <center></h3>

  -->
    <h5 style="position: absolute;left:74%;top:110%;">categories<br>

     <?php   
        include_once 'conn.php';
     $sql3 = 'SELECT * FROM blog_categories ORDER BY CName limit 0,10';
    
     $sql_cat_count = 'SELECT count(*) as total1 from blog_categories ';
         $result3 = mysqli_query($conn, $sql3);
         $result_cat_count = mysqli_query($conn, $sql_cat_count);
         $dat=mysqli_fetch_assoc($result_cat_count);
         if ((mysqli_num_rows($result3) > 0) && (mysqli_num_rows($result_cat_count) > 0)) {
            while(($row3 = mysqli_fetch_assoc($result3)) && ($row_cat_count = $dat)) {?>
               
               
                  <div class="btn-solid-lg page-scroll" style="  text-align: center; font-size: 16px !important;width: 265px; margin-bottom: 5px;">
                        <span class="inbox-num"><!--<?php echo $dat['total1']; ?>--></span>
                       <div class="cathov">   <?php echo " <a href='category_blog.php?CName=$row3[CName] ' style='color:white;'>"?> <?php echo $row3["CName"];?> </a></div>
                   </div>
               
                

                <?php
            }
         } else {#B31217;
           // echo "0 results";
         }
        

?>
<br><br>
<b>Popular Posts</b>

<?php   
        include_once 'conn.php'; 
     $sql4 = "SELECT * FROM blog_records where views>=10 ";
         $result4 = mysqli_query($conn, $sql4);

         if (mysqli_num_rows($result4) > 0) {
            while($row4 = mysqli_fetch_assoc($result4)) {?>
               
               <div class="card" style="max-width: 300px !important;">
  <div class="card-body">
   <?php echo $row4["btitle"];?> <br>
   <?php echo " <a href='single_blog.php?id=$row4[bid] '  >Read More</a>";?>
  </div>
</div>
                  
                
               
                

                <?php
            }
         } else {#B31217;
            //echo "0 results";
         }
        

?>

               
    </h3>

<form action="search.php" method="get">
    <div class="col-lg-3" style="margin-left: 1100px;">
    <div class="input-group">
    <input type="text" class="form-control" name="search"  id="search" placeholder="Search this blog">
    <div class="input-group-append">
     <input type="submit" value="search" />
        
      </button>
    </div>
  </div>
  </div>
</form>

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

  
  $sql1 = 'SELECT * FROM blog_records where bstatus="Publish" ORDER BY bid DESC limit 5';
         $result1 = mysqli_query($conn, $sql1);

         if (mysqli_num_rows($result1) > 0) {
            while($row1 = mysqli_fetch_assoc($result1)) {?>
               
                <div class="card col-8 mb-3  box ml-5 " style="margin-top: -40px;">
                   <!-- <a href="single.php?post=<?php echo $row1["bid"];?>" class="abc">-->
                    <?php $blogs_id=$row1["bid"];?>
                  <div class="row no-gutters">
                    <div class="col-lg-4">
                        <td >
                            <?php echo '<img src="blog_images/'.$row1['bimage'].'" height="300" width="300" />';?>
                            </td>
                    
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h3 class="card-title"><?php echo $row1["btitle"];?></h3>
                       <p class="card-text"><small class="text-muted" style="text-align: left !important;">
                       
                        <?php
                        if($row1['is_editor_choice']==1)
                        {?>
                             <img id="hat" src="images/editlogo2.png" alt="editor">
                        <?php }?>
                       
                          
                        <?php custom_echo($row1["bcontent"], 400); ?>
                        
                        <div class="card-text" style="font-size: 16px; font-weight: 800;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
  <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
  <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z"/>
</svg>&nbsp;&nbsp;<?php echo "#".$row1["btag"];?></div>
                        <div class="card-text" style="font-size: 13px; font-weight: 600;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg>  <b>  &nbsp;

<?php 
 $date=$row1["DateTime"];
 echo date('F d, Y',strtotime($date)); ?>

  <!--<?php echo $row1["DateTime"];?>--></b></div>
                     <b><div class="card-text" style="color:red !important;font-size: 13px; font-weight: 600;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg></a>&nbsp; <?php echo " <a href='user_account.php?uid=$row1[userid] '  >"?><?php echo $row1["user"];?></a></div></b>



<b><div class="card-text" style="font-size: 13px; font-weight: 600;">
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
  <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
</svg>&nbsp;<?php echo " <a href='category_blog.php?CName=$row1[bcategory] '  >"?> <?php echo $row1["bcategory"];?></a></div></b>
                        




                         <div  class="btn btn-link">
                         <?php echo " <a href='single_blog.php?id=$row1[bid] '  >Read More</a>";?>

 <?php
                              error_reporting(E_ALL);
                              $ratesql=  mysqli_query($conn,"SELECT avg(rate) as myrate FROM ratings where blog_id='$blogs_id'");


                              $raterow = mysqli_fetch_assoc($ratesql);
                              $aa=round($raterow['myrate'], 2);
                              echo " <p  style='position:absolute;color:orange;left:83% !important;top:70%;font-weight:700; '>  ratings : " .$aa.' / 5'?>
                              <div class="rateyo" id= "rating"
                              data-rateyo-rating="<?php echo $aa .'/ 5';?>"
                                        >
                                       </div>
                                               
                        <?php ?>
                        

                         <div class="share-button">
  <div class="share-button__back">
    <a class="share__link" href="www.twitter.com" title="twitter">
    <svg class="share__icon share__icon--twitter" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="49.652px" height="49.652px" viewBox="0 0 49.652 49.652" style="enable-background:new 0 0 49.652 49.652;" xml:space="preserve">
<g>
  <g>
    <path d="M24.826,0C11.137,0,0,11.137,0,24.826c0,13.688,11.137,24.826,24.826,24.826c13.688,0,24.826-11.138,24.826-24.826    C49.652,11.137,38.516,0,24.826,0z M35.901,19.144c0.011,0.246,0.017,0.494,0.017,0.742c0,7.551-5.746,16.255-16.259,16.255    c-3.227,0-6.231-0.943-8.759-2.565c0.447,0.053,0.902,0.08,1.363,0.08c2.678,0,5.141-0.914,7.097-2.446    c-2.5-0.046-4.611-1.698-5.338-3.969c0.348,0.066,0.707,0.103,1.074,0.103c0.521,0,1.027-0.068,1.506-0.199    c-2.614-0.524-4.583-2.833-4.583-5.603c0-0.024,0-0.049,0.001-0.072c0.77,0.427,1.651,0.685,2.587,0.714    c-1.532-1.023-2.541-2.773-2.541-4.755c0-1.048,0.281-2.03,0.773-2.874c2.817,3.458,7.029,5.732,11.777,5.972    c-0.098-0.419-0.147-0.854-0.147-1.303c0-3.155,2.558-5.714,5.713-5.714c1.644,0,3.127,0.694,4.171,1.804    c1.303-0.256,2.523-0.73,3.63-1.387c-0.43,1.335-1.333,2.454-2.516,3.162c1.157-0.138,2.261-0.444,3.282-0.899    C37.987,17.334,37.018,18.341,35.901,19.144z"></path>
  </g>
</g>
</svg>
</a>
<a class="share__link " href="www.facebook.com" title="facebook">
 <svg class="share__icon share__icon--facebook" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="49.652px" height="49.652px" viewBox="0 0 49.652 49.652" style="enable-background:new 0 0 49.652 49.652;" xml:space="preserve">
<g>
  <g>
    <path d="M24.826,0C11.137,0,0,11.137,0,24.826c0,13.688,11.137,24.826,24.826,24.826c13.688,0,24.826-11.138,24.826-24.826    C49.652,11.137,38.516,0,24.826,0z M31,25.7h-4.039c0,6.453,0,14.396,0,14.396h-5.985c0,0,0-7.866,0-14.396h-2.845v-5.088h2.845    v-3.291c0-2.357,1.12-6.04,6.04-6.04l4.435,0.017v4.939c0,0-2.695,0-3.219,0c-0.524,0-1.269,0.262-1.269,1.386v2.99h4.56L31,25.7z    "></path>
  </g>
</g>
</svg>
</a>
<a class="share__link" href="www.googleplus.com" title="google plus">
<svg class="share__icon share__icon--google" version="1.1"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="49.652px" height="49.652px" viewBox="0 0 49.652 49.652" style="enable-background:new 0 0 49.652 49.652;" xml:space="preserve">
<g>
  <g>
    <g>
      <path d="M21.5,28.94c-0.161-0.107-0.326-0.223-0.499-0.34c-0.503-0.154-1.037-0.234-1.584-0.241h-0.066     c-2.514,0-4.718,1.521-4.718,3.257c0,1.89,1.889,3.367,4.299,3.367c3.179,0,4.79-1.098,4.79-3.258     c0-0.204-0.024-0.416-0.075-0.629C23.432,30.258,22.663,29.735,21.5,28.94z"></path>
      <path d="M19.719,22.352c0.002,0,0.002,0,0.002,0c0.601,0,1.108-0.237,1.501-0.687c0.616-0.702,0.889-1.854,0.727-3.077     c-0.285-2.186-1.848-4.006-3.479-4.053l-0.065-0.002c-0.577,0-1.092,0.238-1.483,0.686c-0.607,0.693-0.864,1.791-0.705,3.012     c0.286,2.184,1.882,4.071,3.479,4.121H19.719L19.719,22.352z"></path>
      <path d="M24.826,0C11.137,0,0,11.137,0,24.826c0,13.688,11.137,24.826,24.826,24.826c13.688,0,24.826-11.138,24.826-24.826     C49.652,11.137,38.516,0,24.826,0z M21.964,36.915c-0.938,0.271-1.953,0.408-3.018,0.408c-1.186,0-2.326-0.136-3.389-0.405     c-2.057-0.519-3.577-1.503-4.287-2.771c-0.306-0.548-0.461-1.132-0.461-1.737c0-0.623,0.149-1.255,0.443-1.881     c1.127-2.402,4.098-4.018,7.389-4.018c0.033,0,0.064,0,0.094,0c-0.267-0.471-0.396-0.959-0.396-1.472     c0-0.255,0.034-0.515,0.102-0.78c-3.452-0.078-6.035-2.606-6.035-5.939c0-2.353,1.881-4.646,4.571-5.572     c0.805-0.278,1.626-0.42,2.433-0.42h7.382c0.251,0,0.474,0.163,0.552,0.402c0.078,0.238-0.008,0.5-0.211,0.647l-1.651,1.195     c-0.099,0.07-0.218,0.108-0.341,0.108H24.55c0.763,0.915,1.21,2.22,1.21,3.685c0,1.617-0.818,3.146-2.307,4.311     c-1.15,0.896-1.195,1.143-1.195,1.654c0.014,0.281,0.815,1.198,1.699,1.823c2.059,1.456,2.825,2.885,2.825,5.269     C26.781,33.913,24.89,36.065,21.964,36.915z M38.635,24.253c0,0.32-0.261,0.58-0.58,0.58H33.86v4.197     c0,0.32-0.261,0.58-0.578,0.58h-1.195c-0.322,0-0.582-0.26-0.582-0.58v-4.197h-4.192c-0.32,0-0.58-0.258-0.58-0.58V23.06     c0-0.32,0.26-0.582,0.58-0.582h4.192v-4.193c0-0.321,0.26-0.58,0.582-0.58h1.195c0.317,0,0.578,0.259,0.578,0.58v4.193h4.194     c0.319,0,0.58,0.26,0.58,0.58V24.253z"></path>
    </g>
  </g>
</g>
</svg>
</a>
<a class="share__link" href="www.dribble.com" title="dribbble">
<svg class="share__icon share__icon--dribbble" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 96 96" style="enable-background:new 0 0 96 96;" xml:space="preserve">
<g>
  <path  d="M49.297,47.914c0.172-0.054,0.343-0.106,0.515-0.157c-0.414-0.928-0.873-1.886-1.395-2.915   c-9.4,2.776-18.399,2.812-20.008,2.784c-0.004,0.124-0.008,0.249-0.008,0.374c0,4.728,1.698,9.271,4.79,12.835   C34.223,59.173,39.68,51.025,49.297,47.914z M60.775,33.144c-3.554-3.059-8.081-4.741-12.775-4.741   c-1.419,0-2.846,0.156-4.248,0.466c1.024,1.381,4.161,5.736,7.106,11.112C57.267,37.526,60.166,33.97,60.775,33.144z    M36.118,63.567C39.567,66.206,43.672,67.6,48,67.6c2.584,0,5.096-0.496,7.469-1.475c-0.331-1.903-1.474-7.7-4.107-14.605   C40.754,55.269,36.754,62.325,36.118,63.567z M46.524,41.325c-3.039-5.36-6.203-9.775-7.071-10.962   c-5.337,2.592-9.262,7.533-10.567,13.298h0.081C30.999,43.661,38.213,43.491,46.524,41.325z M55.566,50.487   c2.324,6.457,3.396,11.832,3.703,13.548c4.257-2.998,7.172-7.602,8.045-12.712c-0.868-0.26-4.006-1.107-7.955-1.107   C58.063,50.216,56.789,50.307,55.566,50.487z M48,0C21.489,0,0,21.49,0,48c0,26.511,21.489,48,48,48s48-21.489,48-48   C96,21.49,74.511,0,48,0z M48,71.492c-12.954,0-23.492-10.538-23.492-23.492S35.046,24.508,48,24.508S71.492,35.046,71.492,48   S60.954,71.492,48,71.492z M52.611,43.378c0.433,0.893,0.839,1.783,1.209,2.651c0.121,0.283,0.24,0.568,0.356,0.852   c1.387-0.166,2.87-0.25,4.41-0.25c4.265,0,7.818,0.627,9.001,0.862c-0.11-4.251-1.612-8.381-4.253-11.694   C62.53,36.825,59.238,40.612,52.611,43.378z"></path>
</g>
</svg>
    </a>
  </div>
  <div class="share-button__front">
    <p class="share-button__text"> <img class="img-fluid" src="images/sharelogo4.png" width="20px !important"  height="20px !important"alt="alternative"></p>
  </div>
</div>


                       </div>
                      </div>
                    </div>
                  </div>
                   
                </div>
<br><br>
                <?php
            }
         } else {
           // echo "0 results";
         }
         //mysqli_close($conn);

?>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html><html lang='en' class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/Eyjjafjallajokull/pen/KddvMe?depth=everything&order=popularity&page=34&q=thumbnail&show_forks=false" />

<link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/flickity/1.1.0/flickity.min.css'><link rel='stylesheet prefetch' href='//fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,300italic,300'>
<style class="cp-pen-styles">.flickity-prev-next-button.previous {
  left: -30px;
}
.flickity-prev-next-button.next {
  right: -30px;
}
.flickity-prev-next-button .arrow {
  fill: #F5F7FA;
}
.flickity-prev-next-button {
  background-color: #434A54;
  width: 38px;
  height: 38px;
}
.flickity-prev-next-button:hover {
  background-color: #656D78;
}</style></head><body>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Infinite Flickity Slider Test</title>
</head>
<style>
  html {
  box-sizing: border-box;
}
*,
*:before,
*:after {
  box-sizing: inherit;
}
.cf:before,
.cf:after {
  display: table;
  content: ' ';
}
.cf:after {
  clear: both;
}
.cf {
  *zoom: 1;
}
body {
  font-family: 'Roboto', Arial, sans-serif;
  margin: 0;
  color: #555555;
  background-color: #f5f7fa;
  text-align: center;
}
img {
    float:right;
  max-width: 100%;
  /*height: auto;*/
}
figure {
  margin: 0;
  padding: 10px;
}
figure a {
  display: block;
}
mark {
  padding: 0 5px;
  background-color: #dddddd;
}
::backdrop {
  background-color: rgba(0, 0, 0, 0.5);
}

.site-content {
    text-align: left;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    padding-right: 5%; 
    padding-left: 5%;
    margin-bottom: 90px;
}

.card {
    width: 100%;
    background-color: #fff;
    text-align: left;
    position: relative;
    
    box-shadow: 0px 2px 6px 0px rgba(204,209,217,.5);
    border: 1px solid #E6E9ED;
}

.courses {
    margin-top: 30px;
    margin-bottom: 60px;
}
.course-item {
    width: 33%;
    padding-right: 2%;
    padding-left: 2%;
    margin-bottom: 30px;

    /* ensuring proper layout*/
    float: left;
}
.course-heading {
    font-weight: 500;
    font-size: 12px;
    color: #AAB2BD;
    text-transform: uppercase;
    text-align: center;
}
.course-info {
    padding: 7%;
    min-height: 140px;
}
.course-topic {
    font-weight: 500;
    color: #AAB2BD;
    font-size: 12px;
    margin-bottom: 5px;
}
.course-topic.photo {
    color: #673AB7;
}
.course-topic.webdesign {
    color: #00BFD8;
    font-size: 19px;
    font-weight: 600;

}
.course-topic.computer {
    color: #2196F3;
}
.course-topic.code {
    color: #4CAF50;
}
.course-topic.design {
    color: #F44336;
}
.course-title {
    font-weight: 500;
    font-size: 14px;
    /*margin: 0 0 30%;*/
}
.course-meta {
    color: #AAB2BD;
    font-weight: 300;
    font-size: 11px;
    position: absolute;
    left: 7%;
    bottom: 7%;
}
.course-duration:before {
    display: inline-block;
    content: "•";
    padding-right: 5px;
    padding-left: 5px;
}
.course-caption {
    position: absolute;
    right: 5%;
    bottom: 5%;
    font-size: 18px;
    color: #AAB2BD;
  
}
</style>

<body>




    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Business Growth Services</h2>
                    <p class="p-heading p-large">We serve small and medium sized companies in all tech related industries with high quality growth services which are presented below</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-1.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Market Analysis</h4>
                            <p>Our team of enthusiastic marketers will analyse and evaluate how your company stacks against the closest competitors</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-2.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Opportunity Scan</h4>
                            <p>Once the market analysis process is completed our staff will search for opportunities that are in reach</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-3.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Action Plan</h4>
                            <p>With all the information in place you will be presented with an action plan that your company needs to follow</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Design And Plan Your Business Growth Steps</h2>
                        <p>Use our staff and our expertise to design and plan your business growth strategy. Evolo team is eager to advise you on the best opportunities that you should look into</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">LIGHTBOX</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1-office-worker.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    
    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2-office-team-work.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Search For Optimization Wherever Is Possible</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Basically we'll teach you step by step what you need to do</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">In order to develop your company and reach new heights</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Everyone will be pleased from stakeholders to employees</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">LIGHTBOX</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
    <div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Design And Plan</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
    <div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-2.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Search To Optimize</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->


    <!-- Pricing -->
    <!--<div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Multiple Pricing Options</h2>
                    <p class="p-heading p-large">We've prepared pricing plans for all budgets so you can get started right away. They're great for small companies and large organizations</p>
                </div> <!-- end of col -->
           <!-- </div> <!-- end of row -->
           <!-- <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <!--<div class="card">
                        <div class="card-body">
                            <div class="card-title">STARTER</div>
                            <div class="card-subtitle">Just to see what can be achieved</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">$</span><span class="value">199</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#request">REQUEST</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                   <!-- <div class="card">
                        <div class="card-body">
                            <div class="card-title">MEDIUM</div>
                            <div class="card-subtitle">Very appropriate for the short term</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">$</span><span class="value">299</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#request">REQUEST</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <!--<div class="card">
                        <div class="label">
                            <p class="best-value">Best Value</p>
                        </div>
                        <div class="card-body">
                            <div class="card-title">COMPLETE</div>
                            <div class="card-subtitle">Must have for large companies</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">$</span><span class="value">399</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#request">REQUEST</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

       <!--         </div> <!-- end of col -->
       <!--     </div> <!-- end of row -->
    <!--    </div> <!-- end of container -->
  <!--  </div> <!-- end of cards-2 -->
    <!-- end of pricing -->


    <!-- Request -->
   <!-- <div id="request" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Fill The Following Form To Request A Meeting</h2>
                        <p>Evolo is one of the easiest and feature packed marketing automation apps in the market. Discover what it can do for your business organization right away.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Automate your marketing</strong> activities and get results today</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Interact with all your</strong> targeted customers at a personal level</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Convince them to buy</strong> your company's awesome products</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Save precious time</strong> and invest it where you need it the most</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
             <!--   </div> <!-- end of col -->
              <!--  <div class="col-lg-6">

                    <!-- Request Form -->
                 <!--   <div class="form-container">
                        <form id="requestForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rname" name="rname" required>
                                <label class="label-control" for="rname">Full name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="remail" name="remail" required>
                                <label class="label-control" for="remail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rphone" name="rphone" required>
                                <label class="label-control" for="rphone">Phone</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <select class="form-control-select" id="rselect" required>
                                    <option class="select-option" value="" disabled selected>Interested in...</option>
                                    <option class="select-option" value="Personal Loan">Starter</option>
                                    <option class="select-option" value="Car Loan">Medium</option>
                                    <option class="select-option" value="House Loan">Complete</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">REQUEST</button>
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of request form -->

        <!--        </div> <!-- end of col -->
        <!--    </div> <!-- end of row -->
      <!--  </div> <!-- end of container -->
    <!--</div> <!-- end of form-1 -->
    <!-- end of request -->


    <!-- Video -->
   <!-- <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Check Out The Video</h2>
                </div> <!-- end of col -->
            <!--</div> <!-- end of row -->
           <!-- <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Video Preview -->
                   <!-- <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
                                <img class="img-fluid" src="images/video-frame.svg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
              <!--      </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                   <!-- <p>This video will show you a case study for one of our <strong>Major Customers</strong> and will help you understand why your startup needs Evolo in this highly competitive market</p>
                </div> <!-- end of col -->
          <!--  </div> <!-- end of row -->
     <!--   </div> <!-- end of container -->
    <!--</div> <!-- end of basic-3 -->
    <!-- end of video -->


    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/testimonials-2-men-talking.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h2>Testimonials</h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-1.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">I just finished my trial period and was so amazed with the support and results that I purchased Evolo right away at the special price.</p>
                                            <p class="testimonial-author">Jude Thorn - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Evolo has always helped or startup to position itself in the highly competitive market of mobile applications. You will not regret using it!</p>
                                            <p class="testimonial-author">Marsha Singer - Developer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Love their services and was so amazed with the support and results that I purchased Evolo for two years in a row. They are awesome.</p>
                                            <p class="testimonial-author">Roy Smith - Marketer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                               
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Developed By</h2>
                    <p class="p-heading p-large">Meat our team of specialized marketers and business developers which will help you research new products and launch them in new emerging markets</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/myProfile2.jpg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>Kaustubh KD</strong></p>
                        <p class="job-title">Software Developer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->


    

<?php 
include('footer.php');
?>
</body>
</html>
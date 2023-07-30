 
<?php 
error_reporting();
session_start();
if($_SESSION['admin_user'])
{?>
<a href="./Index2.php"><img src="../images/home.png" height="40px" width="40px" style="position: absolute;top:5%;left:5%;"></a>
<?php
}
else
{?>
<a href="index.php"><img src="../images/home.png" height="40px" width="40px" style="margin-left: 5%;margin-top: 2%"></a>
<?php
}?>

<?php 
include_once '../conn.php';
 $siteblogs= "SELECT count(*) as count FROM blog_records";
 $noofblog = "SELECT count(*) as count FROM blog_records WHERE (DateTime > NOW() - INTERVAL 1 MONTH) AND bstatus='Publish'";
 $noofblog1 = "SELECT count(*) as count FROM blog_records WHERE (DateTime > NOW() - INTERVAL 1 MONTH) AND bstatus='Draft'";
 $noofblog2 = "SELECT count(*) as count FROM blog_records WHERE is_editor_choice=1";

 $siteusers="SELECT count(*) as count FROM membership_users";
 $siteusers_Jan="SELECT count(*) as count FROM membership_users where User_datetime BETWEEN '2021-01-01 00:00:00' AND '2021-01-28 11:59:59' ";
 $siteusers_feb="SELECT count(*) as count FROM membership_users where User_datetime BETWEEN '2021-02-01 00:00:00' AND '2021-02-28 11:59:59' ";
 $siteusers_march="SELECT count(*) as count FROM membership_users where User_datetime BETWEEN '2021-03-01 00:00:00' AND '2021-03-28 11:59:59' ";
 $siteusers_april="SELECT count(*) as count FROM membership_users where User_datetime BETWEEN '2021-04-01 00:00:00' AND '2021-04-28 11:59:59' ";
 $siteusers_may="SELECT count(*) as count FROM membership_users where User_datetime BETWEEN '2021-05-01 00:00:00' AND '2021-05-28 11:59:59' ";
 $siteusers_june="SELECT count(*) as count FROM membership_users where User_datetime BETWEEN '2021-06-01 00:00:00' AND '2021-06-28 11:59:59' ";
 $siteusers_july="SELECT count(*) as count FROM membership_users where User_datetime BETWEEN '2021-07-01 00:00:00' AND '2021-07-28 11:59:59' ";
 $siteusers_august="SELECT count(*) as count FROM membership_users where User_datetime BETWEEN '2021-08-01 00:00:00' AND '2021-08-28 11:59:59' ";

 $noofblog_jan = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-01-01 00:00:00' AND '2021-01-28 11:59:59')";
 $noofblog_feb = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-02-01 00:00:00' AND '2021-02-28 11:59:59')";
 $noofblog_march = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-03-01 00:00:00' AND '2021-03-28 11:59:59')";
 $noofblog_april = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-04-01 00:00:00' AND '2021-04-28 11:59:59')";
 $noofblog_may = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-05-01 00:00:00' AND '2021-05-28 11:59:59')";
 $noofblog_june = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-06-01 00:00:00' AND '2021-06-30 11:59:59')";
 $noofblog_july = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-07-01 00:00:00' AND '2021-07-28 11:59:59')";
 $noofblog_august = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-08-01 00:00:00' AND '2021-08-28 11:59:59')";

 $noofeditblog_jan = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-01-01 00:00:00' AND '2021-01-28 11:59:59') AND is_editor_choice='1'";
 $noofeditblog_feb = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-02-01 00:00:00' AND '2021-02-28 11:59:59') AND is_editor_choice='1'";
 $noofeditblog_march = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-03-01 00:00:00' AND '2021-03-28 11:59:59') AND is_editor_choice='1'";
 $noofeditblog_april = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-04-01 00:00:00' AND '2021-04-28 11:59:59') AND is_editor_choice='1'";
 $noofeditblog_may = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-05-01 00:00:00' AND '2021-05-28 11:59:59') AND is_editor_choice='1'";
 $noofeditblog_june = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-06-01 00:00:00' AND '2021-06-30 11:59:59') AND is_editor_choice='1'";
 $noofeditblog_july = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-07-01 00:00:00' AND '2021-07-28 11:59:59') AND is_editor_choice='1'";
 $noofeditblog_august = "SELECT count(*) as count FROM blog_records WHERE( DateTime BETWEEN '2021-08-01 00:00:00' AND '2021-08-28 11:59:59') AND is_editor_choice='1'";

 $noofcomment_jan = "SELECT count(*) as count FROM comments WHERE( date BETWEEN '2021-01-01 00:00:00' AND '2021-01-28 11:59:59')";
 $noofcomment_feb = "SELECT count(*) as count FROM comments WHERE( date BETWEEN '2021-02-01 00:00:00' AND '2021-02-28 11:59:59')";
 $noofcomment_march = "SELECT count(*) as count FROM comments WHERE( date BETWEEN '2021-03-01 00:00:00' AND '2021-03-28 11:59:59')";
 $noofcomment_april = "SELECT count(*) as count FROM comments WHERE( date BETWEEN '2021-04-01 00:00:00' AND '2021-04-28 11:59:59')";
 $noofcomment_may = "SELECT count(*) as count FROM comments WHERE( date BETWEEN '2021-05-01 00:00:00' AND '2021-05-28 11:59:59')";
 $noofcomment_june = "SELECT count(*) as count FROM comments WHERE( date BETWEEN '2021-06-01 00:00:00' AND '2021-06-30 11:59:59')";
 $noofcomment_july = "SELECT count(*) as count FROM comments WHERE( date BETWEEN '2021-07-01 00:00:00' AND '2021-07-28 11:59:59')";
 $noofcomment_august = "SELECT count(*) as count FROM comments WHERE( date BETWEEN '2021-08-01 00:00:00' AND '2021-08-28 11:59:59')";


 $find_counts="select *from user_counter";
 $countsql = 'SELECT * FROM user_counter';


 $noofcomments="SELECT count(*) as count FROM comments";

 $noofenquiries="SELECT count(*) as count FROM contact";

 $site_blogs_result = mysqli_query($conn, $siteblogs);
 $noofblog_result = mysqli_query($conn, $noofblog);
 $noofblog_result1 = mysqli_query($conn, $noofblog1);
 $noofblog_result2 = mysqli_query($conn, $noofblog2);

 $siteusers_result  = mysqli_query($conn, $siteusers);
 $siteusers_result2 = mysqli_query($conn, $siteusers_Jan);
 $siteusers_result3 = mysqli_query($conn, $siteusers_feb);
 $siteusers_result4 = mysqli_query($conn, $siteusers_march);
 $siteusers_result5 = mysqli_query($conn, $siteusers_april);
 $siteusers_result6 = mysqli_query($conn, $siteusers_may);
 $siteusers_result7 = mysqli_query($conn, $siteusers_june);
 $siteusers_result8 = mysqli_query($conn, $siteusers_july);
 $siteusers_result9 = mysqli_query($conn, $siteusers_august);

 $noofblog_Jan_result1 = mysqli_query($conn, $noofblog_jan);
 $noofblog_feb_result1 = mysqli_query($conn, $noofblog_feb);
 $noofblog_march_result1 = mysqli_query($conn, $noofblog_march);
 $noofblog_april_result1 = mysqli_query($conn, $noofblog_april);
 $noofblog_may_result1 = mysqli_query($conn, $noofblog_may);
 $noofblog_june_result1 = mysqli_query($conn, $noofblog_june);
 $noofblog_july_result1 = mysqli_query($conn, $noofblog_july);
 $noofblog_august_result1 = mysqli_query($conn, $noofblog_august);


 $noofblog_Jan_edit_result1 = mysqli_query($conn, $noofeditblog_jan);
 $noofblog_feb_edit_result1 = mysqli_query($conn, $noofeditblog_feb);
 $noofblog_march_edit_result1 = mysqli_query($conn, $noofeditblog_march);
 $noofblog_april_edit_result1 = mysqli_query($conn, $noofeditblog_april);
 $noofblog_may_edit_result1 = mysqli_query($conn, $noofeditblog_may);
 $noofblog_june_edit_result1 = mysqli_query($conn, $noofeditblog_june);
 $noofblog_july_edit_result1 = mysqli_query($conn, $noofeditblog_july);
 $noofblog_august_edit_result1 = mysqli_query($conn, $noofeditblog_august);

 $noofcomment_Jan_result1 = mysqli_query($conn, $noofcomment_jan);
 $noofcomment_feb_result1 = mysqli_query($conn, $noofcomment_feb);
 $noofcomment_march_result1 = mysqli_query($conn, $noofcomment_march);
 $noofcomment_april_result1 = mysqli_query($conn, $noofcomment_april);
 $noofcomment_may_result1 = mysqli_query($conn, $noofcomment_may);
 $noofcomment_june_result1 = mysqli_query($conn, $noofcomment_june);
 $noofcomment_july_result1 = mysqli_query($conn, $noofcomment_july);
 $noofcomment_august_result1 = mysqli_query($conn, $noofcomment_august);

 $countresult = mysqli_query($conn, $countsql);

 $commentresult = mysqli_query($conn, $noofcomments);

 $enquiryresult = mysqli_query($conn, $noofenquiries);
 





if (mysqli_num_rows($noofblog_result1) > 0) 
{
    while($noofblog_countrow1 = mysqli_fetch_assoc($noofblog_result1)) 
    {
    
     // echo "<br>no of blogs saved as draft in this month".implode(',',$noofblog_countrow1);
  
  }
}


      

?>
 <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

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

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php 
                                                  if (mysqli_num_rows($siteusers_result) > 0) 
                                                        {
                                                            while($siteusers_row = mysqli_fetch_assoc($siteusers_result)) 
                                                            {
                                                            
                                                              echo "".implode(',',$siteusers_row);
                                                          
                                                          }
                                                        }
                                                ?></h2>
                                                <button type="button"  data-toggle="modal" data-target="#exampleModalLong">

                                                <span>Site Users</span>
                                              </button>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fab fa-blogger-b"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php 


                                                    if (mysqli_num_rows($site_blogs_result) > 0) 
                                                    {
                                                        while($siteblog_row = mysqli_fetch_assoc($site_blogs_result)) 
                                                        {
                                                        
                                                          echo "".implode(',',$siteblog_row);
                                                      
                                                      }
                                                    }
                                                ?></h2>
                                               <button type="button"  data-toggle="modal" data-target="#exampleModal1">
                                                <span>Total Site Blogs</span>
                                              </button>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php 

                                                      if (mysqli_num_rows($noofblog_result) > 0) 
                                                      {
                                                          while($noofblog_countrow = mysqli_fetch_assoc($noofblog_result)) 
                                                          {
                                                            echo "".implode(',',$noofblog_countrow);
                                                        
                                                        }
                                                      }
                                                ?></h2>
                                                <span>This Month  Blogs</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fas fa-clipboard-check"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php 
                                                if (mysqli_num_rows($noofblog_result2) > 0) 
                                                      {
                                                          while($noofblog_countrow2 = mysqli_fetch_assoc($noofblog_result2)) 
                                                          {
                                                          
                                                            echo "".implode(',',$noofblog_countrow2);
                                                        
                                                        }
                                                      }
                                                ?></h2>
                                                <button type="button"  data-toggle="modal" data-target="#exampleModal3">
                                                        <span>Editor's choice blogs</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php 

                                                    if (mysqli_num_rows($countresult) > 0) 
                                                    {
                                                        while($countrow = mysqli_fetch_assoc($countresult)) 
                                                        {
                                                        
                                                      $current_count=$countrow['counts'];
                                                      echo "".$current_count;
                                                      
                                                      }
                                                    }
                                                ?></h2>
                                                <span>Total Site Visitors</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fas fa-comments"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php 
                                                 if (mysqli_num_rows($commentresult) > 0) 
                                                      {
                                                          while($comment_row = mysqli_fetch_assoc($commentresult)) 
                                                          {
                                                          
                                                            echo "".implode(',',$comment_row);
                                                        
                                                        }
                                                      }

                                                ?></h2>
                                                <button type="button"  data-toggle="modal" data-target="#exampleModal4">
                                                        <span>Total comments</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                               <i class="fas fa-id-badge"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php 


                                                            if (mysqli_num_rows($enquiryresult) > 0) 
                                                            {
                                                                while($enquiryrow = mysqli_fetch_assoc($enquiryresult)) 
                                                                {
                                                                
                                                                  echo "".implode(',',$enquiryrow);
                                                              
                                                              }
                                                            }
                                                ?></h2>
                                                <span>Total Enquiries</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#exampleModalLong').modal('show');
    });
</script>

<!-- Total users Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Users Registered Per Month</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container" >
          <h2></h2><br>
               
            <table class="table">
              <thead>
                <tr>
                  
                  <th scope="col">Month</th>
                  <th scope="col">No of Registered Users</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jan</td>
                    <td><?php 
                        if (mysqli_num_rows($siteusers_result2) > 0) 
                        {
                             while($siteusers_row2 = mysqli_fetch_assoc($siteusers_result2)) 
                                 {
                                                                        
                                     echo "".implode(',',$siteusers_row2);
                                  }
                              }
                        ?></td>
                 
                </tr>
                <tr>
                  <td>Feb</td>
                   <td><?php 
                        if (mysqli_num_rows($siteusers_result3) > 0) 
                        {
                             while($siteusers_row3 = mysqli_fetch_assoc($siteusers_result3)) 
                                 {
                                                                        
                                     echo "".implode(',',$siteusers_row3);
                                  }
                              }
                        ?></td>
                </tr>
                <tr>
                 <td>March</td>
                    <td><?php 
                        if (mysqli_num_rows($siteusers_result4) > 0) 
                        {
                             while($siteusers_row4 = mysqli_fetch_assoc($siteusers_result4)) 
                                 {
                                                                        
                                     echo "".implode(',',$siteusers_row4);
                                  }
                              }
                        ?>
                          
                        </td>
                </tr>
                <tr>
                 <td>April</td>
                     <td><?php 
                        if (mysqli_num_rows($siteusers_result5) > 0) 
                        {
                             while($siteusers_row5 = mysqli_fetch_assoc($siteusers_result5)) 
                                 {
                                                                        
                                     echo "".implode(',',$siteusers_row5);
                                  }
                              }
                        ?></td>
                </tr>
                <tr>
                 <td>May</td>
                     <td><?php 
                        if (mysqli_num_rows($siteusers_result6) > 0) 
                        {
                             while($siteusers_row6 = mysqli_fetch_assoc($siteusers_result6)) 
                                 {
                                                                        
                                     echo "".implode(',',$siteusers_row6);
                                  }
                              }
                        ?></td>
                </tr>
                <tr>
                 <td>June</td>
                     <td><?php 
                        if (mysqli_num_rows($siteusers_result7) > 0) 
                        {
                             while($siteusers_row7 = mysqli_fetch_assoc($siteusers_result7)) 
                                 {
                                                                        
                                     echo "".implode(',',$siteusers_row7);
                                  }
                              }
                        ?></td>
                </tr>
                <tr>
                 <td>July</td>
                     <td><?php 
                        if (mysqli_num_rows($siteusers_result8) > 0) 
                        {
                             while($siteusers_row8 = mysqli_fetch_assoc($siteusers_result8)) 
                                 {
                                                                        
                                     echo "".implode(',',$siteusers_row8);
                                  }
                              }
                        ?></td>        
                </tr>
                <tr>
                 <td>August</td>
                     <td><?php 
                        if (mysqli_num_rows($siteusers_result9) > 0) 
                        {
                             while($siteusers_row9 = mysqli_fetch_assoc($siteusers_result9)) 
                                 {
                                                                        
                                     echo "".implode(',',$siteusers_row9);
                                  }
                              }
                        ?></td>        
                </tr>
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
</div>




<!-- Total blogs Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Blogs Published Per Month</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container" >
          <h2></h2><br>
               
            <table class="table">
              <thead>
                <tr>
                  
                  <th scope="col">Month</th>
                  <th scope="col">No of Blogs Per Month</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jan</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_Jan_result1) > 0) 
                        {
                             while($noofblog_Jan_row = mysqli_fetch_assoc($noofblog_Jan_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_Jan_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>Feb</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_feb_result1) > 0) 
                        {
                             while($noofblog_feb_row = mysqli_fetch_assoc($noofblog_feb_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_feb_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>March</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_march_result1) > 0) 
                        {
                             while($noofblog_march_row = mysqli_fetch_assoc($noofblog_march_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_march_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>April</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_april_result1) > 0) 
                        {
                             while($noofblog_april_row = mysqli_fetch_assoc($noofblog_april_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_april_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>May</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_may_result1) > 0) 
                        {
                             while($noofblog_may_row = mysqli_fetch_assoc($noofblog_may_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_may_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>June</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_june_result1) > 0) 
                        {
                             while($noofblog_june_row = mysqli_fetch_assoc($noofblog_june_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_june_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>July</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_july_result1) > 0) 
                        {
                             while($noofblog_july_row = mysqli_fetch_assoc($noofblog_july_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_july_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>August</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_august_result1) > 0) 
                        {
                             while($noofblog_august_row = mysqli_fetch_assoc($noofblog_august_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_august_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
</div>



<!-- Total blogs Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Blogs Made as Editor's Choice Per Month</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container" >
          <h2></h2><br>
               
            <table class="table">
              <thead>
                <tr>
                  
                  <th scope="col">Month</th>
                  <th scope="col">No of Blogs Per Month</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jan</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_Jan_edit_result1) > 0) 
                        {
                             while($noofblog_Jan_edit_row = mysqli_fetch_assoc($noofblog_Jan_edit_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_Jan_edit_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>Feb</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_feb_edit_result1) > 0) 
                        {
                             while($noofblog_feb_edit_row = mysqli_fetch_assoc($noofblog_feb_edit_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_feb_edit_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>March</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_march_edit_result1) > 0) 
                        {
                             while($noofblog_march_edit_row = mysqli_fetch_assoc($noofblog_march_edit_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_march_edit_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>April</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_april_edit_result1) > 0) 
                        {
                             while($noofblog_april_edit_row = mysqli_fetch_assoc($noofblog_april_edit_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_april_edit_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>May</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_may_edit_result1) > 0) 
                        {
                             while($noofblog_may_edit_row = mysqli_fetch_assoc($noofblog_may_edit_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_may_edit_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>June</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_june_edit_result1) > 0) 
                        {
                             while($noofblog_june_edit_row = mysqli_fetch_assoc($noofblog_june_edit_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_june_edit_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>July</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_july_edit_result1) > 0) 
                        {
                             while($noofblog_july_edit_row = mysqli_fetch_assoc($noofblog_july_edit_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_july_edit_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>August</td>
                    <td><?php 
                        if (mysqli_num_rows($noofblog_august_edit_result1) > 0) 
                        {
                             while($noofblog_august_edit_row = mysqli_fetch_assoc($noofblog_august_edit_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofblog_august_edit_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
</div>



<!-- Total blogs Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Comments Made Per Month</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container" >
          <h2></h2><br>
               
            <table class="table">
              <thead>
                <tr>
                  
                  <th scope="col">Month</th>
                  <th scope="col">No of Comments Per Month</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jan</td>
                    <td><?php 
                        if (mysqli_num_rows($noofcomment_Jan_result1) > 0) 
                        {
                             while($noofcomment_Jan_row = mysqli_fetch_assoc($noofcomment_Jan_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofcomment_Jan_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>Feb</td>
                    <td><?php 
                        if (mysqli_num_rows($noofcomment_feb_result1) > 0) 
                        {
                             while($noofcomment_feb_row = mysqli_fetch_assoc($noofcomment_feb_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofcomment_feb_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>March</td>
                    <td><?php 
                        if (mysqli_num_rows($noofcomment_march_result1) > 0) 
                        {
                             while($noofcomment_march_row = mysqli_fetch_assoc($noofcomment_march_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofcomment_march_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>April</td>
                    <td><?php 
                        if (mysqli_num_rows($noofcomment_april_result1) > 0) 
                        {
                             while($noofcomment_april_row = mysqli_fetch_assoc($noofcomment_april_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofcomment_april_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>May</td>
                    <td><?php 
                        if (mysqli_num_rows($noofcomment_may_result1) > 0) 
                        {
                             while($noofcomment_may_row = mysqli_fetch_assoc($noofcomment_may_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofcomment_may_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>June</td>
                    <td><?php 
                        if (mysqli_num_rows($noofcomment_june_result1) > 0) 
                        {
                             while($noofcomment_june_row = mysqli_fetch_assoc($noofcomment_june_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofcomment_june_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                <tr>
                  <td>July</td>
                    <td><?php 
                        if (mysqli_num_rows($noofcomment_july_result1) > 0) 
                        {
                             while($noofcomment_july_row = mysqli_fetch_assoc($noofcomment_july_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofcomment_july_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                 <tr>
                  <td>August</td>
                    <td><?php 
                        if (mysqli_num_rows($noofcomment_august_result1) > 0) 
                        {
                             while($noofcomment_august_row = mysqli_fetch_assoc($noofcomment_august_result1)) 
                                 {
                                                                        
                                     echo "".implode(',',$noofcomment_august_row);
                                  }
                              }
                        ?>        
                    </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
</div>


<?php  

   //include("../header.php");
   include_once '../conn.php';
 $query = "SELECT Is_ApprovedBanned,count(*) as number FROM membership_users GROUP BY Is_ApprovedBanned";  
 $result = mysqli_query($conn, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Is_ApprovedBanned', 'Number'],


                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Is_ApprovedBanned"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of blocked and unblocked users',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                
                <br />  
                <div id="piechart" style="width: 800px; height: 500px;position: absolute;top:90%;left: 1%; top:100%;"></div>  
           </div>  
      </body>  
     <div style="position: absolute;top: 112.5%;left: 33.8%;z-index: 9;background-color: white;font-family: arial;">Unblocked Users</div>
      <div style="position: absolute;top: 115.5%;left: 33.8%;z-index: 9;background-color: white;font-family: arial;">Blocked Users</div>
 </html>  
<?php ?>
  <!--<img src="../images/Calendar-Icon.png" />-->
<?php 
//include_once './conn.php';
 //error_reporting(0);
 

       //   echo " <div style='color:red;position:absolute;top:90%;left:4%; font-size:40px;font-weight:40; font-family:arial; text-align:center;'>  Visitors<br>$current_count</div>";

?>


<html>
   <head>
      <title>Google Charts Tutorial</title>
      <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>
   </head>
   <?php 
 $query1 = "SELECT DateTime,count('bid') as number1 FROM blog_records where DateTime BETWEEN '2021-04-01 00:00:00' AND '2021-05-28 11:59:59' GROUP BY DateTime";  
 $query2 = "SELECT DateTime,count('bid') as number2 FROM blog_records where DateTime BETWEEN '2021-05-01 00:00:00' AND '2021-05-31 11:59:59' GROUP BY DateTime"; 
 $query3 = "SELECT DateTime,count('bid') as number3 FROM blog_records where DateTime BETWEEN '2021-06-01 00:00:00' AND '2021-06-31 11:59:59' GROUP BY DateTime";
 $query3 = "SELECT DateTime,count('bid') as number3 FROM blog_records where DateTime BETWEEN '2021-06-01 00:00:00' AND '2021-06-31 11:59:59' GROUP BY DateTime";
 $result1 = mysqli_query($conn, $query1); 
 $result2 = mysqli_query($conn, $query2);
 $result3 = mysqli_query($conn, $query3);
   ?>
   <body>
      <div id = "container" style = "width: 700px; height: 400px;position: absolute;top:100%;left: 50%; margin: 0 auto">
      </div>
      <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Month', 'number of blogs'],
               <?php  
                          while($row1 = mysqli_fetch_array($result1))  
                          {  
                               echo "['".date('F Y',strtotime($row1["DateTime"]))."', ".$row1["number1"]."],";  
                              
                          }  
                           while($row3 = mysqli_fetch_array($result3))  
                          {  
                                
                               echo "['".date('F Y',strtotime($row3["DateTime"]))."', ".$row3["number3"]."],";  
                          }  
                           while($row2 = mysqli_fetch_array($result2))  
                          {  
                                
                               echo "['".date('F Y',strtotime($row2["DateTime"]))."', ".$row2["number2"]."],";  
                          } 
                          
                          ?>  
            ]);

            var options = {title: 'No of Blogs per month'}; 

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>

   </body>
</html>



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

    <!-- Main JS-->
    <script src="js/main.js"></script>

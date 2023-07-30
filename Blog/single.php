<?php
session_start();
echo "single page";

error_reporting(E_ALL);
include('conn.php');

if (isset($_GET['bid']))
{
$id = $_GET['bid'];

$sql1 = 'SELECT * FROM blog_records where bid=$id';
         $result1 = mysqli_query($conn, $sql1);

         if (mysqli_num_rows($result1) > 0) {
            while($row1 = mysqli_fetch_assoc($result1)) {?>
               
                <div class="card col-8 mb-3  ml-5 " style="margin-top: -40px;">
                    
                  <div class="row no-gutters">
                    <div class="col-lg-4">
                        <td >
                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['bimage']).'" height="300" width="300" />';?>
                            </td>";
                    
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row1["btitle"];?></h5>
                       <p class="card-text"><small class="text-muted" style="text-align: left !important;"><?php echo $row1["bcontent"];?></small></p></p>
                        <p class="card-text"><small class="text-muted"><?php echo $row1["btag"];?></small></p>
                        <h4 class="card-text"><?php echo $row1["DateTime"];?></h4>
                         <h4 class="card-text"><?php echo $row1["user"];?></h4>
                         <a  class="btn btn-primary">Read More</a>
                      </div>
                    </div>
                  </div>
                   
                </div>
<br><br>
                <?php
            }
         } else {
            echo "0 results";
         }
     
        
}
?>
<html>
    <body>
        <?php 
include('header.php');

include_once 'conn.php';

if(isset($_POST['message']))
{  

$cname=$_POST['cname'];
$cemail=$_POST['cemail'];
$cmsg=$_POST['cmessage'];

  
   $sql = "INSERT into `contact` (Name,Email,Message) 
VALUES ('$cname','$cemail','$cmsg')";
 //header("location:login.php");
   if (mysqli_query($conn, $sql)) {
    //header("location:Home.php");
    echo "Message sent successfully !";
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}


?>


        <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Information</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                        <li><i class="fas fa-map-marker-alt"></i>22 Innovative Area, Delhi, CA 94043, India</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+81 720 2212</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com">office@blogger.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100939.98555098464!2d-122.507640204439!3d37.757814996609724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sro!4v1498231462606" allowfullscreen></iframe>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form action="" method="post"  name="message" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="cname" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" name="cemail" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="cmessage" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control-submit-button" value="message"name="message">
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->
    <?php 
include('footer.php');
?>
    </body>
</html>



<?php


   ob_start();
   session_start();
   //include("../header.php");
   include_once '../conn.php';



//$userinfo=$_SESSION['login_user'];
//$userid=$_SESSION['UserId'];

error_reporting(0);

include_once 'conn.php';
if(isset($_POST['upload']))
{  

$title=$_POST['btitle'];
$cat=$_POST['category'];
$tag=$_POST['tag'];
//$edit=$_POST['area2'];
$blog_content=$_POST['editor1'];
$text1=mysqli_real_escape_string($blog_content);
$stat=$_POST['bstatus'];
$user_id=$_POST['authorid'];
$editblog=$_POST['editorblog'];
if(isset($_POST['editorblog']))
{
  $editblog=1;
}
else{
  $editblog=0;
}

echo $editblog;
$user=$_SESSION['admin_user'];
//$file=addslashes(file_get_contents($_FILES["imagefile"]["tmp_name"]));
$file = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];   
$folder = "../blog_images/".$file;

  
   $sql = "INSERT into `blog_records` (btitle,bcategory,btag,bcontent,bstatus,is_editor_choice,bimage,user,userid) 
VALUES ('$title','$cat','$tag','$blog_content','$stat','$editblog','$file','$user','$user_id')";
 
   if (mysqli_query($conn, $sql)) {
    if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
    header("location:../Home.php");
    echo "blog record created successfully !";
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}


?>


<!DOCTYPE html>
<html>
<head>
<!doctype html>
<html lang="en">
  <head>
    <title>Craete BLog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
</script>


  </body>
</html>


<body style="background-image: url('../images/back6.jpg');background-size: 1580px 1024px;">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;

}


span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>


<?php 

  include_once 'conn.php';
  $sql = 'SELECT * FROM blog_categories';
         $result = mysqli_query($conn, $sql);

        
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
<form action="" method="post"  name="blog_form" style="margin-top: 5%;" enctype="multipart/form-data" >
  <div class="col-8 container">
    <h1>Create your blog</h1>
  
    <hr>
 <input type="hidden" placeholder="Your blog title..." name="authorid" id="authorid" value="<?php echo $userid ?>" >
    <label for="title"><b>Enter Title:</b></label>
    <input type="text" placeholder="Your blog title..." name="btitle" id="btitle" >
<br><br>
    <label for="category"><b>Choose Category:</b></label>
    <select class="col-6 btn btn-light dropdown-toggle3" aria-label="Default select example" name="category" id="category">
     
  <option selected>None</option>
    <?php if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>
  <option value="<?php echo $row["CName"];?>"><?php echo $row["CName"];?></option>
  <?php
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);

?>

</select>
<br><br>

    <label for="tag"><b>Enter Tag:</b></label>
    <input type="text" placeholder="Your blog tags..." name="tag" id="tag" >

   
      <label for="tag"><b>Write Here:</b></label>
      
        <!--<textarea id="editor1" name="editor1"  style="width: 100%;"></textarea>-->
          <div class="form-group">
             <textarea id="editor1" name="editor1" style="width: 100%;"></textarea>
          </div>
          


  
  <!--<label for="tag"><b>Write Here:</b></label>
<textarea name="area2" id="area2" style="width: 100%;">
       Some Initial Content was in this textarea
</textarea>--->
 
  <label class="form-label" for="stat"><b>Choose Status</b></label>
<select class="col-6 btn btn-light dropdown-toggle" aria-label="Default select example" name="bstatus" id="bstatus">
     
  <option selected>Publish</option>
  <option value="Draft">Draft</option>
  
</select><br><br>
<label class="form-label" for="customFile">Make it Editor's Choice</label>
<input type="checkbox" name="editorblog" id="editorblog" value="1"  />
<br>
<label class="form-label" for="customFile"><b>Choose Image</b></label>
<!--<input type="file" class="form-control col-6 " accept="image/*" name="imagefile" id="imagefile"  onchange="loadFile(event)"/>-->
<input type="file" name="uploadfile" value="" onchange="loadFile(event)"/>
 <img  id="output"  alt="your image"  height="200" width="200" />
<br>
<br>
<div class="col-12 ">
    <input type="submit" class="registerbtn col-12 btn btn-success"value="Upload Your Blog" name="upload">
  </div>
 
</form>


</body>
</html>






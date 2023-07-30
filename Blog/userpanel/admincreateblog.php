
<?php


   ob_start();
   session_start();
   include("../header.php");
   include_once '../conn.php';


error_reporting(0);

include_once 'conn.php';
if(isset($_POST['upload']))
{  

$title=$_POST['btitle'];
$cat=$_POST['category'];
$tag=$_POST['tag'];
$edit=$_POST['editor'];
$stat=$_POST['bstatus'];
$image=$_POST['imagefile'];
$user=$_SESSION['admin_user'];
  
   $sql = "INSERT into `blog_records` (btitle,bcategory,btag,bcontent,bstatus,bimage,user) 
VALUES ('$title','$cat','$tag','$edit','$stat','$image','$user')";
 
   if (mysqli_query($conn, $sql)) {
    header("location:../index.php");
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
     
  

<form action="" method="post"  name="blog_form" style="margin-top: 10%;" enctype="multipart/form-data" >
  <div class="col-8 container">
    <h1>Create your blog</h1>
  
    <hr>

    <label for="title"><b>Enter Title:</b></label>
    <input type="text" placeholder="Your blog title..." name="btitle" id="btitle" >

    <label for="category"><b>Choose Category:</b></label>
    <select class="form-select col-3" aria-label="Default select example" name="category" id="category">
     
  <option selected>select blog category</option>
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
<br>

    <label for="tag"><b>Enter Tag:</b></label>
    <input type="text" placeholder="Your blog tags..." name="tag" id="tag" >

    <div class="container mt-4 mb-4 ml-0 mr-0">
      <div class="row justify-content-md-center">
        <div class="col-lg-12 ">
      
          <div class="form-group">
             <textarea id="editor" name="editor"></textarea>
          </div>
      <!--<button type="submit" class="btn btn-primary">Submit</button>-->
        </div>
    </div>
  </div>
  <label class="form-label" for="stat">Choose Status</label>
<select class="form-select col-2" aria-label="Default select example" name="bstatus" id="bstatus">
     
  <option selected>Publish</option>
  <option value="Draft">Draft</option>
  
</select><br>

<label class="form-label" for="customFile">Choose Image</label>
<input type="file" class="form-control" name="imagefile" id="imagefile" />
<br>

<div class="col-12 ">
    <input type="submit" class="registerbtn" name="upload">Upload Your Blog
  </div>
 
</form>


</body>
</html>

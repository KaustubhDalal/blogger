
<?php


  

error_reporting(0);


$get_id=$_GET['id'];
$get_title=$_GET['title'];
$get_content1=$_GET['content'];
$get_tag=$_GET['tags'];
$get_cat=$_GET['cat'];
$get_status=$_GET['stat'];
$get_image=$_GET['bimg'];
   
 ob_start();
   session_start();
   //include("header.php");
   include_once '../conn.php';



$userinfo=$_SESSION['admin_user'];
//$userid=$_SESSION['UserId'];

if(isset($_GET['update']))
{  
  $id=$_GET['id'];
  $title=$_GET['btitle'];
  $cat=$_GET['category'];
  $tag1=$_GET['tag1'];
  $edit=$_GET['editor'];
  $stat=$_GET['bstatus1'];
  //$file1=addslashes(file_get_contents($_FILES["imagefile"]["tmp_name"]));
  $user=$_SESSION['login_user'];
    
     $sql = "update blog_records set btitle='$title',bcategory='$cat',btag='$tag1',bcontent='$edit',bstatus='$stat' where bid='$id'";

     if (mysqli_query($conn, $sql)) 
     {
      
      echo "blog record updated successfully !";
     } else
      {
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

    
  </head>

 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>





  </body>
</html>



<meta name="viewport" content="width=device-width, initial-scale=1">
<body style="background-image: url('../images/back6.jpg');background-size: 1580px 1024px;">

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
<form action="" method="get"  name="blog_form" style="margin-top: 5%;" enctype="multipart/form-data" >
  <div class="col-8 container">
    <h1>Update your blog</h1>
  
    <hr>
 <input type="hidden" placeholder="Your blog title..." name="month" id="month" value="<?php echo date('F', mktime(0, 0, 0, date('m'), 0, date('Y'))); ?>">
 <input type="hidden" name="id" id="id" value="<?php echo "$get_id"; ?>">
 <input type="hidden" placeholder="Your blog title..." name="authorid" id="authorid" value="<?php echo $userid ?>" >
    <label for="title"><b>Enter Title:</b></label>
    <input type="text" placeholder="Your blog title..." name="btitle" id="btitle" value="<?php echo "$get_title"; ?>" >
<br><br>
    <label for="category"><b>Choose Category:</b></label>
    <select class="col-6 btn btn-light dropdown-toggle3" aria-label="Default select example" value="<?php echo "$get_cat"; ?>" name="category" id="category">
     
    <?php if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>
  <option value="<?php echo "$get_cat"; ?>" ><?php echo $row["CName"];?></option>
  <?php
            }
         } else {
            //echo "0 results";
         }
         //mysqli_close($conn);

?>

</select>
<br><br>

    <label for="tag"><b>Enter Tag:</b></label>
    <input type="text" placeholder="Your blog tags..." name="tag1" id="tag1"  value="<?php echo "$get_tag"; ?>" >

    <!--<div class="container mt-4 mb-4 ml-0 mr-0">
       <label for="tag"><b>Write Here:</b></label>
      <div class="row ">
        <div class="col-lg-12 ">
      
          <div class="form-group">
             <textarea id="editor" name="editor"></textarea>
          </div>
      <!--<button type="submit" class="btn btn-primary">Submit</button>-
        </div>
    </div>
  </div>-->

  <br>
   <div class="container mt-4 mb-4 ml-0 mr-0">
      <div class="row ">
         <label for="" style="text-align: left;"><b>Write here:</b></label>
        <div class="col-lg-12 ">
     
          <div class="form-group" >
             <textarea id="editor" name="editor"style="width: 100%;" ><?php echo "$get_content1"; ?></textarea>
          </div>
      <!--<button type="submit" class="btn btn-primary">Submit</button>-->
        </div>
    </div> 
  </div>
  <br>
  <label class="form-label" for="stat"><b>Choose Status</b></label>
<select class="col-6 btn btn-light dropdown-toggle" aria-label="Default select example" value="<?php echo "$get_status"; ?>" name="bstatus1" id="bstatus1">
     
  <option >Publish</option>
  <option >Draft</option>
  
</select><br><br>

<label class="form-label" for="customFile"><b>Choose Image</b></label>
<input type="file" class="form-control col-6 " accept="image/*"  value="<?php echo "$get_image;"?>" name="imagefile" id="imagefile"  onchange="loadFile(event)"/>
 <img  id="output"  alt="your image"  height="200" width="200" />

<br>
<br>

<div class="col-12 ">
    <input type="submit" class="registerbtn col-12 btn btn-success"value="Update Your Blog" name="update">
  </div>
 
</form>


</body>
</html>


<?php


   ob_start();
   session_start();
   



error_reporting(0);
$get_id=$_GET['id'];
$get_title=$_GET['title'];
$get_content1=$_GET['content'];
$get_tag=$_GET['tag'];
$get_cat=$_GET['cat'];
$get_status=$_GET['stat'];
//$get_image=$_GET['img1']
   

include_once '../conn.php';


if(isset($_GET['update']))
{  
	$id=$_GET['id'];
	$title=$_GET['btitle'];
	$cat=$_GET['category'];
	$tag=$_GET['tag'];
	$edit=$_GET['editor'];
	$stat=$_GET['bstatus'];
	//$file1=addslashes(file_get_contents($_FILES["imagefile"]["tmp_name"]));
	$user=$_SESSION['login_user'];
	  
	   $sql = "update blog_records set btitle='$title',bcategory='$cat',btag='$tag',bcontent='$edit',bstatus='$stat' where bid='$id'";

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
     
  

<form action="" method="get"  name="blog_form" style="margin-top: 5%;" enctype="multipart/form-data" >
  <div class="col-8 container">
    <h1>Create your blog</h1>
  
    <hr>
<input type="hidden" name="id" id="id" value="<?php echo "$get_id"; ?>">
    <label for="title"><b>Enter Title:</b></label>
    <input type="text" placeholder="Your blog title..." value="<?php echo "$get_title"; ?>" name="btitle" id="btitle" >
<br><br>
    <label for="category"><b>Choose Category:</b></label>
    <select class="col-6 btn btn-light dropdown-toggle" aria-label="Default select example" value="<?php echo "$get_cat"; ?>"  name="category" id="category">
     
  <option selected value="<?php echo "$get_cat"; ?>" >None</option>
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
    <input type="text" placeholder="Your blog tags..." value="<?php echo "$get_tag"; ?>" name="tag" id="tag" >


    <div class="container mt-4 mb-4 ml-0 mr-0">
      <div class="row ">
      	 <label for="" style="text-align: left;"><b>Write here:</b></label>
        <div class="col-lg-12 ">
     
          <div class="form-group">
             <textarea id="editor" value="<?php echo "$get_content1"; ?>" name="editor"></textarea>
          </div>
      <!--<button type="submit" class="btn btn-primary">Submit</button>-->
        </div>
    </div>
  </div>
  <label class="form-label" for="stat"><b>Choose Status<b></label>
<select class="col-6 btn btn-light dropdown-toggle" aria-label="Default select example" value="<?php echo "$get_status"; ?>" name="bstatus" id="bstatus">
     
  <option selected>Publish</option>
  <option value="Draft">Draft</option>
  
</select><br>

<label class="form-label" for="customFile">Choose Image</label>
<input type="file" class="form-control" value=<?php echo "$get_image;"?>name="imagefile" id="imagefile" />
<br>

<div class="col-12 ">
    <input type="submit" class="registerbtn col-12 btn btn-success" value= "Update Your Blog" name="update">
  </div>
 
</form>


</body>
</html>

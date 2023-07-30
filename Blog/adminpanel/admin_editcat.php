<?php

include_once('../conn.php'); // Using database connection file here

$id = $_GET['cid']; // get id through query string

$qry = mysqli_query($conn,"select * from blog_categories where cid='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['addcat'])) // when click on Update button
{
    $cat = $_POST['category'];
    
	
    $edit = mysqli_query($conn,"update blog_categories set CName='$cat' where cid='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:admin_categories.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>
<form action="" method="post"  name="register_form" style="margin-top: 3%; margin-bottom: 3%;" >
  <div class="col-6 container1">
    <h1>Add Category</h1>
    
    <label for="email"><b>Category:</b></label>
    <input type="text"  placeholder="Enter category" name="category" id="category" >

    <input type="submit" class="registerbtn"  name="addcat">
  </div>
</form>
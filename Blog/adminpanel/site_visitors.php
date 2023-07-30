<title>Site Visitors</title>
 <!--<a href='https://addmap.net/'>Counter</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=dedad2c7d85916101c75f392c3e6dbee3423f6d9'></script>
<script type="text/javascript" src="https://freevisitorcounters.com/en/home/counter/836626/t/4"></script>-->



<?php
 include_once '../conn.php';
error_reporting(0);
 $find_counts="select *from user_counter";

 $sql = 'SELECT * FROM user_counter';
 $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) 
    {
    
 	$current_count=$row['counts'];
 	$new_count=$current_count+1;
 	//echo $new_count;
 	
 	}
}
$sql1 = "update user_counter set counts=$new_count";
			 //echo $sql;
	$result1=mysqli_query($conn, $sql1);
 	if (mysqli_num_rows($result1)>0) 
         {
	   			//header("Location:Login.php");
	   			echo $new_count;
	  		 } 
	  		 echo $new_count;
mysqli_close($conn);
?>
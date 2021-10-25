<?php
$db_server="localhost";
$db_uname="root";
$db_pass="";
$db_name="e-tourism";

$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
if($conn){
		//echo "Connected<br>";
		$query = "update admin set `id`='[NULL]',`name`='[SHARUP]',`username`='[PAUL1234]',`password`='[22445]' where id= '[1]'";
		if(!mysqli_query($conn,$query)){
			echo mysqli_error($conn);
			//echo mysqli_errno($conn);
		}
		else{
			//echo "update";
		}
	}
	
		
		
	
	
	
?>
<?php

	include("conn.php");
	include("function.php");
	$tree = explode(',',$_POST["jiahe"]); 
	for($index=0;$index<count($tree);$index++){ 
		
	$result = mysql_query("select * from user_profile where user_id='$tree[$index]'");
	$row=mysql_fetch_array($result);
	require("body.php");
	}


	
?>





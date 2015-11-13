<?php

	include("conn.php");
	include("function.php");
	if($_POST["jiahe"]!=''){
	$tree = explode(',',$_POST["jiahe"]); 
		for($index=0;$index<count($tree);$index++){ 
			
		$result = mysql_query("select * from user_profile where user_id='$tree[$index]'");
		$row=mysql_fetch_array($result);
		require("body.php");
		}
	}else{
	
		$result = mysql_query("select * from user_profile where user_id='$_GET[id]'");
		$row=mysql_fetch_array($result);
		require("body.php");
	}


	
?>





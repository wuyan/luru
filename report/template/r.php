<?php

	include("conn.php");
	include("function.php");
	$result_report = mysql_query("select * from report_position where report_id='$_GET[report_id]'");
	$row_report=mysql_fetch_array($result_report);
	if($_POST["jiahe"]!=''){
	$tree = explode(',',$_POST["jiahe"]); 
		for($index=0;$index<count($tree);$index++){ 
			
		$result = mysql_query("select * from user_profile where user_id='$tree[$index]'");
		$row=mysql_fetch_array($result);
		require("body.php");
		setcookie('user_id' , $tree[$index], time()+3600*9999);
		}
	}else{
		$result = mysql_query("select * from user_profile where user_id='$_GET[id]'");
		$row=mysql_fetch_array($result);
		require("body.php");
		setcookie('user_id' , $_GET[id], time()+3600*9999);
	}

?>





<?php

	include("conn.php");
	include("function.php");
	//attack(4);
	$result = mysql_query("select * from user_profile where user_id='$_GET[id]'");
	$row=mysql_fetch_array($result);


	require("body.php");
?>





<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php

	include("configure/conn.php");
	if($_POST['submit'] and $_POST['userpassword'] ==  $_POST['chkpassword'] and $_POST['username'] and $_POST['manager']){


	$sql="INSERT INTO user (user, password, manager, counterlog,authority_id) VALUES ('$_POST[username]','$_POST[userpassword]', '$_POST[manager]' ,0, '$_POST[authority]')";
	
	mysql_query($sql);
		
	echo "<script>window.location='username.php'</script>";

	}
	else{
	
		echo "<script>alert('密码不匹配')</script>";
	}


?>


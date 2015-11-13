  <meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

	include('configure/conn.php');
	if(isset($_POST['submit'])){
	

	$sql="INSERT INTO group_list (group_name) VALUES ('$_POST[group_name]')";

	mysql_query($sql);
	mysql_close($con);

	echo "<script>window.location='positionmanager.php'</script>";
	}


?>


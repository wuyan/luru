  <meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

	include('configure/conn.php');
	if(isset($_POST['submit'])){
	

	$sql="INSERT INTO report_list (report_name) VALUES ('$_POST[report_name]')";

	mysql_query($sql);
	mysql_close($con);

	echo "<script>window.location='report_manager.php'</script>";
	}


?>


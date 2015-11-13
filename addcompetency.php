  <meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

	include('configure/conn.php');
	if(isset($_POST['submit'])){

	$sql="INSERT INTO competency_list (`competency_name`,`describe`) VALUES ('$_POST[competency_name]','$_POST[describe]')";

	mysql_query($sql);
	mysql_close($con);

	echo "<script>window.location='competency.php'</script>";
	}


?>


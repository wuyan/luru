 <meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

	include('configure/conn.php');
	if(isset($_POST['submit'])){
	

	$sql="INSERT INTO position_list (position_name,project_id,display_name) VALUES ('$_POST[position_name]','$_POST[project_id]','$_POST[display_name]')";

	mysql_query($sql);
	mysql_close($con);

	echo "<script>window.location='positionmanager.php'</script>";
	}


?>


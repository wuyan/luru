  <meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

	include('configure/conn.php');
	if(isset($_POST['submit'])){

	$sql="INSERT INTO authority_list (`authority_name`) VALUES ('$_POST[authority_name]')";

	mysql_query($sql);
	mysql_close($con);

	echo "<script>window.location='authority.php'</script>";
	}


?>


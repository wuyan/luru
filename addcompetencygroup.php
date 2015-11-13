 <meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php
    include('configure/conn.php');
	if(isset($_POST['submit'])){
	

	$sql="INSERT INTO competency_group (competency_group) VALUES ('$_POST[competencygroup]')";

	mysql_query($sql);
	mysql_close($con);

	echo "<script>window.location='competencygroup.php'</script>";
	}


?>


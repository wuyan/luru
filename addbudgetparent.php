 <meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php
    include('configure/conn.php');
	if(isset($_POST['submit'])){
	

	$sql="INSERT INTO user_profile_list (user_profile_name) VALUES ('$_POST[user_profile_name]')";

	mysql_query($sql);
	mysql_close($con);

	echo "<script>window.location='userprofilemanager.php'</script>";
	}


?>


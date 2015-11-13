  <meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

	include('configure/conn.php');
	if(isset($_POST['submit'])){
	
	//向数据库中写入项目名称
	$sql="INSERT INTO project_list (project_name,group_id) VALUES ('$_POST[project_name]','$_POST[group_id]')";
	mysql_query($sql);
	echo  mysql_insert_id();
	$project_id=mysql_insert_id();
	echo $project_id;

	//向项目中写入姓名字段
	$sql="INSERT INTO project_profile (`project_id`,`user_profile_id`) VALUES ('$project_id','1')";
	mysql_query($sql);

	//向项目中写入岗位字段
	$sql="INSERT INTO project_profile (`project_id`,`user_profile_id`) VALUES ('$project_id','2')";
	mysql_query($sql);

	//向项目中写入测评时间字段
	$sql="INSERT INTO project_profile (`project_id`,`user_profile_id`) VALUES ('$project_id','3')";
	mysql_query($sql);

	//向项目中写入测评人字段
	$sql="INSERT INTO project_profile (`project_id`,`user_profile_id`) VALUES ('$project_id','4')";
	mysql_query($sql);
	
	echo "<script>window.location='positionmanager.php'</script>";
	}


?>


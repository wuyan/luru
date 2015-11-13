  <meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

	include('configure/conn.php');
	if(isset($_POST['submit'])){
	
	$sql_position=mysql_query("INSERT INTO report_position (report_id,position_id) VALUES ('$_POST[report_id]','$_POST[position_id]')");

	//搜索岗位中所属子胜任力名称
	$sql_sub_d = "select * from position_sub_competency where position_id=$_POST[position_id]";
	$result_sub_d =mysql_query($sql_sub_d);
	while($row_sub_d=mysql_fetch_array($result_sub_d)){
		//搜索数据库中是否存在相同子胜任力ID 

		$sql_sub_n = "select * from report_sub_competency where sub_competency_id='$row_sub_d[sub_competency_id]' and position_id='$_POST[position_id]'";
		$result_sub_n =mysql_query($sql_sub_n);	


		if (mysql_num_rows($result_sub_n)==0)  
			echo $row_sub_d[sub_competency_id];
			echo "</br>";
			$sql="INSERT INTO report_sub_competency (`report_id`,`sub_competency_id`,`position_id`) VALUES ('$_POST[report_id]','$row_sub_d[sub_competency_id]','$_POST[position_id]')";
			mysql_query($sql);
		}
	echo "<script>window.location='report_manager.php'</script>";
	}


?>


<?php
	include('configure/conn.php');
	//删除现有胜任力及子胜任力配置
	$delete="delete from position_competency where position_id=$_POST[position_id]";
	mysql_query($delete);
	$delete="delete from position_sub_competency where position_id=$_POST[position_id]";
	mysql_query($delete);

	//将胜任力模型中的胜任力配置应用到该岗位下
	$sql = "select * from position_group_competency where group_id=$_POST[group_id]";
	$result =mysql_query($sql);
	while ($row=mysql_fetch_array($result)){

		$sql_apply="INSERT INTO position_competency (competency_id,position_id,cixun,display) VALUES ('$row[competency_id]','$_POST[position_id]','$row[cixun]','$row[display]')";
		mysql_query($sql_apply);
								
	}

	//将胜任力模型中的子胜任力配置应用到该岗位下
	$sql = "select * from group_sub_competency where group_id=$_POST[group_id]";
	$result =mysql_query($sql);
	while ($row=mysql_fetch_array($result)){

		$sql="INSERT INTO position_sub_competency (sub_competency_id,competency_id,position_id,cixun) VALUES ('$row[sub_competency_id]','$row[competency_id]','$_POST[position_id]','$row[cixun]')";
		mysql_query($sql);
								
	}

	//将胜任力模型中的子胜任力配置模型应用到该岗位下
	$sql = "select * from competency_group where group_id=$_POST[group_id]";
	$result =mysql_query($sql);
	while ($row=mysql_fetch_array($result)){

		$sql="update position_list set `subcompetencyidall`='$row[subcompetencyidall]'  where position_id='$_POST[position_id]'";
		mysql_query($sql);
								
	}
	echo "<script>alert ('应用成功');</script>";


?>
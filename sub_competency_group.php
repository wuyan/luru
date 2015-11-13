<?php
	include('configure/conn.php');
	$tree = explode(',',$_POST["tree"]); 
	
	//删除系统已存子胜任力
	$sql_sub_d = "delete from group_sub_competency where group_id=$_POST[group_id]";
	$result_sub_d =mysql_query($sql_sub_d);

	$sub_competency_id_all="";
	//增加系统勾选胜任力
	for($index=0;$index<count($tree);$index++){ 
			
			//把获取到的子胜作力名称称去除“序号：”
			$sub_competency_name=substr($tree[$index],0,strlen($str)-9);

			//把获取到的子胜作力名称转化成子胜作力名称ID
			$sql_sub_n = "select * from sub_competency_list where sub_competency_name='$sub_competency_name'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);

			//获取序号的值 
			$weight_name="weight".$row_sub_n[sub_competency_id];
			$weight=$_POST[$weight_name];


			$sql="INSERT INTO group_sub_competency (sub_competency_id,competency_id,group_id,cixun) VALUES ('$row_sub_n[sub_competency_id]','$row_sub_n[competency_id]','$_POST[group_id]','$weight')";

			mysql_query($sql);

			//获取所有子胜任力ID
			$sub_competency_id_all=$row_sub_n[sub_competency_id].$sub_competency_id_all;
	} 
	
	$sub_competency_id_all="";
	$sql_competency    = "select * from position_group_competency where group_id='$_POST[group_id]'  order by cixun";
	$result_competency = mysql_query($sql_competency);
	while ($row_competency = mysql_fetch_array($result_competency)) {

		  //向数组添加子胜任力
			$sql    = "select * from group_sub_competency where group_id='$_POST[group_id]' and competency_id=$row_competency[competency_id] order by cixun";
			$result = mysql_query($sql);
			while ($row = mysql_fetch_array($result)) {
				//获取所有子胜任力ID
				$sub_competency_id_all=$sub_competency_id_all.$row[sub_competency_id];
			}
	}

	$sql1="update competency_group set `subcompetencyidall`='$sub_competency_id_all' where group_id=$_POST[group_id]";
	mysql_query($sql1);
			
	echo "<script>alert ('修改成功');</script>";

?>
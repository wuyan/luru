<?php
	include('configure/conn.php');
		
	$delete="delete from position_group_competency where group_id=$_POST[group_id]";
	mysql_query($delete);

	$tree = explode(',',$_POST["tree"]); 
	for($index=0;$index<count($tree);$index++){ 
			
			//把获取到的子胜作力名称称去除“序号：”
			$sub_competency_name=substr($tree[$index],0,strlen($str)-24);
			

			//把获取到的子胜作力名称转化成子胜作力名称ID
			$sql_sub_n = "select * from competency_list where competency_name='$sub_competency_name'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);


			//判断是否存在相同的用户字段
			$sql_sub_i = "select * from position_group_competency where competency_id='$row_sub_n[competency_id]' and position_id=$_POST[position_id]";
			$result_sub_i =mysql_query($sql_sub_i);
			//获取序号的值 
			$weight_name="weight".$row_sub_n[competency_id];
			$weight=$_POST[$weight_name];

			$cixun_name="cixun".$row_sub_n[competency_id];
			$cixun=$_POST[$cixun_name];
			
			//设置是否显示
			$display="display".$row_sub_n[competency_id];
			$setdisplay=$_POST[$display];

			$sql="INSERT INTO position_group_competency (competency_id,group_id,weight,cixun,display) VALUES ('$row_sub_n[competency_id]','$_POST[group_id]','$weight','$cixun','$setdisplay')";
			mysql_query($sql);

	} 
	echo "<script>alert ('修改成功');</script>";


?>
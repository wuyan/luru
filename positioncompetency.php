<?php
	include('configure/conn.php');
	$tree = explode(',',$_POST["tree"]); 
	//把显示设为False

	$sql3="update position_competency set `display`='false' where position_id=$_POST[position_id]";
	mysql_query($sql3);

	for($index=0;$index<count($tree);$index++){ 
			
			//把获取到的子胜作力名称称去除“序号：”
			$sub_competency_name=substr($tree[$index],0,strlen($str)-33);
		
			//把获取到的子胜作力名称转化成子胜作力名称ID
			$sql_sub_n = "select * from competency_list where competency_name='$sub_competency_name'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);

			//判断是否存在相同的用户字段
			$sql_sub_i = "select * from position_competency where competency_id='$row_sub_n[competency_id]' and position_id=$_POST[position_id]";
			$result_sub_i =mysql_query($sql_sub_i);
			//获取序号的值 
			$weight_name="weight".$row_sub_n[competency_id];
			$weight=$_POST[$weight_name];

			$cixun_name="cixun".$row_sub_n[competency_id];
			$cixun=$_POST[$cixun_name];
			
			//设置是否显示
			$display="display".$row_sub_n[competency_id];
			$setdisplay=$_POST[$display];



			if (!mysql_num_rows($result_sub_i))  
			{  

				$sql="INSERT INTO position_competency (competency_id,position_id,weight,cixun,display) VALUES ('$row_sub_n[competency_id]','$_POST[position_id]','$weight','$cixun','$setdisplay')";

				mysql_query($sql);
			 }else{
					//更新权重
					$sql1="update position_competency set `weight`='$weight' where `competency_id`='$row_sub_n[competency_id]' and position_id=$_POST[position_id]";
					mysql_query($sql1);
				 
					//更新序号
					$sql2="update position_competency set `cixun`='$cixun' where `competency_id`='$row_sub_n[competency_id]' and position_id=$_POST[position_id]";
					mysql_query($sql2);
				 

					//更新显示设置
					$sql3="update position_competency set `display`='$setdisplay' where `competency_id`='$row_sub_n[competency_id]' and position_id=$_POST[position_id]";
					mysql_query($sql3);
				 
			 }
	} 
	//搜索岗位中已存在的子胜任力名称
	$sql_sub_d = "select * from position_competency where position_id=$_POST[position_id]";
	$result_sub_d =mysql_query($sql_sub_d);
	while($row_sub_d=mysql_fetch_array($result_sub_d)){
			//将存在的子胜任力ID转成子胜任力名称
			$sql_sub_n = "select * from competency_list where competency_id='$row_sub_d[competency_id]'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);
			
		
			//把获取到的用户名称添加“序号：”
			$sub_competency_name=$row_sub_n[competency_name]."权重：序号：是否显示：";

			if (!in_array($sub_competency_name,$tree)){
				$sql="delete from position_competency where competency_id=$row_sub_n[competency_id]";
				mysql_query($sql);
			}
			
		}
		
	echo "<script>alert ('修改成功');</script>";


?>
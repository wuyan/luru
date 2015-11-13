<?php
	include('configure/conn.php');

	//把字符串转化成数组
	$tree = explode(',',$_POST["tree"]); 
	echo $_POST['search'];
	for($index=0;$index<count($tree);$index++){ 


			//把获取到的用户名称去除“序号：”
			$user_profile_name=substr($tree[$index],0,strlen($str)-33);
			//把获取到的用户字段名称转化成用户字段ID
			$sql_sub_n = "select * from user_profile_list where user_profile_name='$user_profile_name'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);
			
	
			//判断是否存在相同的用户字段
			$sql_sub_i = "select * from project_profile where user_profile_id='$row_sub_n[user_profile_id]' and project_id=$_POST[project_id]";
			$result_sub_i =mysql_query($sql_sub_i);
			//获取序号的值 
			$order_name="order".$row_sub_n[user_profile_id];
			$order=$_POST[$order_name];
			//如果不存在的话插入新的用户字段
			if (!mysql_num_rows($result_sub_i))  
			{  
				
				
				$sql="INSERT INTO project_profile (user_profile_id,project_id,cixun) VALUES ('$row_sub_n[user_profile_id]','$_POST[project_id]','$order')";
				
				mysql_query($sql);



			 }else{
				 //如果序号不为0
				 if($order!=0){
					

					$sql1="update project_profile set `cixun`='$order' where user_profile_id=$row_sub_n[user_profile_id] and `project_id`='$_POST[project_id]'";
					mysql_query($sql1);

				 }
			 }

	} 
	
	//更新搜索项
	$sql_search="update project_list set `search_id`='$_POST[search]' where `project_id`='$_POST[project_id]'";
	mysql_query($sql_search);
	//搜索项目中已存在的用户字段
	$sql_sub_d = "select * from project_profile where project_id=$_POST[project_id]";
	$result_sub_d =mysql_query($sql_sub_d);
	while($row_sub_d=mysql_fetch_array($result_sub_d)){
			//将存在的用户字段ID转成用户字段名称
			$sql_sub_n = "select * from user_profile_list where user_profile_id='$row_sub_d[user_profile_id]'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);
			//把获取到的用户名称添加“序号：”
			$user_profile_name=$row_sub_n[user_profile_name]."序号：请选择搜索唯一项";
			//判断用户字段名称是否在数组中
			if (!in_array($user_profile_name,$tree)){

				$sql="delete from project_profile where user_profile_id=$row_sub_d[user_profile_id]";
				mysql_query($sql);
			}
			
		}
		echo "<script>
			alert ('修改成功');
		</script>";


/*
	for($index=0;$index<count($tree);$index++){ 

			$sql_sub_n = "select * from sub_competency_list where sub_competency_name='$tree[$index]'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);

			$sql_sub_i = "select * from report_list where sub_competency_id='$row_sub_n[sub_competency_id]' and position_id=$_POST[position_id]";
			$result_sub_i =mysql_query($sql_sub_i);
			if (!mysql_num_rows($result_sub_i))  
			{  

				
				$sql="INSERT INTO report_list (sub_competency_id,competency_id,position_id) VALUES ('$row_sub_n[sub_competency_id]','$row_sub_n[competency_id]','$_POST[position_id]')";

				mysql_query($sql);
			 }  
	} 

	$sql_sub_d = "select * from report_list where position_id=$_POST[position_id]";
	$result_sub_d =mysql_query($sql_sub_d);
	while($row_sub_d=mysql_fetch_array($result_sub_d)){
			$sql_sub_n = "select * from sub_competency_list where sub_competency_id='$row_sub_d[sub_competency_id]'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);

			if (!in_array($row_sub_n[sub_competency_name],$tree)){


				$sql_sub_z = "select * from sub_competency_list where sub_competency_name='$row_sub_n[sub_competency_name]'";
				$result_sub_z =mysql_query($sql_sub_z);
				$row_sub_z=mysql_fetch_array($result_sub_z);

				$sql="delete from report_list where sub_competency_id=$row_sub_z[sub_competency_id]";
				mysql_query($sql);
			}
			
			}
*/

?>
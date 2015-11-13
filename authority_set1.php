<?php
	include('configure/conn.php');

	$tree = explode(',',$_POST["tree"]); 
	
	//删除系统已存子胜任力
	$sql_sub_d = "delete from user_authority where user_id=$_POST[user_id]";
	$result_sub_d =mysql_query($sql_sub_d);


	$sql_sub_d = "delete from user_authority_mainpage where user_id=$_POST[user_id]";
	$result_sub_d =mysql_query($sql_sub_d);

	$sub_competency_id_all="";
	//增加系统勾选胜任力
	for($index=0;$index<count($tree);$index++){ 
			
			$sql_sub_n = "select * from page_list where page_name='$tree[$index]'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);
			if($row_sub_n[page_id]!=0){
				$sql="INSERT INTO user_authority (user_id,page_id,mainpage_id) VALUES ('$_POST[user_id]','$row_sub_n[page_id]','$row_sub_n[mainpage_id]')";
				mysql_query($sql);

			}
	} 
	

	for($index=0;$index<count($tree);$index++){ 
			
			$sql_sub_n = "select * from mainpage_list where mainpage_name='$tree[$index]'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);
			if($row_sub_n[mainpage_id]!=0){
				$sql="INSERT INTO user_authority_mainpage (user_id,mainpage_id) VALUES ('$_POST[user_id]','$row_sub_n[mainpage_id]')";
				mysql_query($sql);

			}
	} 

		
	echo "<script>alert ('修改成功');window.location='authority_set.php?id=".$_POST[user_id]."';</script>";

?>
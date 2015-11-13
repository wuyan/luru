<?php
	include('configure/conn.php');
	$tree = explode(',',$_POST["tree"]); 
	
	//删除系统已存关联项
	$sql_sub_d = "delete from report_attach where position_id=$_POST[position_id] and page_id=$_POST[page_id]";
	$result_sub_d =mysql_query($sql_sub_d);

	$sub_competency_id_all="";
	//使子胜任力与页面关联
	for($index=0;$index<count($tree);$index++){ 
	
			$sub_competency_name=$tree[$index];

			//把获取到的子胜作力名称转化成子胜作力名称ID
			$sql_sub_n = "select * from sub_competency_list where sub_competency_name='$sub_competency_name'";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);

			//获取所有子胜任力ID
			$sub_competency_id_all=$row_sub_n[sub_competency_id].','. $sub_competency_id_all;
	} 
$sub_competency_id_all=rtrim($sub_competency_id_all,',');
//入数据库中插入页面保存数据 
$sql="INSERT INTO report_attach (position_id,page_id,subcompetency_id,title) VALUES ('$_POST[position_id]','$_POST[page_id]','$sub_competency_id_all','$_POST[page_name]')";
mysql_query($sql);
$page_id=$_POST[page_id]+1;
echo "<script>window.location='report_attach.php?position_id=".$_POST[position_id]."&page_id=".$page_id."';</script>";
?>
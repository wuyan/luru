<?php
ini_set("display_errors", "Off");
include('configure/conn.php');

$query = "SELECT * FROM log where log_id=$_GET[log_id]";
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
$row = mysql_fetch_array($result, MYSQL_ASSOC);
if($row[type]==1){

	$xuhao = 1;
    $sql_excel     = mysql_query("select *  from user_profile where excel_id=$row[excel_id] group by position_id");
	while ($row_excel = mysql_fetch_array($sql_excel, MYSQL_ASSOC)) {
					//通过岗位ID得到项目ID
			$sql_position = "select * from position_list where position_id='$row_excel[position_id]'";
			$result_position = mysql_query($sql_position);
			$row_position = mysql_fetch_array($result_position);


			$sql_project = "select * from project_list where project_id='$row_position[project_id]'";
			$result_project = mysql_query($sql_project);
			$row_project = mysql_fetch_array($result_project);


			$sql_before = "select count(user_id) as after from user_profile where position_id='$row_excel[position_id]' and excel_id='$row[excel_id]'";
			$result_before = mysql_query($sql_before);
			$row_before = mysql_fetch_array($result_before);

			$sql_after = "select count(user_id) as after from user_profile where  position_id='$row_excel[position_id]'";
			$result_after = mysql_query($sql_after);
			$row_after = mysql_fetch_array($result_after);

			$before=$row_after[after]-$row_before[after];

			
			$employees[] = array(
					'Xuhao' => $xuhao,
					'position'=> $row_position[position_name],
					'project'=> $row_project[project_name],
					'change_before'=>$before,
					'change_after'=>$row_after[after]
			);
			$xuhao++;
	}
}

if($row[type]==2){

	$xuhao = 1;
    $sql_excel     = mysql_query("select *  from user_profile where shenhe_log_id=$_GET[log_id] group by position_id");
	while ($row_excel = mysql_fetch_array($sql_excel, MYSQL_ASSOC)) {
			//通过岗位ID得到项目ID
			$sql_position = "select * from position_list where position_id='$row_excel[position_id]'";
			$result_position = mysql_query($sql_position);
			$row_position = mysql_fetch_array($result_position);

			$sql_project = "select * from project_list where project_id='$row_position[project_id]'";
			$result_project = mysql_query($sql_project);
			$row_project = mysql_fetch_array($result_project);


			$sql_before = "select count(user_id) as after from user_profile where position_id='$row_excel[position_id]' and shenhe_log_id=$_GET[log_id]";
			$result_before = mysql_query($sql_before);
			$row_before = mysql_fetch_array($result_before);

			$sql_after = "select count(user_id) as after from user_profile where  position_id='$row_excel[position_id]' and shenhe=1";
			$result_after = mysql_query($sql_after);
			$row_after = mysql_fetch_array($result_after);

			$before=$row_after[after]-$row_before[after];

			
			$employees[] = array(
					'Xuhao' => $xuhao,
					'position'=> $row_position[position_name],
					'project'=> $row_project[project_name],
					'change_before'=>$before,
					'change_after'=>$row_after[after]
			);
			$xuhao++;
	}
}
if($row[type]==4){

	$xuhao = 1;
    $sql_excel     = mysql_query("select *  from user_profile_copy where delete_log_id=$_GET[log_id] group by position_id");
	while ($row_excel = mysql_fetch_array($sql_excel, MYSQL_ASSOC)) {
			//通过岗位ID得到项目ID
			$sql_position = "select * from position_list where position_id='$row_excel[position_id]'";
			$result_position = mysql_query($sql_position);
			$row_position = mysql_fetch_array($result_position);

			$sql_project = "select * from project_list where project_id='$row_position[project_id]'";
			$result_project = mysql_query($sql_project);
			$row_project = mysql_fetch_array($result_project);


			$sql_before = "select count(user_id) as after from user_profile_copy where position_id='$row_excel[position_id]' and delete_log_id=$_GET[log_id]";
			$result_before = mysql_query($sql_before);
			$row_before = mysql_fetch_array($result_before);

			$sql_after = "select count(user_id) as after from user_profile where  position_id='$row_excel[position_id]'";
			$result_after = mysql_query($sql_after);
			$row_after = mysql_fetch_array($result_after);

			$before=$row_after[after]+$row_before[after];

			
			$employees[] = array(
					'Xuhao' => $xuhao,
					'position'=> $row_position[position_name],
					'project'=> $row_project[project_name],
					'change_before'=>$before,
					'change_after'=>$row_after[after]
			);
			$xuhao++;
	}
}

echo json_encode($employees);
?>
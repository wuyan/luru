<?php
ini_set("display_errors", "Off");
include('configure/conn.php');
$query = "SELECT * FROM log order by log_id desc";
$xuhao = 1;
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    
	//获取用户名
    $sql_name     = mysql_query("select *  from user where id=$row[user_id]");
    $row_name = mysql_fetch_array($sql_name);
	
	//获取操作类型
	$sql_type    = mysql_query("select *  from log_type where type_id=$row[type]");
    $row_type = mysql_fetch_array($sql_type);
    
    
	$sql_project    = mysql_query("select *  from project_list where project_id=$row[project_id]");
    $row_project = mysql_fetch_array($sql_project);

	$sql_position    = mysql_query("select *  from position_list where position_id=$row[position_id]");
    $row_position = mysql_fetch_array($sql_position);

	$sql_user    = mysql_query("select * from user_profile where user_id=$row[user]");
    $row_user = mysql_fetch_array($sql_user);

	$sql_sub_competency    = mysql_query("select * from sub_competency_list where sub_competency_id=$row[competency_id]");
    $row_sub_competency  = mysql_fetch_array($sql_sub_competency );
	if($row['set_id']==0){
			$restore="<a href='restore.php?log_id=".$row['log_id']."' target='_blank'>恢复</a>";
	}else{
			$restore="已恢复";
	}
	if($row_position[position_id]==''){
			$position_name="<a href='log_position.php?log_id=".$row['log_id']."'  rel='lytebox[vacation]' title='网址' data-lyte-options='afterEnd:myAfterEnd  width:650px; height:800px;'>查看详细信息</a>";
	}else{
			$position_name=$row_position[position_name];
	}
    
    $employees[] = array(
        'Xuhao' => $xuhao,
        'user_name' => $row_name[manager],
        'content' =>  $row[content],
		'operation_time' => $row[operation_time],
		'type'=> $row_type[type_name],
		'project'=> $row_project[project_name],
		'position'=> $position_name,
		'user' => $row_user[name],
		'sub_competency'=>$row_sub_competency[sub_competency_name],
		'change_before'=>$row[change_before],
		'change_after'=>$row[change_after],
		'restore'=>$restore
    );
    $xuhao++;
}
echo json_encode($employees);
?>
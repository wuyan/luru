<?php

include ('configure/conn.php');
//通过岗位ID得到项目ID
$sql_position = "select project_id from position_list where position_id='$_GET[position_id]'";
$result_position = mysql_query($sql_position);
$row_position = mysql_fetch_array($result_position);
//拼接MYSQL语句读取用户基本信息
$mysql_init = "select ";
$sql = "select * from project_profile where project_id='1' order by cixun";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    $sql_name = "select * from user_profile_list where user_profile_id=$row[user_profile_id]";
    $result_name = mysql_query($sql_name);
    $row_name = mysql_fetch_array($result_name);
    $mysql = 'max(if(user_basic.user_info_id=' . $row[user_profile_id] . ',user_basic.user_info_value,null)) ' . $row_name[user_profile_name] . ',';
    $mysql_init = $mysql_init . $mysql;
}
$i = 0;
$mysql_init = $mysql_init . "user_profile.user_id from user_basic,user_profile where user_profile.position_id=$_GET[position_id] and user_profile.user_id=user_basic.user_id and user_profile.user_id=$_GET[user_id] group by user_id ";
$result_name = mysql_query($mysql_init);
while ($row_name = mysql_fetch_array($result_name)) {
	//通过项目ID获取到用户字段信息
	$sql_profile     = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
	$result_profile  = mysql_query($sql_profile);
	while ($row_profile = mysql_fetch_array($result_profile)) {
    $sql_name1          = "select * from user_profile_list where user_profile_id=$row_profile[user_profile_id]";
    $result_name1       = mysql_query($sql_name1);
    $row_name1          = mysql_fetch_array($result_name1);
    $user_profile_name = $row_name1['user_profile_name'];

	if($row_profile[user_profile_id]==2){
		$sql_position_name = "select * from position_list where position_id='$row_name[$user_profile_name]'";
		$result_position_name = mysql_query($sql_position_name);	
		$row_posititon_name= mysql_fetch_array($result_position_name);
        $customers[$i][$user_profile_name] = $row_posititon_name['position_name'];
	}else{

    $customers[$i][$user_profile_name]=$row_name[$user_profile_name];
	}
	}
    $i++;
}
$mysql_init2 = "select ";
$sql_competency = "select * from position_competency where position_id='$_GET[position_id]'  order by cixun";
$result_competency = mysql_query($sql_competency);
while ($row_competency = mysql_fetch_array($result_competency)) {
    $sql_name = "select * from competency_list where competency_id=$row_competency[competency_id]";
    $result_name = mysql_query($sql_name);
    $row_name = mysql_fetch_array($result_name);
    $mysql2 = 'max(if(score_competency.competency_id=' . $row_competency[competency_id] . ',score_competency.score,null)) \'' . $row_name[competency_name] . '\',';
    $mysql_init2 = $mysql_init2 . $mysql2;
}
$i = 0;
$mysql_init2 = $mysql_init2 . "user_profile.user_id from score_competency,user_profile where user_profile.position_id=$_GET[position_id] and user_profile.user_id=score_competency.user_id and user_profile.user_id=$_GET[user_id] group by user_id ";
$result_name = mysql_query($mysql_init2);
while ($row_name = mysql_fetch_array($result_name)) {
    //读取用户胜任力信息
    $sql_competency = "select * from position_competency where position_id='$_GET[position_id]'  order by cixun";
    $result_competency = mysql_query($sql_competency);
    while ($row_competency = mysql_fetch_array($result_competency)) {
        $sql_name1 = "select * from competency_list where competency_id=$row_competency[competency_id]";
        $result_name1 = mysql_query($sql_name1);
        $row_name1 = mysql_fetch_array($result_name1);
        $customers[$i][$row_name1[competency_name]] = round($row_name[$row_name1[competency_name]], 2);
    }
    $i++;
}
$mysql_init1 = "select ";
$sql_competency = "select * from position_sub_competency where position_id='$_GET[position_id]'  order by cixun";
$result_competency = mysql_query($sql_competency);
while ($row_competency = mysql_fetch_array($result_competency)) {
    $sql_name = "select * from sub_competency_list where sub_competency_id=$row_competency[sub_competency_id]";
    $result_name = mysql_query($sql_name);
    $row_name = mysql_fetch_array($result_name);
    $mysql1 = 'max(if(score.sub_competency_id=' . $row_competency[sub_competency_id] . ',score.score,null)) \'' . $row_name[sub_competency_name] . '\',';
    $mysql_init1 = $mysql_init1 . $mysql1;
}
$i = 0;
$mysql_init1 = $mysql_init1 . "user_profile.user_id from score,user_profile where user_profile.position_id=$_GET[position_id] and user_profile.user_id=score.user_id and user_profile.user_id=$_GET[user_id]  group by user_id ";
$result_name = mysql_query($mysql_init1);
while ($row_name = mysql_fetch_array($result_name)) {
    //读取用户胜任力信息
    $sql_competency = "select * from position_competency where position_id='$_GET[position_id]'  order by cixun";
    $result_competency = mysql_query($sql_competency);
    while ($row_competency = mysql_fetch_array($result_competency)) {
        //向数组添加子胜任力
        $sql_subcompetency = "select * from position_sub_competency where position_id='$_GET[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
        $result_subcompetency = mysql_query($sql_subcompetency);
        while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
            $sql_name1 = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
            $result_name1 = mysql_query($sql_name1);
            $row_name1 = mysql_fetch_array($result_name1);
            $customers[$i][$row_name1[sub_competency_name]] = round($row_name[$row_name1[sub_competency_name]], 2);
        }
    }
    $i++;
}
echo json_encode($customers);
?>


<?php

include('configure/conn.php');


//用户ID
$user_id = $_GET[id];

//通过用户ID得到岗位ID
$sql_get_position    = "select * from user_profile where user_id='$user_id'";
$result_get_position = mysql_query($sql_get_position);
$row_get_position    = mysql_fetch_array($result_get_position);


//通过岗位ID得到项目ID
$sql_position    = "select project_id from position_list where position_id='$row_get_position[position_id]'";
$result_position = mysql_query($sql_position);
$row_position    = mysql_fetch_array($result_position);

//通过项目ID得到搜索项
$sql_search    = "select search_id from project_list where project_id='$row_position[project_id]'";
$result_search = mysql_query($sql_search);
$row_search    = mysql_fetch_array($result_search);


$query = "SELECT * FROM user_basic where user_info_id='$row_search[search_id]' and user_id=$user_id";
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
$row = mysql_fetch_array($result);


$i           = 0;
$query_card  = "SELECT * FROM user_basic where user_info_id='$row_search[search_id]' and user_info_value='$row[user_info_value]'";
$result_card = mysql_query($query_card);
while ($row_card = mysql_fetch_array($result_card)) {
    $sql_shenhe="select * from user_profile where `user_id`='$row_card[user_id]'";
	$result_shenhe= mysql_query($sql_shenhe);
	$row_shenhe = mysql_fetch_array($result_shenhe);

    if ($row_card[user_id] != $user_id && $row_shenhe[shenhe]>0) {

				//通过项目ID获取到用户字段信息
				$sql_profile    = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
				$result_profile = mysql_query($sql_profile);
				while ($row_profile = mysql_fetch_array($result_profile)) {
					if ($row_profile[user_profile_id] == 2) {
						
						$sql_name    = "select * from user_profile_list where user_profile_id=$row_profile[user_profile_id]";
						$result_name = mysql_query($sql_name);
						$row_name    = mysql_fetch_array($result_name);
						
						$sql_value         = "select * from user_basic where user_id=$row_card[user_id] and  user_info_id=$row_profile[user_profile_id]";
						$result_value      = mysql_query($sql_value);
						$row_value         = mysql_fetch_array($result_value);
						$user_profile_name = $row_name['user_profile_name'];
						
						$sql_get_position                  = "select * from position_list where position_id='" . $row_value['user_info_value'] . "'";
						$result_get_position               = mysql_query($sql_get_position);
						$row_get_position                  = mysql_fetch_array($result_get_position);
						$customers[$i][$user_profile_name] = $row_get_position['position_name'];
					} else {
						
						$sql_name    = "select * from user_profile_list where user_profile_id=$row_profile[user_profile_id]";
						$result_name = mysql_query($sql_name);
						$row_name    = mysql_fetch_array($result_name);
						
						$sql_value         = "select * from user_basic where user_id=$row_card[user_id] and  user_info_id=$row_profile[user_profile_id]";
						$result_value      = mysql_query($sql_value);
						$row_value         = mysql_fetch_array($result_value);
						$user_profile_name = $row_name['user_profile_name'];
						
						$customers[$i][$user_profile_name] = $row_value['user_info_value'];
					}
				}
				
				$sql_competency    = "select * from position_competency where position_id='$row_get_position[position_id]'  order by cixun ";
				$result_competency = mysql_query($sql_competency);
				while ($row_competency = mysql_fetch_array($result_competency)) {
					$sql_competency_name                                  = "select * from competency_list where competency_id=$row_competency[competency_id]";
					$result_competency_name                               = mysql_query($sql_competency_name);
					$row_competency_name                                  = mysql_fetch_array($result_competency_name);
					//获取胜任力名称
					$sql_competency_score                                 = "select * from score_competency  where user_id=$user_id and competency_id=$row_competency[competency_id]";
					$result_competency_score                              = mysql_query($sql_competency_score);
					$row_competency_score                                 = mysql_fetch_array($result_competency_score);
					$customers[$i][$row_competency_name[competency_name]] = $row_competency_score['score'];
					
					//向数组添加子胜任力
					$sql_subcompetency    = "select * from position_sub_competency where position_id='$row_get_position[position_id]' and `competency_id`='$row_competency[competency_id]' order by cixun ";
					$result_subcompetency = mysql_query($sql_subcompetency);
					while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
						$sql_name    = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
						$result_name = mysql_query($sql_name);
						$row_name    = mysql_fetch_array($result_name);
						
						$sql_value    = "select * from score where user_id=$row_card[user_id] and  sub_competency_id=$row_subcompetency[sub_competency_id]";
						$result_value = mysql_query($sql_value);
						$row_value    = mysql_fetch_array($result_value);
						
						
						$customers[$i][$row_name[sub_competency_name]] = $row_value['score'];
					}
					
					
				}
        $i = $i + 1;
    
    
    }
}

echo json_encode($customers);



?>
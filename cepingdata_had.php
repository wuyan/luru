<?php
include ('configure/conn.php');

if (isset($_GET['update'])) {
    //通过用户ID得到岗位ID
    $sql_get_position = "select * from user_profile_ceping where user_id='" . mysql_real_escape_string($_GET['用户ID']) . "'";
    $result_get_position = mysql_query($sql_get_position);
    $row_get_position = mysql_fetch_array($result_get_position);
    //通过岗位ID得到项目ID
    $sql_position = "select * from position_list where position_id='$row_get_position[position_id]'";
    $result_position = mysql_query($sql_position);
    $row_position = mysql_fetch_array($result_position);
    //获取岗位下所属胜任力ID
    $sql_competency = "select * from position_competency where position_id='$row_get_position[position_id]'  order by cixun ";
    $result_competency = mysql_query($sql_competency);
    while ($row_competency = mysql_fetch_array($result_competency)) {
        if ($row_competency[weight] != 0) {
            //获取胜任力名称
            $sql_competency_name = "select * from competency_list where competency_id=$row_competency[competency_id]";
            $result_competency_name = mysql_query($sql_competency_name);
            $row_competency_name = mysql_fetch_array($result_competency_name);
            $competency_name = $row_competency_name[competency_name];
            //清空胜任力信息
            $sub_competency_score = 0;
            $sub_competency_total = 0;
            $sub_competency_averge = 0;
            $n = 0;
            //向数组添加子胜任力
            $sql_subcompetency = "select * from position_sub_competency where position_id='$row_get_position[position_id]' and competency_id=$row_competency[competency_id] order by cixun";
            $result_subcompetency = mysql_query($sql_subcompetency);
            while ($row_subcompetency = mysql_fetch_array($result_subcompetency)) {
                $sql_name = "select * from sub_competency_list where sub_competency_id=$row_subcompetency[sub_competency_id]";
                $result_name = mysql_query($sql_name);
                $row_name = mysql_fetch_array($result_name);
                $sub_competency_name = $_GET[$row_name[sub_competency_name]];
                $update_query = "update `score_ceping` set  `score`='" . mysql_real_escape_string($sub_competency_name) . "' WHERE `user_id`='" . mysql_real_escape_string($_GET['用户ID']) . "' and `sub_competency_id`='$row_name[sub_competency_id]'";
                $result = mysql_query($update_query) or die("SQL Error 1: " . mysql_error());
                //子胜任力分数
                $sub_competency_score = mysql_real_escape_string($sub_competency_name);
                //累加得到子胜胜力总数
                $sub_competency_total+= $sub_competency_score;
                //累加得到子胜任力个数
                $n++;
            }
            //得到胜胜力平均分
            $sub_competency_averge1 = $sub_competency_total / $n;
            $sub_competency_averge = round($sub_competency_averge1, 1);
            //总平均分等于胜任力平均分*权重
            $total_averge = $sub_competency_averge * $row_competency[weight];
            $total_averge1+= $total_averge;
            //更新胜任力平均分
            $update_query = "update `score_competency_ceping` set  `score`='" . $sub_competency_averge . "' WHERE `user_id`='" . mysql_real_escape_string($_GET['用户ID']) . "' and competency_id='$row_competency[competency_id]'";
            $result = mysql_query($update_query) or die("SQL Error 1: " . mysql_error());
            $i++;
        }
    }
    $total_averge2 = round($total_averge1, 1);
    //更新总平均分
    $update_query = mysql_query("update `score_competency_ceping` set  `score`='$total_averge2'  WHERE `user_id`='" . mysql_real_escape_string($_GET['用户ID']) . "' and `competency_id`='1'");
    //获取自我管理分数
    $sql_ziwo = "select * from score_competency_ceping where competency_id=6 and user_id='" . mysql_real_escape_string($_GET['用户ID']) . "'";
    $result_ziwo = mysql_query($sql_ziwo);
    $row_ziwo = mysql_fetch_array($result_ziwo);
    $ziwo = $row_ziwo[score];
    //如果总平均分大于等于5，测评结果为通过
    if ($total_averge2 >= 5 or ($total_averge2 >= 4.5 and $total_averge2<5 and $ziwo>=5)) {
        $update_query = mysql_query("update `user_basic_ceping` set  `user_info_value`='通过'  WHERE `user_id`='" . mysql_real_escape_string($_GET['用户ID']) . "' and `user_info_id`='5'");
    } elseif ($total_averge2 < 4.5 or ($total_averge2 >= 4.5 and $total_averge2<5 and $ziwo<5)) {
        $update_query = mysql_query("update `user_basic_ceping` set  `user_info_value`='待提升'  WHERE `user_id`='" . mysql_real_escape_string($_GET['用户ID']) . "' and `user_info_id`='5'");
    } 

    echo json_encode($update_query);
} else if ($_GET['delete'] == 'true') {
    $tree = explode(',', $_GET['id']);
    for ($index = 0; $index < count($tree); $index++) {
		$sql_get="select * from user_profile where user_id='$tree[$index]'";
		$result_get=mysql_query($sql_get);
		$row_get =mysql_fetch_array($result_get);

		$sql_cunzai="select count(*) as total from user_profile where name='$row_get[name]' and position_id='$row_get[position_id]' and ceping_date='$row_get[ceping_date]' and ceping_person='$row_get[ceping_person]' and shenhe=1";
		$result_cunzai=	mysql_query($sql_cunzai);
		$row_cunzai =mysql_fetch_array($result_cunzai);
		if($row_cunzai[total]>0){
			
		
			$name1=$row_get[name];
			$tishi=$name1.$tishi.',';
			//echo json_encode($tishi);
		}else{
			//echo json_encode("审核成功");
			 $result = mysql_query("update `user_profile` set  `shenhe`='1' where user_id=$tree[$index]");
		}
       
       
    }
	if($tishi!= null){
	 $tishi=$tishi."已审核";
	}else{
	 $tishi="审核成功";
	}
	
	echo json_encode($tishi);
	 
} else if ($_GET['add'] == 'true') {
    $tree = explode(',', $_GET['id']);
    for ($index = 0; $index < count($tree); $index++) {
        $result = mysql_query("delete from user_basic where user_id=$tree[$index]");
        $result = mysql_query("delete from user_profile where user_id=$tree[$index]");
        $result = mysql_query("delete from score where user_id=$tree[$index]");
        $result = mysql_query("delete from score_competency where user_id=$tree[$index]");
    }
    echo json_encode($result);
} else if ($_GET['delete'] == 'true') {
    $tree = explode(',', $_GET['id']);
    for ($index = 0; $index < count($tree); $index++) {
		$sql_get="select * from `user_profile_ceping` where user_id='$tree[$index]'";
		$result_get=mysql_query($sql_get);
		$row_get =mysql_fetch_array($result_get);

		$sql_cunzai="select count(*) as total from `user_profile_ceping` where name='$row_get[name]' and position_id='$row_get[position_id]' and ceping_date='$row_get[ceping_date]' and ceping_person='$row_get[ceping_person]' and shenhe=1";
		$result_cunzai=	mysql_query($sql_cunzai);
		$row_cunzai =mysql_fetch_array($result_cunzai);
		if($row_cunzai[total]>0){
			
		
			$name1=$row_get[name];
			$tishi=$name1.$tishi.',';
			//echo json_encode($tishi);
		}else{
			//echo json_encode("审核成功");
			 $result = mysql_query("update `user_profile` set  `shenhe`='1' where user_id=$tree[$index]");
		}
       
       
    }
	if($tishi!= null){
	 $tishi=$tishi."已审核";
	}else{
	 $tishi="审核成功";
	}
	
	echo json_encode($tishi);
	 
} else if ($_GET['add'] == 'true') {
    $tree = explode(',', $_GET['id']);
    for ($index = 0; $index < count($tree); $index++) {
        $result = mysql_query("delete from user_basic_ceping where user_id=$tree[$index]");
        $result = mysql_query("delete from `user_profile_ceping` where user_id=$tree[$index]");
        $result = mysql_query("delete from score where user_id=$tree[$index]");
        $result = mysql_query("delete from score_competency where user_id=$tree[$index]");
    }
    echo json_encode($result);
} else {
	//获取该用户登陆名称
	$ceping_person=$_COOKIE['manager'];

	//通过岗位ID得到项目ID
	$sql_position = "select project_id from position_list where position_id='$_GET[position_id]'";
	$result_position = mysql_query($sql_position);
	$row_position = mysql_fetch_array($result_position);
	//拼接MYSQL语句读取用户基本信息
	$mysql_init = "select ";
	$sql = "select * from project_profile where project_id='$row_position[project_id]' order by cixun";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)) {
		$sql_name = "select * from user_profile_list where user_profile_id=$row[user_profile_id]";
		$result_name = mysql_query($sql_name);
		$row_name = mysql_fetch_array($result_name);
		$mysql = 'max(if(user_basic_ceping.user_info_id=' . $row[user_profile_id] . ',user_basic_ceping.user_info_value,null)) ' . $row_name[user_profile_name] . ',';
		$mysql_init = $mysql_init . $mysql;
	}
    $i = 0;
    $mysql_init = $mysql_init . "user_profile_ceping.user_id from user_basic_ceping,user_profile_ceping where user_profile_ceping.position_id=$_GET[position_id]  and 
	user_profile_ceping.user_id=user_basic_ceping.user_id and user_profile_ceping.shenhe=1  and 
	user_profile_ceping.ceping_person='$ceping_person' group by user_id ";
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
			$customers[$i]['用户ID'] = $row_name['user_id'];		

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
        $mysql2 = 'max(if(score_competency_ceping.competency_id=' . $row_competency[competency_id] . ',score_competency_ceping.score,null)) \'' . $row_name[competency_name] . '\',';
        $mysql_init2 = $mysql_init2 . $mysql2;
    }
    $i = 0;
    $mysql_init2 = $mysql_init2 . "user_profile_ceping.user_id from score_competency_ceping,user_profile_ceping where user_profile_ceping.position_id=$_GET[position_id] and user_profile_ceping.user_id=score_competency_ceping.user_id and user_profile_ceping.shenhe=1 and 
	user_profile_ceping.ceping_person='$ceping_person' group by user_id ";
    $result_name = mysql_query($mysql_init2);
    while ($row_name = mysql_fetch_array($result_name)) {
        //读取用户胜任力信息
        $sql_competency = "select * from position_competency where position_id='$_GET[position_id]'  order by cixun";
        $result_competency = mysql_query($sql_competency);
        while ($row_competency = mysql_fetch_array($result_competency)) {
  
                $sql_name1 = "select * from competency_list where competency_id=$row_competency[competency_id]";
                $result_name1 = mysql_query($sql_name1);
                $row_name1 = mysql_fetch_array($result_name1);
                $customers[$i][$row_name1[competency_name]] = round($row_name[$row_name1[competency_name]],2);

           
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
        $mysql1 = 'max(if(score_ceping.sub_competency_id=' . $row_competency[sub_competency_id] . ',score_ceping.score,null)) \'' . $row_name[sub_competency_name] . '\',';
        $mysql_init1 = $mysql_init1 . $mysql1;
    }
    $i = 0;
    $mysql_init1 = $mysql_init1 . "user_profile_ceping.user_id from score_ceping,user_profile_ceping where user_profile_ceping.position_id=$_GET[position_id] and user_profile_ceping.user_id=score_ceping.user_id and user_profile_ceping.shenhe=1  and 
	user_profile_ceping.ceping_person='$ceping_person' group by user_id ";
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
                $customers[$i][$row_name1[sub_competency_name]] = round($row_name[$row_name1[sub_competency_name]],2);
            }
        }
        $i++;
    }


    echo json_encode($customers);
}
?>

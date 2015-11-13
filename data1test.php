<?php
include ('configure/conn.php');

if (isset($_GET['update'])) {
    //通过用户ID得到岗位ID
    $sql_get_position = "select * from user_profile where user_id='" . mysql_real_escape_string($_GET['用户ID']) . "'";
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
                $update_query = "update `score` set  `score`='" . mysql_real_escape_string($sub_competency_name) . "' WHERE `user_id`='" . mysql_real_escape_string($_GET['用户ID']) . "' and `sub_competency_id`='$row_name[sub_competency_id]'";
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
            $update_query = "update `score_competency` set  `score`='" . $sub_competency_averge . "' WHERE `user_id`='" . mysql_real_escape_string($_GET['用户ID']) . "' and competency_id='$row_competency[competency_id]'";
            $result = mysql_query($update_query) or die("SQL Error 1: " . mysql_error());
            $i++;
        }
    }
    $total_averge2 = round($total_averge1, 1);
    //更新总平均分
    $update_query = mysql_query("update `score_competency` set  `score`='$total_averge2'  WHERE `user_id`='" . mysql_real_escape_string($_GET['用户ID']) . "' and `competency_id`='1'");

	//获取该岗位下公式结果
	$sql_gongshi = "select * from formula where position_id='$row_get_position[position_id]' order by set_id";
    $result_gongshi = mysql_query($sql_gongshi);
    while($row_gongshi = mysql_fetch_array($result_gongshi)){
		//获取该岗位下公式定义
		$query = "SELECT * FROM gongshi where position_id=".$row_get_position[position_id]." and set_id=".$row_gongshi[set_id]." order by id asc";
		$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		
					$arr = explode(",",$row['xiang']);
					if($arr[0]=='u'){
						$parent_mysql=mysql_query("select * from user_basic where user_profile_id ='$arr[1]'　and `user_id`='" . mysql_real_escape_string($_GET['用户ID']) . "'");
						$row_parent=mysql_fetch_array($parent_mysql);
						$xiang=$row_parent[user_info_value];
					}
					if($arr[0]=='c'){
						$parent_mysql=mysql_query("select * from score_competency where competency_id ='$arr[1]' and `user_id`='" . mysql_real_escape_string($_GET['用户ID']) . "'");
						$row_parent=mysql_fetch_array($parent_mysql);
						$xiang=$row_parent[score];
					}
					if($arr[0]=='s'){
						$parent_mysql=mysql_query("select * from score where competency_id ='$arr[1]' and `user_id`='" . mysql_real_escape_string($_GET['用户ID']) . "'");
						$row_parent=mysql_fetch_array($parent_mysql);
						$xiang=$row_parent[score];
					}
					
					$gongshi1=$xiang.$row[operator].$row[value]." ".$row[character]." ";
					$gongshi=$gongshi.$gongshi1;
					
				
	
		}
		
		//执行公式内容
		$jiahe="if($gongshi){ mysql_query(\"update `user_basic` set  `user_info_value`='$row_gongshi[result]' where `user_id`='$_GET[用户ID]' and user_info_id='$row_gongshi[user_profile_id]'\" );}";
		echo $jiahe;
		eval($jiahe);
		$gongshi='';
		echo "</br>";

		
	}
	$sql_name = "select * from sub_competency_list where sub_competency_name='$_GET[datafield]'";
    $result_name = mysql_query($sql_name);
    $row_name = mysql_fetch_array($result_name);

	//更新系统日志
	$now=date('Y-m-d H:i',time());
	$sql_log = mysql_query("insert into `log` (`user_id`,`operation_time`,`type`,`project_id`,`position_id`,`user`,`competency_id`,`change_before`,`change_after`,`set_id`) values ('$_COOKIE[id]','$now','3','$row_position[project_id]','$row_position[position_id]','$_GET[用户ID]','$row_name[sub_competency_id]','$_GET[oldvalue]','$_GET[newvalue]','0')");

    echo json_encode("true");
} else if ($_GET['delete'] == 'true') {

	//获取log_id并将log_id+1
	$log_id="SELECT * FROM log ORDER BY log_id DESC LIMIT 1 ";
	$result_log=	mysql_query($log_id);
	$row_log =mysql_fetch_array($result_log);

	$log=$row_log[log_id]+1;

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
			 $result = mysql_query("update `user_profile` set  `shenhe`='1' ,shenhe_log_id='$log' where user_id=$tree[$index]");
		}
     
       
    }
	if($tishi!= null){
	 $tishi=$tishi."已审核";
	}else{

	//更新系统日志
	$now=date('Y-m-d H:i',time());
	$sql_log = mysql_query("insert into `log` (`user_id`,`operation_time`,`type`,`set_id`) values ('$_COOKIE[id]','$now','2','0')");
	 $tishi="审核成功";

	}
	
	echo json_encode($tishi);
} else if ($_GET['add'] == 'true') {

	//更新系统日志
	$now=date('Y-m-d H:i',time());
	$sql_log = mysql_query("insert into `log` (`user_id`,`operation_time`,`type`,`set_id`) values ('$_COOKIE[id]','$now','4','0')");
	$log_id  = mysql_insert_id();
    $tree = explode(',', $_GET['id']);
    for ($index = 0; $index < count($tree); $index++) {

		$sql_get="select * from user_profile where user_id='$tree[$index]'";
		$result_get=mysql_query($sql_get);
		$row_get =mysql_fetch_array($result_get);
		$sql_bak = mysql_query("insert into `user_profile_copy` (`position_id`,`name`,`ceping_person`,`ceping_date`,`shenhe_log_id`,`excel_id`,`shenhe`,`delete_log_id`) values ('$row_get[position_id]','$row_get[name]','$row_get[ceping_person]','$row_get[ceping_date]','$row_get[shenhe_log_id]','$row_get[excel_id]','$row_get[shenhe]','$log_id')");
		$bak_id   = mysql_insert_id();

		$sql_user_basic="select * from user_basic where user_id='$tree[$index]'";
		$result_user_basic=mysql_query($sql_user_basic);
		while($row_user_basic =mysql_fetch_array($result_user_basic)){
			$sql_bak = mysql_query("insert into `user_basic_copy` (`user_id`,`user_info_id`,`user_info_value`) values ('$bak_id','$row_user_basic[user_info_id]','$row_user_basic[user_info_value]')");
		}

		$sql_score_competency="select * from score_competency where user_id='$tree[$index]'";
		$result_score_competency=mysql_query($sql_score_competency);
		while($row_score_competency =mysql_fetch_array($result_score_competency)){
			$sql_bak = mysql_query("insert into `score_competency_copy` (`user_id`,`position_id`,`competency_id`,`score`) values ('$bak_id','$row_score_competency[position_id]','$row_score_competency[competency_id]','$row_score_competency[score]')");
		}

		$sql_score="select * from score where user_id='$tree[$index]'";
		$result_score=mysql_query($sql_score);
		while($row_score =mysql_fetch_array($result_score)){
			$sql_bak = mysql_query("insert into `score_copy` (`user_id`,`position_id`,`sub_competency_id`,`score`) values ('$bak_id','$row_score[position_id]','$row_score[sub_competency_id]','$row_score[score]')");
		}
		
        $result = mysql_query("delete from user_basic where user_id=$tree[$index]");
        $result = mysql_query("delete from user_profile where user_id=$tree[$index]");
        $result = mysql_query("delete from score where user_id=$tree[$index]");
        $result = mysql_query("delete from score_competency where user_id=$tree[$index]");
    }

    echo json_encode($result);
}
else {
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
		$mysql = 'max(if(user_basic.user_info_id=' . $row[user_profile_id] . ',user_basic.user_info_value,null)) ' . $row_name[user_profile_name] . ',';
		$mysql_init = $mysql_init . $mysql;
	}
    $i = 0;
    $mysql_init = $mysql_init . "user_profile.user_id from user_basic,user_profile where user_profile.position_id=$_GET[position_id] and user_profile.user_id=user_basic.user_id and user_profile.shenhe=0 group by user_id ";
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
        $mysql2 = 'max(if(score_competency.competency_id=' . $row_competency[competency_id] . ',score_competency.score,null)) \'' . $row_name[competency_name] . '\',';
        $mysql_init2 = $mysql_init2 . $mysql2;
    }
    $i = 0;
    $mysql_init2 = $mysql_init2 . "user_profile.user_id from score_competency,user_profile where user_profile.position_id=$_GET[position_id] and user_profile.user_id=score_competency.user_id and user_profile.shenhe=0 group by user_id ";
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
        $mysql1 = 'max(if(score.sub_competency_id=' . $row_competency[sub_competency_id] . ',score.score,null)) \'' . $row_name[sub_competency_name] . '\',';
        $mysql_init1 = $mysql_init1 . $mysql1;
    }
    $i = 0;
    $mysql_init1 = $mysql_init1 . "user_profile.user_id from score,user_profile where user_profile.position_id=$_GET[position_id] and user_profile.user_id=score.user_id and user_profile.shenhe=0  group by user_id ";
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

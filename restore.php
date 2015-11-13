<meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php
	include('configure/conn.php');
  	//获取操作类型
	$sql_log   = mysql_query("select *  from log where log_id=$_GET[log_id]");
    $row_log = mysql_fetch_array($sql_log);
	if($row_log[type]==1){
					$sql_cha ="select * from user_profile where `excel_id`='$row_log[excel_id]'  and shenhe=0";
					$result_cha = mysql_query($sql_cha);
					while ($row_cha = mysql_fetch_array($result_cha)) {
						$result = mysql_query("delete from user_basic where user_id=$row_cha[user_id]");
						$result = mysql_query("delete from user_profile where user_id=$row_cha[user_id]");
						$result = mysql_query("delete from score where user_id=$row_cha[user_id]");
						$result = mysql_query("delete from score_competency where user_id=$row_cha[user_id]");
					}
	}
	if($row_log[type]==2){
		$update_query = mysql_query("update `user_profile` set  `shenhe`='0'  WHERE `shenhe_log_id`='$_GET[log_id]'");
	}
	if($row_log[type]==3){
		$update_query = mysql_query("update `score` set  `score`='$row_log[change_before]'  WHERE `user_id`='$row_log[user]' and `sub_competency_id`='$row_log[competency_id]'");
		
	}
	if($row_log[type]==4){
		$sql_get="select * from user_profile_copy where delete_log_id='$_GET[log_id]'";
		$result_get=mysql_query($sql_get);
		while($row_get =mysql_fetch_array($result_get)){
			$sql_bak = mysql_query("insert into `user_profile` (`position_id`,`name`,`ceping_person`,`ceping_date`,`shenhe_log_id`,`excel_id`,`shenhe`) values ('$row_get[position_id]','$row_get[name]','$row_get[ceping_person]','$row_get[ceping_date]','$row_get[shenhe_log_id]','$row_get[excel_id]','$row_get[shenhe]')");
			$bak_id   = mysql_insert_id();

			$sql_user_basic="select * from user_basic_copy where user_id='$row_get[user_id]'";
			$result_user_basic=mysql_query($sql_user_basic);
			while($row_user_basic =mysql_fetch_array($result_user_basic)){
				$sql_bak = mysql_query("insert into `user_basic` (`user_id`,`user_info_id`,`user_info_value`) values ('$bak_id','$row_user_basic[user_info_id]','$row_user_basic[user_info_value]')");
			}

			$sql_score_competency="select * from score_competency_copy where user_id='$row_get[user_id]'";
			$result_score_competency=mysql_query($sql_score_competency);
			while($row_score_competency =mysql_fetch_array($result_score_competency)){
				$sql_bak = mysql_query("insert into `score_competency` (`user_id`,`position_id`,`competency_id`,`score`) values ('$bak_id','$row_score_competency[position_id]','$row_score_competency[competency_id]','$row_score_competency[score]')");
			}

			$sql_score="select * from score_copy where user_id='$row_get[user_id]'";
			$result_score=mysql_query($sql_score);
			while($row_score =mysql_fetch_array($result_score)){
				$sql_bak = mysql_query("insert into `score` (`user_id`,`position_id`,`sub_competency_id`,`score`) values ('$bak_id','$row_score[position_id]','$row_score[sub_competency_id]','$row_score[score]')");
			}
		}
	
	}
	$update_query1 = mysql_query("update `log` set  `set_id`='1'  WHERE `log_id`='$_GET[log_id]'");
	echo "<script>
			alert ('恢复成功');
		</script>";
	echo "<script>window.opener=null;window.open('','_self');window.close();</script>";
    
	
?>
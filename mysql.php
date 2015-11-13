<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php

		include('configure/conn.php');
		$mysql_init="select ";

        $sql    = "select * from project_profile ";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_array($result)) {
			$sql_name    = "select * from user_profile_list where user_profile_id=$row[user_profile_id]";
			$result_name  = mysql_query($sql_name);
			$row_name = mysql_fetch_array($result_name);
			
			$mysql='max(if(user_basic.user_info_id='.$row[user_profile_id].',user_basic.user_info_value,null)) `'.$row_name[user_profile_name].'`,';
			$mysql_init=$mysql_init.$mysql;
			
		}

		$mysql_init=$mysql_init."user_profile.user_id from user_basic,user_profile where user_profile.position_id=1 and user_profile.user_id=user_basic.user_id group by user_id ";
		echo $mysql_init;

		echo "</br>";
		

		$mysql_init1="select ";
		$sql_competency    = "select * from position_sub_competency where position_id='1'  order by cixun";
        $result_competency = mysql_query($sql_competency);
        while ($row_competency = mysql_fetch_array($result_competency)) {
			$sql_name    = "select * from sub_competency_list where sub_competency_id=$row_competency[sub_competency_id]";
			$result_name  = mysql_query($sql_name);
			$row_name = mysql_fetch_array($result_name);
			
			$mysql1='max(if(score.sub_competency_id='.$row_competency[sub_competency_id].',score.score,null)) \''.$row_name[sub_competency_name].'\',';
			$mysql_init1=$mysql_init1.$mysql1;
		
		}

		$mysql_init1=$mysql_init1."user_profile.user_id from score,user_profile where user_profile.position_id=1 and user_profile.user_id=score.user_id group by user_id ";
		echo $mysql_init1;


?>
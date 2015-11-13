
<meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">

<?php
	include('configure/conn.php');




    $sql_competency = "select * from user_profile where position_id not in (11,17,25)  ";
    $result_competency = mysql_query($sql_competency);
    while ($row_competency = mysql_fetch_array($result_competency)) {
	
		$result = mysql_query("delete from user_basic where user_id=$row_competency[user_id]");
        $result = mysql_query("delete from score where user_id=$row_competency[user_id]");
        $result = mysql_query("delete from score_competency where user_id=$row_competency[user_id]");
	}

	$result1 = mysql_query("delete from user_profile where position_id not in (11,17,25) ");
	
	


?>
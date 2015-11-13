<?php

include('configure/conn.php');

$sql_set    = "select count(*) as total from grid_state where position_id=$_GET[position_id] and position_set=$_GET[position_set]";
$result_set = mysql_query($sql_set);
$row_set    = mysql_fetch_array($result_set);
if($row_set[total]==0){
	$sql="insert INTO grid_state (grid_state,position_id,position_set) VALUES ('$_POST[state_save]','$_GET[position_id]','$_GET[position_set]')";
	mysql_query($sql);


}else{

$sql1="update grid_state set `grid_state`='$_POST[state_save]',`position_id`='$_GET[position_id]',`position_set`='$_GET[position_set]' where `position_id`='$_GET[position_id]' and  `position_set`='$_GET[position_set]'";
mysql_query($sql1);

}
?>
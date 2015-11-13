<?php
include('configure/conn.php');
$sql_cunzai    = "select * from grid_state where position_id=$_GET[position_id] and position_set=$_GET[position_set]";
$result_cunzai = mysql_query($sql_cunzai);
$row_cunzai    = mysql_fetch_array($result_cunzai);
echo json_encode(stripslashes(html_entity_decode($row_cunzai[grid_state])));
?>
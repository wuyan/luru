<meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

include('configure/conn.php');

mysql_query("update report_position set `intro_define1`='$_POST[intro_define1]',`intro_define2`='$_POST[intro_define2]',`intro_title1`='$_POST[intro_title1]',`intro_title2`='$_POST[intro_title2]',`intro_title3`='$_POST[intro_title3]',`intro_title4`='$_POST[intro_title4]',`intro_content1`='$_POST[intro_content1]',`intro_content2`='$_POST[intro_content2]',`intro_content3`='$_POST[intro_content3]',`intro_content4`='$_POST[intro_content4]' where `report_id`='$_POST[report_id]' and  position_id='$_POST[position_id]'");

/*
$sql = "select * from report_position where report_id='$_POST[id]'";
$result =mysql_query($sql);
$row=mysql_fetch_array($result);
*/
echo "<script>window.location='report_method.php?position_id=".$_POST[position_id]."&page_id=1&report_id=".$_POST[report_id]."';</script>";
?>
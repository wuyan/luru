<meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

include('configure/conn.php');
$mysql="update report_position set `method_tools`='$_POST[method_tools]',`method_title1`='$_POST[method_title1]',`method_title2`='$_POST[method_title2]',`method_title3`='$_POST[method_title3]',`method_title4`='$_POST[method_title4]',`method_title5`='$_POST[method_title5]',`method_title6`='$_POST[method_title6]',`method_title7`='$_POST[method_title7]',`method_content1`='$_POST[method_content1]',`method_content2`='$_POST[method_content2]',`method_content3`='$_POST[method_content3]',`method_content4`='$_POST[method_content4]',`method_content5`='$_POST[method_content5]',`method_content6`='$_POST[method_content6]',`method_content7`='$_POST[method_content7]',`method_define`='$_POST[method_define]' where `report_id`='$_POST[report_id]' and  position_id='$_POST[position_id]'";
mysql_query($mysql);
$sql = "select * from report_position where `report_id`='$_POST[report_id]' and  position_id='$_POST[position_id]'";
$result =mysql_query($sql);
$row=mysql_fetch_array($result);
echo "<script>window.location='report_dispaly_sub.php?position_id=".$_POST[position_id]."&page_id=1&report_id=".$_POST[report_id]."';</script>";
?>
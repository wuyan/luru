<meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php

include('configure/conn.php');

mysql_query("update report_position set `template_id`='$_POST[template_id]',`title`='$_POST[title]',`logo_id`='$_POST[logo_id]' where `report_id`='$_POST[report_id]' and   position_id='$_POST[position_id]'");


$sql = "select * from report_position where report_id='$_POST[id]'";
$result =mysql_query($sql);
$row=mysql_fetch_array($result);

echo "<script>window.location='report_intro.php?position_id=".$_POST[position_id]."&page_id=1&report_id=".$_POST[report_id]."';</script>";
?>
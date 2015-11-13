<?php
include ('configure/conn.php');
$sql_template = "select * from report_position where report_id='$_GET[report_id]' and position_id='$_GET[position_id]'";
$result_template = mysql_query($sql_template);
$row_template = mysql_fetch_array($result_template);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>模板选择</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div id='content'>
<h2>请选择报告模板</h2>
<form class="form" id="form"  method="post" action="report_template1.php" style="font-size: 13px; font-family: Verdana;">
<select  size="1" class="selectdiv" style="width:200px;font-size:11pt;" name='template_id' >
							<?php
$sql = "select * from report_template where template_id=$row_template[template_id]";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row[template_id] . "'>" . $row[template_name] . "</option>";
}
$sql7 = "select * from report_template";
$result7 = mysql_query($sql7);
while ($row7 = mysql_fetch_array($result7)) {
    echo "<option value='" . $row7[template_id] . "'>" . $row7[template_name] . "</option>";
}
?>
</select>
<h2>请输入报告标题</h2>
<input type="input" value="<?php echo $row_template[title] ?>"  style="width:200px;font-size:11pt;" name="title"/>
<div id='content'>

<h2>请选择頁面logo</h2>
<form class="form" id="form"  method="post" action="report_template1.php" style="font-size: 13px; font-family: Verdana;">
<select  size="1" class="selectdiv" style="width:200px;font-size:11pt;" name='logo_id' >
<?php
$sql = "select * from report_logo where logo_id=$row_template[logo_id]";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row[logo_id] . "'>" . $row[logo_name] . "</option>";
}
$sql7 = "select * from report_logo ";
$result7 = mysql_query($sql7);
while ($row7 = mysql_fetch_array($result7)) {
    echo "<option value='" . $row7[logo_id] . "'>" . $row7[logo_name] . "</option>";
}
?>
</select>

 <input type="hidden" value="<?php
echo $_GET['report_id'] ?>"  name="report_id"/>

 <input type="hidden" value="<?php
echo $_GET['position_id'] ?>"  name="position_id"/>

 <input style="margin-top: 0px;" type="submit" value="下一页" id="sendButton" />
 </form>

 </div>
</body>
</html>

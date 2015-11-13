<?php
include ('configure/conn.php');
$sql_template = "select * from report_position where report_id='$_GET[report_id]'";
$result_template = mysql_query($sql_template);
$row_template = mysql_fetch_array($result_template);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>前言内容预设</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div id='content'>
<form class="form" id="form"  method="post" action="report_method1.php" style="font-size: 13px; font-family: Verdana;">
<h2>测评方法与计分方法预设</h2>
<h4>测评工具定义</h4>
<div class="addsrname1">
<span>
<textarea  class="int5" name="method_tools" style="width:350px;height:60px;"><?php echo $row_template[method_tools]?></textarea>
</span>
</div>

<h4>内容1</h4>
<div class="addsrname1">
<div><textarea  class="int5" name="method_title1" style="width:350px;height:60px;"><?php echo $row_template[method_title1]?></textarea></div>
</div>

<h4>内容2</h4>
<div><textarea  class="int5" name="method_title2" style="width:350px;height:60px;"><?php echo $row_template[method_title2]?></textarea></div>
</div>

<h4 style="font-size:13px;">内容3</h4>
<div><textarea  class="int5" name="method_title3" style="width:350px;height:60px;"><?php echo $row_template[method_title3]?></textarea></div>
</div>

<h4 style="font-size:13px;">内容4</h4>
<div><textarea  class="int5" name="method_title4" style="width:350px;height:60px;"><?php echo $row_template[method_title4]?></textarea></div>
</div>


<h4 style="font-size:13px;">内容5</h4>
<div><textarea  class="int5" name="method_title5" style="width:350px;height:60px;"><?php echo $row_template[method_title5]?></textarea></div>
</div>


<h4 style="font-size:13px;">内容6</h4>
<div><textarea  class="int5" name="method_title6" style="width:350px;height:60px;"><?php echo $row_template[method_title6]?></textarea></div>
</div>


<h4 style="font-size:13px;">内容7</h4>
<div><textarea  class="int5" name="method_title7" style="width:350px;height:60px;"><?php echo $row_template[method_title7]?></textarea></div>
</div>


<h4 style="font-size:13px;">计分方法定义</h4>
<div class="addsrname1">
<span>
<textarea name="method_define" class="int5" style="width:350px;height:60px;"><?php echo $row_template[method_define]?></textarea></textarea>
</span>
</div>

 <input type="hidden" value="<?php
echo $_GET['report_id'] ?>"  name="report_id"/>

 <input type="hidden" value="<?php
echo $_GET['position_id'] ?>"  name="position_id"/>

<input style="margin-top: 0px;" type="submit" value="下一页" id="sendButton" />
</form>

</div>
</body>
</html>

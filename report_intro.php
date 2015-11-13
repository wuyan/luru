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
<form class="form" id="form"  method="post" action="report_intro1.php" style="font-size: 13px; font-family: Verdana;">
<h2>前言内容预设</h2>
<h4>前言定义1</h4>
<div class="addsrname1">
<span>
<textarea name="intro_define1" class="int5" style="width:350px;height:60px;"><?php echo $row_template[intro_define1]?></textarea>
</span>
</div>


<h4>前言定义2</h4>
<div class="addsrname1">
<span>
<textarea name="intro_define2" class="int5" style="width:350px;height:60px;"><?php echo $row_template[intro_define2]?></textarea>
</span>
</div>

<h4>内容1</h4>
<div class="addsrname1">
<div>标题:<input name="intro_title1" type="text" class="int4" value="<?php echo $row_template[intro_title1]?>" style="width:350px;"/></div>
<div>内容:<textarea name="intro_content1" class="int5" style="width:348px;height:60px;"><?php echo $row_template[intro_content1]?></textarea></div>
<div class="clear"></div>
</div>

<h4>内容2</h4>
<div class="addsrname1">
<div>标题:<input name="intro_title2" type="text" class="int4" value="<?php echo $row_template[intro_title2]?>" style="width:350px;"/></div>
<div>内容:<textarea name="intro_content2" class="int5" style="width:348px;height:60px;"><?php echo $row_template[intro_content2]?></textarea></div>
<div class="clear"></div>
</div>

<h4>内容3</h4>
<div class="addsrname1">
<div>标题:<input name="intro_title3" type="text" class="int4" value="<?php echo $row_template[intro_title3]?>" style="width:350px;"/></div>
<div>内容:<textarea name="intro_content3" class="int5" style="width:348px;height:60px;"><?php echo $row_template[intro_content3]?></textarea></div>
<div class="clear"></div>
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

<?php
include('configure/conn.php');
include('lib/function.php');
include('cookie.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="keywords" content="">
<meta name="description" content="">
<title>睿晶咨询</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="script/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="script/jquery.inputDefault.js" type="text/javascript"></script>

</head>
<body>
<?php
	//调取NAV栏
    include("nav.php");
?>

<div class="container">
<!-- left -->
<div class="left">
<div class="xuanzeBox"><h5>当前位置： 网站首页 > 项目设置 > 胜任力管理 > 添加子胜任力名称</h5></div>
<div class="content">
<div class="pubTitle">
<h1><font>添加子胜任力名称</font></h1>
</div>
<div class="pubCon spacer" id="dakuang">
<form action="addsubcompetency1.php" method="post">
<div class="addsrname">
<div id="divselectadd">
<font>名    称：</font>
<select name="competency_id" size="1" class="selectdiv" style="width:170px;float:left;" name='group_name' id='group_name' onchange="xajax_menu(document.getElementById('group_name').value); return false;">
							<?php
								$sql = "select * from competency_list where competency_id>1 ";
								$result =mysql_query($sql);
								while ($row=mysql_fetch_array($result)){
								
								echo "<option value='".$row[competency_id]."'>".$row[competency_name]."</option>";
								}
								
							?>
                        </select>
<span><input name="sub_competency_name" type="text" class="int3" /></span>
</div>
</div>

<div class="addsrname1">
<font>英文名称：</font>
<span><input name="name_en" type="text" class="int4" /></span>
<div class="clear"></div>
</div>

<div class="addsrname1">
<font>子胜任力定义：</br><b style="font-size:5pt;"></b></font>
<textarea name="describe" class="int5" style="width:300px;float:left;" fs="请输入中文信息"></textarea>
<textarea name="describe_en" class="int5" style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>



<div class="addsrname1">
<font>行为待征:</font>
<textarea name="feature" class="int5" style="width:300px;float:left;" fs="请输入中文信息"></textarea>
<textarea name="feature_en" class="int5"  style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>



<div class="addsrname1">
<font>胜任力总结1:</font>
<textarea name="summary1" class="int5" style="width:300px;float:left;" fs="请输入中文信息">　></textarea>
<textarea name="summary1_en" class="int5" style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>



<div class="addsrname1">
<font>胜任力总结2:</font>
<textarea name="summary2" class="int5" style="width:300px;float:left;" fs="请输入中文信息"></textarea>
<textarea name="summary2_en" class="int5" style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>


<div class="addsrname1">
<font>胜任力总结3:</font>
<textarea name="summary3" class="int5" style="width:300px;float:left;" fs="请输入中文信息"></textarea>
<textarea name="summary3_en" class="int5" style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>


<div class="addsrname1">
<font>胜任力总结4:</font>
<textarea name="summary4" class="int5" style="width:300px;float:left;" fs="请输入中文信息"></textarea>
<textarea name="summary4_en" class="int5" style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>


<div class="addsrname1">
<font>胜任力总结5:</font>
<textarea name="summary5" class="int5" style="width:300px;float:left;" fs="请输入中文信息"></textarea>
<textarea name="summary5_en" class="int5" style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>


<div class="addsrname1">
<font>胜任力总结6:</font>
<textarea name="summary6" class="int5" style="width:300px;float:left;" fs="请输入中文信息"></textarea>
<textarea name="summary6_en" class="int5" style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>


<div class="addsrname1">
<font>胜任力总结7:</font>
<textarea name="summary7" class="int5" style="width:300px;float:left;" fs="请输入中文信息"></textarea>
<textarea name="summary7_en" class="int5" style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>

<div class="addsrname1">
<font>胜任力总结8:</font>
<textarea name="summary8" class="int5" style="width:300px;float:left;" fs="请输入中文信息"></textarea>
<textarea name="summary8_en" class="int5" style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>



<div class="addsrname1">
<font>胜任力总结9:</font>
<textarea name="summary9" class="int5" style="width:300px;float:left;" fs="请输入中文信息"></textarea>
<textarea name="summary9_en" class="int5" style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>



<div class="addsrname1">
<font>胜任力总结10:</font>
<textarea name="summary10" class="int5" style="width:300px;float:left;" fs="请输入中文信息"></textarea>
<textarea name="summary10_en" class="int5" style="width:300px;float:left;" fs="请输入英文信息"></textarea>
<div class="clear"></div>
</div>


<div class="addbuttondiv">
<input name="submit" type="submit" value="添 加" class="addbutton" />
</div>



</form>
</div>
</div>
</div>
<?php  include("navright.php");?>
<div class="clear"></div>
</div>

<div class="footer">
版权所有 <font>Copyright © 2009-2015</font> 上海市睿晶咨询有限公司
</div>
</body>
</html>

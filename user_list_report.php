<?php
include('configure/conn.php');
include('lib/function.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="">
<meta name="description" content="">
<title>睿晶咨询</title>
<link href="css/style4.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
	//调取NAV栏
    include("nav.php");
?>


<div class="container">
<!-- left -->
<div class="left">
<div class="xuanzeBox"><h5>当前位置： 网站首页 > 数据管理</h5></div>
<div class="content">
<div class="pubTitle">
<h1><font>用户信息</font></h1>
</div>
<!-- 添加客户名称 -->
<div id="AddCustom" style="display:none;">
<iframe name="mainFrame" src="x1.html" id="mainFrame" width="100%" height="100%" frameborder=”no” border=”0″ marginwidth=”0″ marginheight=”0″ scrolling=”no” ></iframe>
</div>

<!-- 添加项目名称 -->
<div id="AddProject" style="display:none;">
<iframe name="mainFrame" src="x2.html" id="mainFrame" width="100%" height="100%" frameborder=”no” border=”0″ marginwidth=”0″ marginheight=”0″ scrolling=”no” ></iframe>
</div>

<!-- 添加岗位名称 -->
<div id="AddPost" style="display:none;">
<iframe name="mainFrame" src="x3.html" id="mainFrame" width="100%" height="100%" frameborder=”no” border=”0″ marginwidth=”0″ marginheight=”0″ scrolling=”no” ></iframe>
</div>




<div class="pubContable">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableList">
  <tr>
    <th width="23%" height="35" align="left">姓名</th>
    <th width="24%" align="left">岗位</th>
    <th width="25%">测评日期</th>
    <th width="23%" align="center">测评师</th>
	<th width="23%" align="center">操作</th>
  </tr>

 <?php
		$sql = "select * from  user_profile where `position_id`='$_GET[position_id]' and shenhe=1";
		$result =mysql_query($sql);
		while ($row=mysql_fetch_array($result)){
		echo "  <tr>";
		echo '<td height="35">'.$row['name'].'</td>';
		$sql_position_name = "select * from position_list where position_id='$row[position_id]'";
		$result_position_name = mysql_query($sql_position_name);	
		$row_posititon_name= mysql_fetch_array($result_position_name);
		echo '<td>'.$row_posititon_name['display_name'].'</td>';
		echo '<td align="center"><font>'.$row['ceping_date'].'</font></td>';
		echo '<td align="center">'.$row['ceping_person'].'</td>';
		
		$sql_sub = "select * from report_position where report_id=$_GET[report_id]";
		$result_sub =mysql_query($sql_sub);
		$row_sub=mysql_fetch_array($result_sub);

		$sql_sub_n = "select * from report_template where template_id=$row_sub[template_id]";
		$result_sub_n =mysql_query($sql_sub_n);
		$row_sub_n=mysql_fetch_array($result_sub_n);

		echo '<td align="center"><a target="_blank"  href="report/'.$row_sub_n[source].'/r.php?id='.$row[user_id].'&report_id='.$_GET[report_id].'"><img src="images/baogao.png" /></a>';
		echo "</tr>";

	}


?>
</table>


</div>
</div>
</div>
<!-- right -->
<div class="right">
<div class="fudongBox">
<!-- RJtitle -->
<div class="RJtitle">
<p>
<span><img src="images/icon01.png" /></span>
<font>报告管理</font>
</p>
</div>

<!-- mode -->
<div class="mode">
<a href="report_manager">
<span><img src="images/icon02.png" /></span>
<font>报告设置</font>
</a>
</div>

<!-- guanli -->
<div class="guanli">
<a href="#">
<span><img src="images/icon03.png" /></span>
<font>个人测评报告</font>
</a>
</div>

<!-- guanli -->
<div class="guanli">
<a href="#">
<span><img src="images/icon03.png" /></span>
<font>批量人员打印</font>
</a>
</div>


</div>
</div>
<div class="clear"></div>
</div>

<div class="footer">
版权所有 <font>Copyright © 2009-2015</font> 上海市睿晶咨询有限公司
</div>
</body>
</html>

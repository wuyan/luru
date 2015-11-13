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
    <th width="15%" height="35" align="left">姓名</th>
	<th width="40%" align="left">项目</th>
	<th width="15%" align="left">岗位</th>
    <th width="15%">测评日期</th>
    <th width="15%" align="center">测评师</th>
  </tr>

  	<?php
		$sql_basic = "select * from  user_basic where `user_info_id`='$_POST[user_profile_id]' and `user_info_value`='$_POST[search_value]'";
		$result_basic =mysql_query($sql_basic);
		while ($row_basic=mysql_fetch_array($result_basic)){
			$sql = "select * from  user_profile where user_id='$row_basic[user_id]'";
			$result =mysql_query($sql);
			$row=mysql_fetch_array($result);
	
			


		echo "  <tr>";
		echo '<td height="35"><a   target="_blank"   href="person_infor.php?user_id='.$row[user_id].'">'.$row['name'].'</a></td>';

		$sql_position_name = "select * from position_list where position_id='$row[position_id]'";
		$result_position_name = mysql_query($sql_position_name);	
		$row_posititon_name= mysql_fetch_array($result_position_name);

		$sql_project_name = "select * from project_list where project_id='$row_posititon_name[project_id]'";
		$result_project_name = mysql_query($sql_project_name);	
		$row_project_name= mysql_fetch_array($result_project_name);
		echo '<td>'.$row_project_name['project_name'].'</td>';


		echo '<td>'.$row_posititon_name['display_name'].'</td>';
		echo '<td align="center"><font>'.$row['ceping_data'].'</font></td>';
		echo '<td align="center">'.$row['ceping_person'].'</td>';
		echo "</tr>";

	}

?>
</table>
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

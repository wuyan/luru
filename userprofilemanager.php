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
<link href="css/thickbox.css" media="screen" rel="stylesheet" type="text/css"/>
<script src="js/jquery-1.4.3.min.js" type="text/javascript"></script>
<script src="js/thickbox-compressed.js" type="text/javascript"></script>
<script language="javascript" type="text/JavaScript" src="js/jQuery.js"></script>
<script type="text/javascript" language="javascript" src="script/lytebox.js"></script>
		<script type="text/javascript" language="javascript">
		function myAfterEnd(){
			  window.location.reload(); 

            }
		</script>
		<link rel="stylesheet" href="css/lytebox.css" type="text/css" media="screen">
</head>
<body>
<?php
	//调取NAV栏
    include("nav.php");
?>
<div class="container">
<!-- left -->
<div class="left">
<div class="xuanzeBox"><h5>当前位置： 网站首页 > 项目设置 > 用户字段管理</h5></div>
<div class="content">
<div class="pubTitle">
<h1><font>用户字段管理</font></h1>
<div class="buttondiv">
<a href="#TB_inline?height=160&width=540&inlineId=AddCustom" title="添加用户字段名称" class="thickbox"><span class="bt03"></span>添加用户字段名称</a></div>
</div>


<!-- 添加客户名称 -->
<div id="AddCustom" style="display:none;">
	<form action="adduseraddition.php" method="post">
		<p class="inputdiv0">
			名称：<input name="user_profile_name" type="text" class="int0"/>
		</p>
		<p class="submitdiv">
			<input name="submit" type="submit" class="bt04" value="添 加"/>
		</p>
	</form>
</div>



<div class="pubCon">


<div class="Project" style="margin-top:30px;">

<?PHP


	$sql = "select * from user_profile_list";
	$result =mysql_query($sql);
	$color_int=0;
	while ($row=mysql_fetch_array($result)){
	
		if($color_int%2==0){
			echo '<h5 class="color1">';
			}else{
			echo '<h5 class="color2">';
			}
		$color_int++;
	echo '
	<font>用户字段：'.$row['user_profile_name'].'</font>
	<span><a href=deleteinfo.php?id='.$row['user_profile_id'].'  onclick="return confirm(\'确定删除吗?\');" title="删除胜任力名称" ><img src="images/delete.png" /></a></span>
	<span><a href=editinfo.php?height=160&width=450&id='.$row['user_profile_id'].'" title="修改字段名称" class="thickbox"><img src="images/edit1.png" /></a></span>
	</h5>';
		
		}

?>


</div>

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
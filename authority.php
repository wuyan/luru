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
<div class="xuanzeBox"><h5>当前位置： 网站首页 > 项目设置 > 权限设置</h5></div>
<div class="content">
<div class="pubTitle">
<h1><font>权限管理</font></h1>
<div class="buttondiv">
<a href="#TB_inline?height=160&width=540&inlineId=AddCustom" title="添加权限组" class="thickbox"><span class="bt03"></span>添加权限组</a>


</div>

</div>


<!-- 添加客户名称 -->
<div id="AddCustom" style="display:none;">
	<form action="addauthority.php" method="post">
		<p class="inputdiv0">
			权限组名称：<input name="authority_name" type="text" class="int0"/>
		</p>
		<p class="submitdiv">
			<input name="submit" type="submit" class="bt04" value="添 加"/>
		</p>
	</form>
</div>



<div class="pubCon">


<div class="Project" style="margin-top:30px;">

<?PHP

	$sql = "select * from authority_list";
	$result =mysql_query($sql);
	while ($row=mysql_fetch_array($result)){
	
	echo '<h5>
	<font>权限组：'.$row['authority_name'].'</font>
	<span><a href=deleteauthority.php?height=160&width=450&id='.$row[authority_id].'  onclick="return confirm(\'确定删除吗?\');" title="删除胜任力名称" ><img src="images/delete.png" /></a></span>
	<span><a href=editauthorityname.php?height=160&width=450&id='.$row[authority_id].'  title="修改权限组名称" class="thickbox"><img src="images/edit1.png" /></a></span>
	<span><a href="authority_set.php?id='.$row['authority_id'].'" title="分配权限" rel="lytebox[vacation]" title="网址" data-lyte-options="afterEnd:myAfterEnd  width:650px; height:800px; title="分配权限" ><img src="images/edit2.png" /></a></span>';
	echo '</h5><ul>';

	$sql_sub = "select * from user where authority_id=$row[authority_id]";
	$result_sub =mysql_query($sql_sub);
	$color_int=0;
	while ($row_sub=mysql_fetch_array($result_sub)){
		if($color_int%2==0){
								echo '<li class="color1">';
							}else{
								echo '<li class="color2">';
							}
						$color_int++;
		echo '
				<font>用户：'.$row_sub['manager'].'</font>
			</li>';
		}
		echo '</ul>';
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

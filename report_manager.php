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
<div class="xuanzeBox"><h5>当前位置： 网站首页 > 项目设置 > 报告设置</h5></div>
<div class="content">
<div class="pubTitle">
<h1><font>报告设置</font></h1>
<div class="buttondiv">
<a href="#TB_inline?height=160&width=540&inlineId=AddReport" title="添加报告名称" class="thickbox"><span class="bt03"></span>添加报告名称</a>
<a href="#TB_inline?height=160&width=540&inlineId=AddReportPosition" title="关联报告岗位" class="thickbox"><span class="bt03"></span>关联报告岗位</a>
</div>

</div>
			<!-- 添加客户名称 -->
			<div id="AddReport" style="display:none;">
				<form action="addreport.php" method="post">
					<p class="inputdiv0">
						名称：<input name="report_name" type="text" class="int0"/>
					</p>
					<p class="submitdiv">
						<input name="submit" type="submit" class="bt04" value="添 加"/>
					</p>
				</form>
			</div>

			<!-- 添加项目名称 -->
			<div id="AddReportPosition" style="display:none;">
				 <form action="addreport_position.php" method="post">
					<div id="divproject">
						<font>名称：</font>
						<select name="report_id" size="1" class="selectdiv" style="width:210px;float:left;">
							<?php
									$sql = "select * from report_list";
									$result =mysql_query($sql);
									while ($row=mysql_fetch_array($result)){
												
									echo "<option value=\"".$row[report_id]."\">"."$row[report_name]"."</option>";
																						}
							?>
						</select>
						<select name="position_id" size="1" class="selectdiv" style="width:210px;float:left;">
							<?php
								$sql = "select * from position_list";
								$result =mysql_query($sql);
								while ($row=mysql_fetch_array($result)){
												
									echo "<option value=\"".$row[position_id]."\">"."$row[display_name]"."</option>";
								}
							?>
						</select>
					
						<div class="clear">
						</div>
					</div>
					<p class="submitdiv">
						<input name="submit" type="submit" class="bt04" value="添 加"/>
					</p>
				</form>
			</div>

<div class="pubCon">


<div class="Project" style="margin-top:30px;">

<?PHP


	$sql = "select * from report_list";
	$result =mysql_query($sql);
	while ($row=mysql_fetch_array($result)){

		echo '<h5>
	<font>报告名称：'.$row['report_name'].'</font>
	<span><a href=deletereport.php?id='.$row[report_id].'"  onclick="return confirm(\'确定删除吗?\');" title="删除报告" ><img src="images/delete.png" /></a></span>
	<span><a href=editreport.php?height=160&width=450&id='.$row[report_id].'"  title="修改报告名称" class="thickbox"><img src="images/edit1.png" /></a></span>

	</h5><ul>';
					$color_int=0;
					$sql_sub = "select * from report_position where report_id=$row[report_id]";
					$result_sub =mysql_query($sql_sub);
					while ($row_sub=mysql_fetch_array($result_sub)){
						$sql_sub_n = "select * from position_list where position_id=$row_sub[position_id]";
						$result_sub_n =mysql_query($sql_sub_n);
						$row_sub_n=mysql_fetch_array($result_sub_n);
						if($color_int%2==0){
								echo '<li class="color1">';
							}else{
								echo '<li class="color2">';
							}
							$color_int++;
						echo '
								<font>报告关联岗位:'.$row_sub_n['display_name'].'</font>
								<span><a href=deletereport_position.php?position_id='.$row_sub_n[position_id].'&report_id='.$row[report_id].'"  onclick="return confirm(\'确定删除吗?\');" title="删除报告" ><img src="images/delete.png" /></a></span>
								<span><a href=editgrowth.php?id='.$row_sub[id].' title="关联用户发展建议" class="thickbox"><img src="images/edit1.png" /></a></span>
								<span><a href="report_worth.php?report_id='.$row[report_id].'&position_id='.$row_sub_n[position_id].'&page_id=1" title="关联价值观" rel="lytebox[vacation]" data-lyte-options="afterEnd:myAfterEnd  width:500px; height:400px;"><img src="images/edit3.png" /></a></span>
								<span><a href="report_attach.php?report_id='.$row[report_id].'&position_id='.$row_sub_n[position_id].'&page_id=1" title="关联报告附件" rel="lytebox[vacation]" data-lyte-options="afterEnd:myAfterEnd  width:500px; height:400px;"><img src="images/edit3.png" /></a></span>
								<span><a href="report_template.php?report_id='.$row[report_id].'&position_id='.$row_sub_n[position_id].'" title="设置报告" rel="lytebox[vacation]" data-lyte-options="afterEnd:myAfterEnd  width:500px; height:400px;"><img src="images/edit3.png" /></a></span>
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

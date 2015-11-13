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
		<div class="xuanzeBox">
			<h5>当前位置： 网站首页 > 项目设置 > 客户及项目管理</h5>
		</div>
		<div class="content">
			<div class="pubTitle">
				<h1><font>客户及项目管理</font></h1>
				<div class="buttondiv">
					<a href="#TB_inline?height=160&width=450&inlineId=AddCustom"" title="添加客户" class="thickbox"><span class="bt01"></span>添加客户</a>
					<a href="#TB_inline?height=160&width=540&inlineId=AddProject" title="添加项目" class="thickbox"><span class="bt02"></span>添加项目</a>
					<a href="#TB_inline?height=200&width=540&inlineId=AddPost" title="添加岗位" class="thickbox"><span class="bt03"></span>添加岗位</a>
				</div>
			</div>
			<!-- 添加客户名称 -->
			<div id="AddCustom" style="display:none;">
				<form action="addgroup.php" method="post">
					<p class="inputdiv0">
						名称：<input name="group_name" type="text" class="int0"/>
					</p>
					<p class="submitdiv">
						<input name="submit" type="submit" class="bt04" value="添 加"/>
					</p>
				</form>
			</div>
			<!-- 添加项目名称 -->
			<div id="AddProject" style="display:none;">
				 <form action="addproject.php" method="post">
					<div id="divproject">
						<font>名称：</font>
						<select name="group_id" size="1" class="selectdiv" style="width:230px;float:left;">
							<?php
									$sql = "select * from group_list";
									$result =mysql_query($sql);
									while ($row=mysql_fetch_array($result)){
												
									echo "<option value=\"".$row[group_id]."\">"."$row[group_name]"."</option>";
																						}
							?>
						</select>
						<span><input name="project_name" type="text" class="int1"/></span>
						<div class="clear">
						</div>
					</div>
					<p class="submitdiv">
						<input name="submit" type="submit" class="bt04" value="添 加"/>
					</p>
				</form>
			</div>
			<!-- 添加岗位名称 -->
			<div id="AddPost" style="display:none;">
				<form action="addposition.php" method="post">
					<div id="divpost">
						<font style="width:80px;">岗位名称：</font>
						<select name="project_id" size="1" class="selectdiv" style="width:200px;float:left;">
							<?php
							$sql = "select * from project_list";
							$result =mysql_query($sql);
							while ($row=mysql_fetch_array($result)){
										
							echo "<option value=\"".$row[project_id]."\">"."$row[project_name]"."</option>";
																				}
							?>
						</select>
						<span><input name="position_name" type="text" class="int1"/></span>
						<font style="width:80px;">显示名称：</font><input name="display_name" type="text" class="int1"/>
						<div class="clear">
						</div>
					</div>
					<p class="submitdiv" style="margin-top:20px;">
						<input name="submit" type="submit" class="bt04" value="添 加"/>
					</p>
				</form>
			</div>

<?php	
				$sql = "select * from group_list";
				$result =mysql_query($sql);
				while ($row=mysql_fetch_array($result)){
					echo '<div class="pubCon">
							<div class="Customername">';
					echo		'<h3>客户：'.$row['group_name'].'</h3>';
					echo '<span><a href="deletegroup.php?id='.$row['group_id'].'" title="删除客户" onclick="return confirm(\'确定删除吗?\');"><img src="images/delete.png"/></a></span>
					<span><a href="editgroup.php?height=160&width=450&id='.$row['group_id'].'" title="修改客户名称" class="thickbox"><img src="images/edit1.png"/></a></span>
					
				</div>';
					echo '<div class="Project">';
				$sql_sub = "select * from project_list where group_id=$row[group_id]";
				$result_sub =mysql_query($sql_sub);
				while ($row_sub=mysql_fetch_array($result_sub)){
					echo '	<h5>';
					echo '<font>项目：'.$row_sub['project_name'].'</font>';
					echo '<span><a href="deleteproject.php?id='.$row_sub['project_id'].'" title="删除项目" onclick="return confirm(\'确定删除吗?\');"><img			src="images/delete.png"/></a></span>
						<span><a href="editproject.php?height=160&width=450&id='.$row_sub[project_id].'" title="修改项目名称" class="thickbox"><img src="images/edit1.png" /></a></span>
						<span><a href="userprofilelist.php?id='.$row_sub[project_id].'" title="关联项目与用户字段" rel="lytebox[vacation]" title="网址" data-lyte-options="afterEnd:myAfterEnd  width:650px; height:800px; title="关联项目与用户字段" ><img src="images/edit2.png" /></a></span>';
					echo '</h5><ul>';
						$color_int=0;
						$sql_sub_a = "select * from position_list where project_id=$row_sub[project_id]";
						$result_sub_a =mysql_query($sql_sub_a);
						while ($row_sub_a=mysql_fetch_array($result_sub_a)){
							if($color_int%2==0){
								echo '<li class="color1">';
							}else{
								echo '<li class="color2">';
							}
							$color_int++;
							echo '
									<font>岗位：'.$row_sub_a['display_name'].'</font>
									<span><a href="deleteposition.php?id='.$row_sub_a[position_id].'" title="删除项目" onclick="return confirm(\'确定删除吗?\');"><img src="images/delete.png"/></a></span>
									<span><a href="editposition.php?height=200&width=450&id='.$row_sub_a[position_id].'" title="修改岗位名称" class="thickbox"><img src="images/edit1.png" /></a></span>
									<span><a href="subcompetencylist.php?id='.$row_sub_a[position_id].'" title="关联岗位与子胜任力信息" rel="lytebox[vacation]" data-lyte-options="afterEnd:myAfterEnd  width:500px; height:400px;"><img src="images/edit3.png" /></a></span>
									<span><a href="competencylist.php?id='.$row_sub_a[position_id].'" title="关联岗位与胜任力信息" rel="lytebox[vacation]" data-lyte-options="afterEnd:myAfterEnd  width:500px; height:400px;"><img src="images/edit2.png" /></a></span>
									<span><a href="competencymode.php?id='.$row_sub_a[position_id].'" title="应用胜任力模型" rel="lytebox[vacation]" data-lyte-options="afterEnd:myAfterEnd  width:500px; height:200px;"><img src="images/apply.png"  style="margin-top:3px;"/></a></span>
									<span><a href="definefunction.php?position_id='.$row_sub_a[position_id].'&set_id=1" title="定义公式" rel="lytebox[vacation]" data-lyte-options="afterEnd:myAfterEnd  width:700px; height:700px;"><img src="images/apply.png"  style="margin-top:3px;"/></a></span>
								</li>';
							}
					echo '</ul>';
				}

				echo "</div>";
				echo "</div>";


				}

?>
		</div>
	</div>
<?php  include("navright.php");?>
	<div class="clear">
	</div>
</div>
<div class="footer">
版权所有 
	<font>Copyright © 2009-2015</font> 上海市睿晶咨询有限公司
</div>
</body>
</html>
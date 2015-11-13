<?php
include('configure/conn.php');
include('lib/function.php');
include('cookie.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>睿晶咨询</title>
	<?php $xajax->printJavascript('lib'); ?> 
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
            <div class="xuanzeBox">
                <h5>当前位置： 网站首页 > 测评师评分</h5>
            </div>
            <div class="content">
                <div class="pubTitle">
                    <h1><font>测评师评分</font></h1>
                </div>
                <div class="pubCon">
                     <form action="scoring_ceping.php" method="post">
                        <h2>STEP1：选择所选客户</h2>
                        <select  size="1" class="selectdiv"  name='group_name' id='group_name' onchange="xajax_menu(document.getElementById('group_name').value); return false;">
							<?php
								$sql_group = "select * from group_list";
								$result_group =mysql_query($sql_group);
								while ($row_group=mysql_fetch_array($result_group)){
								
								echo "<option value='".$row_group[group_id]."'>".$row_group[group_name]."</option>";
								}
								
							?>
                        </select>


                        <h2>Step2：选择所属项目</h2>
                        <select size="1" class="selectdiv" id='project_name' name='project_id' onchange="xajax_menu_position(document.getElementById('project_name').value); return false;">
                           <option  ></option>
						<?php

							$sql_group = "select * from group_list";
							$result_group =mysql_query($sql_group);
							$row_group=mysql_fetch_array($result_group);
							$sql_project = "select * from project_list where group_id=$row_group[group_id]";
							$result_project =mysql_query($sql_project);
							while ($row_project=mysql_fetch_array($result_project)){
							
							echo "<option value='".$row_project[project_id]."'>".$row_project[project_name]."</option>";
							}
							
						?>
                        </select>


						<h2>Step3：选择胜任力模型</h2>
                        <select size="1" class="selectdiv" name='competency_mode'>
                           <option  ></option>
						<?php
							$sql_group = "select * from competency_group";
							$result_group =mysql_query($sql_group);
							while ($row_group=mysql_fetch_array($result_group)){
							
							echo "<option value='".$row_group[group_id]."'>".$row_group[competency_group]."</option>";
							}
						?>
                        </select>


                        <h2>Step4：选择所属岗位</h2>
                        <div class="fdDiv">
                            <span>
								<select size="1" class="selectdiv" id='position_name' name="position_id" onchange="xajax_menu_excel(document.getElementById('position_name').value); return false;">
							<option  ></option>
							<?php
								$sql_project = "select * from project_list where group_id=$row_group[group_id]";
								$result_project =mysql_query($sql_project);
								$row_project=mysql_fetch_array($result_project);
								$sql_position = "select * from position_list where project_id=$row_project[project_id]";
								$result_position =mysql_query($sql_position);
								while ($row_position=mysql_fetch_array($result_position)){
									echo "<option  value='".$row_position[position_id]."'>".$row_position[display_name]."</option>";
								}
							?>
								</select>
							</span>

                            <div class="clear"></div>
                        </div>

                        <div class="divupdata">
							<input type="hidden" name="shenhe" value="0"/>
                            <input name="上传" type="submit" value="评分" class="uploadbutton" />
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
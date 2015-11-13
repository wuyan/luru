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
    <title>哈尔滨佳禾网络科技公司财务系统</title>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/scripts/demos.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxtooltip.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/globalization/globalize.js"></script>
	<script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
	        <script type="text/javascript">
            $(document).ready(function () {    
				$("#jqxButton").jqxLinkButton({ width: '200', height: '30'});
		
            });
        </script>

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
                <h5>当前位置： 网站首页 > 项目管理 > 新建用户</h5>
            </div>
            <div class="content">
                <div class="pubTitle">
                    <h1><font>新建用户</font></h1>
                </div>
				<div class="pubCon spacer" id="dakuang">
				<form  method="post" enctype="multipart/form-data" action="adduser.php">

				<div class="addsrname1">
					<font>用户名：</font>
					<span><input name="username" type="text" class="int3" /></span>
					<div class="clear"></div>
				</div>
				<div class="addsrname1">
					<font>密码：</font>
					<span><input name="userpassword" type="password" class="int3" /></span>
					<div class="clear"></div>
				</div>
				<div class="addsrname1">
					<font>确认密码：</font>
					<span><input name="chkpassword" type="password" class="int3" /></span>
					<div class="clear"></div>
				</div>
				<div class="addsrname1">
					<font>显示名称：</font>
					<span><input name="manager" type="text" class="int3" /></span>
					<div class="clear"></div>
				</div>

				<div class="addsrname">
				<div id="divselectadd">
				<font>系统权限：</font>
				 <select  size="1" class="selectdiv" style="width:170px;float:left;" name='authority' >
				<?php
				$sql    = "select * from authority_list";
				$result = mysql_query($sql);
				while ($row = mysql_fetch_array($result)) {
					
					echo "<option value='" . $row[authority_id] . "'>" . $row[authority_name] . "</option>";
				}
				?>
				 </select>
				</div>
				</div>



			
				<div class="addbuttondiv">
				<input name="submit" type="submit" value="提 交" class="addbutton" />
				</div>


                        </div>



                    </form>
		
  
            </div>
        </div>
       
<div class="clear"></div>
</div>
</div>

<div class="footer">
版权所有 <font>Copyright © 2009-2015</font> 上海市睿晶咨询有限公司
</div>
</body>

</html>



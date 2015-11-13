<?php
include('configure/conn.php');
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
	$sql = "select * from user where id=$_GET[user_id]";
	$result =mysql_query($sql);
	$row=mysql_fetch_array($result);
?>
    <div class="container">
        <!-- left -->
        <div class="left">
            <div class="xuanzeBox">
                <h5>当前位置： 网站首页 > 项目管理 > 更改用户信息</h5>
            </div>
            <div class="content">
                <div class="pubTitle">
                    <h1><font>更改用户信息</font></h1>
                </div>
				<div class="pubCon spacer" id="dakuang">
				<form  method="post" enctype="multipart/form-data" action="changepassword1.php">

				<div class="addsrname1">
					<font>用户名：</font>
					<span style="font-size:14pt;margin-top:3px;"><input name="user" type="input" class="int3" value="<?php echo $row[user]?>" /></span>
					<div class="clear"></div>
				</div>
				<div class="addsrname1">
					<font>显示名称：</font>
					<span style="font-size:14pt;margin-top:3px;"><input name="manager" type="input" class="int3" value="<?php echo $row[manager]?>" /></span>
					<div class="clear"></div>
				</div>
				<div class="addsrname1">
					<font>密码：</font>
					<span><input name="password" type="password"  class="int3" value="<?php echo $row[password]?>"/></span>
					<div class="clear"></div>
				</div>
				
				<div class="addsrname">
				<div id="divselectadd">
				<font>系统权限：</font>
				 <select  size="1" class="selectdiv" style="width:170px;float:left;" name='authority_id' >
				<?php
				$sql4 = "select * from authority_list where authority_id=$row[authority_id]";
				$result4 =mysql_query($sql4);
				while ($row4=mysql_fetch_array($result4)){
				
				echo "<option value='".$row4[authority_id]."'>".$row4[authority_name]."</option>";
				}
				$sql    = "select * from authority_list";
				$result = mysql_query($sql);
				while ($row = mysql_fetch_array($result)) {
					
					echo "<option value='" . $row[authority_id] . "'>" . $row[authority_name] . "</option>";
				}
				?>
				 </select>
				</div>
				</div>
		
				<input type="hidden" name="user_id" value="<?php echo $_GET[user_id]?>"/>

				<div class="addbuttondiv">
				<input name="submit" type="submit" value="修 改" class="addbutton" />
				</div>

   
                        </div>


                    </form>
		
  
            </div>
        </div>
       
<div class="clear"></div>
</div>
</div>

</body>

</html>



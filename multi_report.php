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


</div>


			
<div class="pubCon">


<div class="Project" style="margin-top:30px;">

<?PHP


	$sql = "select * from report_list";
	$result =mysql_query($sql);
	while ($row=mysql_fetch_array($result)){

					echo '<h5><font>报告名称：'.$row['report_name'].'</font></h5><ul>';
					$sql_sub = "select * from report_position where report_id=$row[report_id]";
					$result_sub =mysql_query($sql_sub);
					$color_int=0;
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
								<font>报告关联岗位:<a href=multiprint.php?position_id='.$row_sub_n["position_id"].'&report_id='.$row[report_id].'&shenghe=1>'.$row_sub_n['display_name'].'</a></font>
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

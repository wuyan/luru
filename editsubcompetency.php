<?php
include('configure/conn.php');
include('lib/function.php');
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

	
	$result_now = mysql_query("select * from sub_competency_list where sub_competency_id=$_GET[id]");
	$row_now = mysql_fetch_array($result_now); 
	

?>

<div class="container">
<!-- left -->
<div class="left">
<div class="xuanzeBox"><h5>当前位置： 网站首页 > 项目设置 > 胜任力管理 > 添加子胜任力名称</h5></div>
<div class="content">
<div class="pubTitle">
<h1><font>修改子胜任力名称</font></h1>
</div>
<div class="pubCon spacer" id="dakuang">
<form action="editsubcompetency1.php" method="post">
<div class="addsrname">
<div id="divselectadd">
<font>名    称：</font>
 <select name="competency_id" size="1" class="selectdiv" style="width:170px;float:left;" name='group_name' id='group_name' onchange="xajax_menu(document.getElementById('group_name').value); return false;">
	<?php

				$sql7 = "select * from competency_list where competency_id='$row_now[competency_id]'";
				$result7 = mysql_query($sql7);
				$row7 = mysql_fetch_array($result7);
				echo "<option value=".$row7['competency_id'].">".$row7['competency_name']."</option>";


				$sql_competency = "select * from competency_list ";
				$result_competency =mysql_query($sql_competency);
				while ($row_competency=mysql_fetch_array($result_competency)){
							
				echo "<option value=\"".$row_competency[competency_id]."\">"."$row_competency[competency_name]"."</option>";
				}
	?>
                        </select>
<span><input name="sub_competency_name" type="text" class="int3" value="<?php echo $row_now['sub_competency_name']; ?>"/></span>
</div>
</div>

<div class="addsrname1">
<font>英文名称：</font>
<span><input name="name_en" type="text" class="int4"  value="<?php echo $row_now['name_en']; ?>"/></span>
<div class="clear"></div>
</div>

<div class="addsrname1">
<font>子胜任力定义：</br><b style="font-size:5pt;">(左侧为中文内容</br>右侧为英文内容)</b></font>
<textarea name="describe" class="int5" style="width:300px;float:left;"><?php echo $row_now['describe']; ?></textarea>
<textarea name="describe_en" class="int5" style="width:300px;float:left;"><?php echo $row_now['describe_en']; ?></textarea>
<div class="clear"></div>
</div>

<div class="addsrname1">
<font>行为待征:</font>
<textarea name="feature" class="int5"  style="width:300px;float:left;"><?php echo $row_now['feature']; ?></textarea>
<textarea name="feature_en" class="int5" style="width:300px;float:left;"><?php echo $row_now['feature_en']; ?></textarea>
<div class="clear"></div>
</div>

<div class="addsrname1">
<font>胜任力总结1:</font>
<textarea name="summary1" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary1"] ?></textarea>
<textarea name="summary1_en" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary1_en"] ?></textarea>
<div class="clear"></div>
</div>


<div class="addsrname1">
<font>胜任力总结2:</font>
<textarea name="summary2" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary2"] ?></textarea>
<textarea name="summary2_en" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary2_en"] ?></textarea>
<div class="clear"></div>
</div>


<div class="addsrname1">
<font>胜任力总结3:</font>
<textarea name="summary3" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary3"] ?></textarea>
<textarea name="summary3_en" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary3_en"] ?></textarea>
<div class="clear"></div>
</div>


<div class="addsrname1">
<font>胜任力总结4:</font>
<textarea name="summary4" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary4"] ?></textarea>
<textarea name="summary4_en" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary4_en"] ?></textarea>
<div class="clear"></div>
</div>


<div class="addsrname1">
<font>胜任力总结5:</font>
<textarea name="summary5" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary5"] ?></textarea>
<textarea name="summary5_en" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary5_en"] ?></textarea>
<div class="clear"></div>
</div>



<div class="addsrname1">
<font>胜任力总结6:</font>
<textarea name="summary6" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary6"] ?></textarea>
<textarea name="summary6_en" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary6_en"] ?></textarea>
<div class="clear"></div>
</div>


<div class="addsrname1">
<font>胜任力总结7:</font>
<textarea name="summary7" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary7"] ?></textarea>
<textarea name="summary7_en" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary7_en"] ?></textarea>
<div class="clear"></div>
</div>

<div class="addsrname1">
<font>胜任力总结8:</font>
<textarea name="summary8" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary8"] ?></textarea>
<textarea name="summary8_en" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary8_en"] ?></textarea>
<div class="clear"></div>
</div>



<div class="addsrname1">
<font>胜任力总结9:</font>
<textarea name="summary9" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary9"] ?></textarea>
<textarea name="summary9_en" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary9_en"] ?></textarea>
<div class="clear"></div>
</div>


<div class="addsrname1">
<font>胜任力总结10:</font>
<textarea name="summary10" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary10"] ?></textarea>
<textarea name="summary10_en" class="int5" style="width:300px;float:left;"><?php echo $row_now["summary10_en"] ?></textarea>
<div class="clear"></div>
</div>


<input name="id" type="hidden" value="<?php echo $_GET['id'];?>">
<div class="addbuttondiv">
<input name="submit" type="submit" value="修 改" class="addbutton" />
</div>



</form>
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

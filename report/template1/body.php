<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<style>
 v\:* { BEHAVIOR: url(#default#VML) }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<link href="report.css" rel="stylesheet" type="text/css"/>
<script language="javascript">AC_FL_RunContent = 0;</script>
<script language="javascript"> DetectFlashVer = 0; </script>
<script src="AC_RunActiveContent.js" language="javascript"></script>
<script language="JavaScript" type="text/javascript">
<!--
var requiredMajorVersion = 9;
var requiredMinorVersion = 0;
var requiredRevision = 45;
-->
</script>
</head>
<body>
<?php 
$sql_position = "select * from user_profile where user_id=$_GET[id]";
$result_position =mysql_query($sql_position);
$row_position=mysql_fetch_array($result_position);
?>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div class="shouye_title" >
			<b><?php echo $row_report[title];?></b>
		</div>
		<div class="shouye_tu">
			<img src="tu/main.png" alt="" height="141" width="700" border="0"/>
		</div>
		<div class="shouye_title" style="margin-top:70px;font-size:20pt;">
			<b>个人测评报告</b>
		</div>
		<div class="shouye_all" style="margin-top:120px;">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       品牌:
			
			</div>
			<div class="shouye_v1">
			  &nbsp;
		<?php 
		$sql_name = "select * from  user_basic where user_id =$row[user_id] and user_info_id=19";
		$result_name =mysql_query($sql_name);
		$row_name=mysql_fetch_array($result_name);
		echo $row_name[user_info_value];
	   ?>

			</div>
		</div>
		<div class="shouye_all">
		<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       部门:
			</div>
			<div class="shouye_v1">
        &nbsp;<?php 
		$sql_name = "select * from  user_basic where user_id =$row[user_id] and user_info_id=20";
		$result_name =mysql_query($sql_name);
		$row_name=mysql_fetch_array($result_name);
		echo $row_name[user_info_value];
	   ?>
			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       姓名:

			</div>
			<div class="shouye_v1">
        &nbsp;<?php 
		$sql_name = "select * from  user_basic where user_id =$row[user_id] and user_info_id=1";
		$result_name =mysql_query($sql_name);
		$row_name=mysql_fetch_array($result_name);
		echo $row_name[user_info_value];
	   ?>
			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       日期:

			</div>
			<div class="shouye_v1">
       &nbsp;<?php 
		$sql_name = "select * from  user_basic where user_id =$row[user_id] and user_info_id=3";
		$result_name =mysql_query($sql_name);
		$row_name=mysql_fetch_array($result_name);
		echo  date("Y年m月d日",strtotime($row_name[user_info_value]));
	   ?>


			</div>
		</div>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">

		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="title_1">
      目&nbsp;&nbsp;录

		</div>
		<div class="text">
			<br/>
			<br/>
			<div class="title_2">1、前言</div>
			<div class="title_4">介绍测评目的和测评报告阅读指南。</div>
			<div class="title_2">
       2、测评方法与计分方法
			</div>
			<div class="title_4">介绍测评过程中采用的工具、计分方法。</div>

			<div class="title_2">
       3、测评结果剖析
			</div>
			<div class="title_4">呈现参试者岗位胜任力水平的整体表现和个人优劣势项，各项子胜任力测评结果以及能力等级和发展建议</div>

			<div class="title_2">
				 <span style="margin-left:15px;">附件一：胜任力定义</span>
			</div>
			<div class="title_4">介绍所测评岗位的胜任力定义及行为特征。 </div>

						<div class="title_2">
				 <span style="margin-left:15px;">附件二：人格问卷与认知能力报告</span>
			</div>
			<div class="title_4">呈现参试者的人格特质及推理能力表现。 </div>
		</div>
		<br/>
		<br/>
		<br/>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">

		<div style="width:750px;height:120px;">
			<table style="margin-top:35px;margin-left:10px;float:left;">
			<tbody>
			<tr>
				<td width="45" height="45" style="border:3px solid black;font-size:16pt;text-align:center;color:000000;">
					 1
				</td>
			</tr>
			</tbody>
			</table>
			<div class="qianyan" style="float:left;width:500px;height:50px;margin-top:50px;margin-left:10px;font-size:14pt;font-weight:bold;text-align:left;color:000;">
       前言
			</div>
		</div>
		<div class="text_2" style="line-height:30px;margin-top:10px;">
			&emsp;&emsp;<?php echo $row_report[intro_define1];?> 
			<br/>
			<br/> &emsp;&emsp;<?php echo $row_report[intro_define2];?> 
			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;<?php echo $row_report[intro_title1];?> 
			<br/>&emsp;&emsp;<?php echo $row_report[intro_content1];?> 
			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;<?php echo $row_report[intro_title2];?> 
			<br/>&emsp;&emsp;<?php echo $row_report[intro_content2];?> 
			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;<?php echo $row_report[intro_title3];?> 
			<br/>&emsp;&emsp;<?php echo $row_report[intro_content3];?> 
		</div>
		<br/>
		<br/>
		<br/>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div style="width:750px;height:120px;">
			<table style="margin-top:35px;margin-left:10px;float:left;">
			<tbody>
			<tr>
				<td width="45" height="45" style="border:3px solid black;font-size:16pt;text-align:center;color:000000;">
					 2
				</td>
			</tr>
			</tbody>
			</table>
			<div class="qianyan" style="float:left;width:500px;height:50px;margin-top:50px;margin-left:10px;font-size:14pt;font-weight:bold;text-align:left;color:000;">
       测评方法与计分方法 
			</div>
		</div>
		<div class="text_2" style="line-height:30px;margin-top:10px;">
			&emsp;&emsp;在测评中心中，参试者以公平公正的方式参与一系列测评活动，并由专业的测评师团队观察参试者在各活动中的表现。
			<div style="margin-top:30px;"><b>1.<span style="margin-left:50px;">测评工具</div></b>


			<div style="margin-left:62px;"><?php echo $row_report[method_tools];?> </div>


			<?php
				if($row_report[method_title1]!=''){
				
				echo '<div style="margin-left:35px;margin-top:15px;width:665px;height:60px;">
				<div style="float:left;width:20px;margin-top:10px;margin-left:10px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" /></div>
				<div style="float:left;width:630px;">'.$row_report[method_title1].'</div>
					</div>';
				}
				if($row_report[method_title2]!=''){
				
				echo '<div style="margin-left:35px;margin-top:15px;width:665px;height:60px;">
				<div style="float:left;width:20px;margin-top:10px;margin-left:10px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" /></div>
				<div style="float:left;width:630px;">'.$row_report[method_title2].'</div>
					</div>';
				}
				if($row_report[method_title3]!=''){
				
				echo '<div style="margin-left:35px;margin-top:15px;width:665px;height:60px;">
				<div style="float:left;width:20px;margin-top:10px;margin-left:10px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" /></div>
				<div style="float:left;width:630px;">'.$row_report[method_title3].'</div>
					</div>';
				}
				if($row_report[method_title4]!=''){
				
				echo '<div style="margin-left:35px;margin-top:15px;width:665px;height:60px;">
				<div style="float:left;width:20px;margin-top:10px;margin-left:10px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" /></div>
				<div style="float:left;width:630px;">'.$row_report[method_title4].'</div>
					</div>';
				}
				if($row_report[method_title5]!=''){
				
				echo '<div style="margin-left:35px;margin-top:15px;width:665px;height:60px;">
				<div style="float:left;width:20px;margin-top:10px;margin-left:10px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" /></div>
				<div style="float:left;width:630px;">'.$row_report[method_title5].'</div>
					</div>';
				}
				if($row_report[method_title6]!=''){
				
				echo '<div style="margin-left:35px;margin-top:15px;width:665px;height:60px;">
				<div style="float:left;width:20px;margin-top:10px;margin-left:10px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" /></div>
				<div style="float:left;width:630px;">'.$row_report[method_title6].'</div>
					</div>';
				}
				if($row_report[method_title7]!=''){
				
				echo '<div style="margin-left:35px;margin-top:15px;width:665px;height:60px;">
				<div style="float:left;width:20px;margin-top:10px;margin-left:10px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" /></div>
				<div style="float:left;width:630px;">'.$row_report[method_title7].'</div>
					</div>';
				};
			?>
			
			
			
			<br/>
			<br/>
			<b>2.<span style="margin-left:50px;">计分方法</span></b>
			<br/>
			<div style="margin-left:62px;"><?php echo $row_report[method_define];?></div>
			<br/>
			<br/>
		</div>
	</div>
</div>
<div class="central" style="font-size:10pt;">
	<?php require("head.html") ?>
	<div class="main" style="height:auto;">
		<div style="width:750px;height:120px;">
			<table style="margin-top:35px;margin-left:10px;float:left;">
			<tbody>
			<tr>
				<td width="45" height="45" style="border:3px solid black;font-size:16pt;text-align:center;color:000000;">
					 3
				</td>
			</tr>
			</tbody>
			</table>
			<div class="qianyan" style="float:left;width:500px;height:50px;margin-top:50px;margin-left:10px;font-size:14pt;font-weight:bold;text-align:left;color:000;">
       测评结果剖析 
			</div>
		</div>
		<script language="JavaScript" type="text/javascript">
<!--
if (AC_FL_RunContent == 0 || DetectFlashVer == 0) {
	alert("This page requires AC_RunActiveContent.js.");
} else {
	var hasRightVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
	if(hasRightVersion) { 
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,45,2',
			'width', '750',
			'height', '300',
			'scale', 'noscale',
			'salign', 'TL',
			'bgcolor', 'ffffff',
			'wmode', 'opaque',
			'movie', 'charts',
			'src', 'charts',
			'FlashVars', 'library_path=charts_library&xml_source=overall.php?id=<?php echo $row[user_id]?>', 
			'id', 'my_chart',
			'name', 'my_chart',
			'menu', 'true',
			'allowFullScreen', 'true',
			'allowScriptAccess','sameDomain',
			'quality', 'high',
			'align', 'middle',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'play', 'true',
			'devicefont', 'false'
			); 
	} else { 
		var alternateContent = 'This content requires the Adobe Flash Player. '
		+ '<u><a href=http://www.macromedia.com/go/getflash/>Get Flash</a></u>.';
		document.write(alternateContent); 
	}
}
// -->
		</script>
		<div class="imageexample">
			<div style="float:left;width:100px;height:20px;border:0px solid black;">
       图例:
			</div>
			<div style="float:left;width:30px;height:20px;border:0px solid black;margin-left:18px;margin-top:10px;">
				<img src="tu/1.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:20px;border:0px solid black;margin-top:10px;margin-left:8px;">
       参试者得分
			</div>
			<div style="float:left;width:30px;height:20px;border:0px solid black;margin-left:18px;margin-top:10px;">
				<img src="tu/2.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:20px;border:0px solid black;margin-top:10px;margin-left:8px;">
       平均得分
			</div>
			<div style="float:left;width:30px;height:20px;border:0px solid black;margin-left:18px;margin-top:10px;">
				<img src="tu/5.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:20px;border:0px solid black;margin-top:10px;margin-left:8px;">
       标杆得分
			</div>
		</div>
		<table style="width:750px;border:0px solid black;cellpadding=2;cellspacing=0;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:30px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:183px;">
				 类别
			</td>
			<td style="border:0px solid black;width:183px;">
				 参试者得分
			</td>
			<td style="border:0px solid black;width:183px;">
				 平均得分
			</td>
			<td style="border:0px solid black;width:183px;">
				 标杆得分
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#D9D9D9;">
			<td style="border:0px solid black;width:183px;">
				 胜任力总平均分
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=1 and position_id=$row_position[position_id]");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=1 and position_id=$row_position[position_id]";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where position_id=$row_position[position_id] and competency_id=1 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);

			?>
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:183px;">
				 流程管理
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=2 and position_id=$row_position[position_id]");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=2 and position_id=$row_position[position_id]";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where competency_id=2  and position_id=$row_position[position_id]  order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);


			?>
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:183px;">
				 资源运用
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=3 and position_id=$row_position[position_id]");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=3 and position_id=$row_position[position_id]";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where competency_id=3  and position_id=$row_position[position_id]  order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);

			?>
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:183px;">
				 人员激励
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=4 and position_id=$row_position[position_id]");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=4 and position_id=$row_position[position_id]";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where competency_id=4  and position_id=$row_position[position_id]  order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);

			?>
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:183px;">
				 团队合作
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=5 and position_id=$row_position[position_id]");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=5 and position_id=$row_position[position_id]";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where competency_id=5  and position_id=$row_position[position_id]  order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);

			?>
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:183px;">
				 自我管理
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=6 and position_id=$row_position[position_id]");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=6 and position_id=$row_position[position_id]";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where competency_id=6  and position_id=$row_position[position_id]  order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);

			?>
			</td>
		</tr>
		</tbody>
		</table>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:15px;">
      个人优劣势项
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:30px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:100px;">
			</td>
			<td style="border:0px solid black;width:150px;">
				 胜任力
			</td>
			<td style="border:0px solid black;width:500px;">
				 描述
			</td>
		</tr>
		<tr style="height:150px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:100px;">
				 个人优势项
			</td>
			<td style="border:0px solid black;width:150px;">
			<?php
				$sql_max ="select * from score  where user_id='$row[user_id]' and position_id=$row_position[position_id] order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				$sql_des="select * from sub_competency_list where sub_competency_id ='$row_max[sub_competency_id]'";
				$result_des=mysql_query($sql_des);
				$row_des=mysql_fetch_array($result_des);
				echo $row_des[sub_competency_name];

			?>
			</td>
			<td style="border:0px solid black;width:500px;text-align:left;">
				 <?php echo  competency_ld($row_max[sub_competency_id], $row_max[score])?>
			</td>
		</tr>
		<tr style="height:150px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:100px;">
				 有待提升项
			</td>
			<td style="border:0px solid black;width:150px;">
				<?php
				$sql_max ="select * from score where user_id='$row[user_id]' and position_id=$row_position[position_id] order by  `score` asc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				$sql_des="select * from sub_competency_list where sub_competency_id ='$row_max[sub_competency_id]'";
				$result_des=mysql_query($sql_des);
				$row_des=mysql_fetch_array($result_des);
				echo $row_des[sub_competency_name];
			?>
			</td>
			<td style="border:0px solid black;width:500px;text-align:left;">
				<?php echo  
				
				competency_ld($row_max[sub_competency_id], $row_max[score])?>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>
<?php

$sql_content = "select * from report_position_display where position_id=$row_position[position_id]";
$result_content =mysql_query($sql_content);
while($row_content=mysql_fetch_array($result_content))
{

?>
<div class="central">
	<?php require("head.html") ?>
	<div class="main" style="height:auto;">
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:70px;">
     <?php echo $row_content[title] ?>测评结果
		</div>
		<table style="width:750px;border:0px solid black;text-align:center;font-size:10pt;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 子胜任力
			</td>
			<td style="width:250px;border:0px solid black;text-align:center;">
				<table width="106%" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr style="height:38px;background-color:#4F81BD;color:ffffff;">
					<td >
						 得分
					</td>
				</tr>
				</tbody>
				</table>
				<table width="106%" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr height="40">
					<td style="background-color:#F2F2F2;color:ffffff;color:black;" width="8%">
						 1
					</td>
					<td style="background-color:#F2F2F2;color:ffffff;color:black;" width="8%">
						 2
					</td>
					<td style="background-color:#F2F2F2;color:ffffff;color:black;" width="8%">
						 3
					</td>
					<td style="background-color:#F2F2F2;color:ffffff;color:black;" width="8%">
						 4
					</td>
					<td style="background-color:#F2F2F2;color:ffffff;color:black;" width="8%">
						 5
					</td>
					<td style="background-color:#F2F2F2;color:ffffff;color:black;" width="8%">
						 6
					</td>
					<td style="background-color:#F2F2F2;color:ffffff;color:black;" width="8%">
						 7
					</td>
					<td style="background-color:#F2F2F2;color:ffffff;color:black;" width="8%">
						 8
					</td>
					<td style="background-color:#F2F2F2;color:ffffff;color:black;" width="8%">
						 9
					</td>
					<td style="background-color:#F2F2F2;color:ffffff;color:black;" width="8%">
						 10
					</td>
				</tr>
				</tbody>
				</table>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 个人得分
			</td>
			<td style="width:100px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 平均得分
			</td>
			<td style="width:100px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 标杆得分
			</td>
		</tr>
		<?php
			$tree = explode(',',$row_content[subcompetency_id]); 
			for($index=0;$index<count($tree);$index++){ 
			

			${"result_score" . $index} = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=$tree[$index] and position_id='$row_position[position_id]'");
			${"row_score" . $index}=mysql_fetch_array(${"result_score" . $index} );
			${"score" . $index} =number_format(${"row_score" . $index}[score], 0);


			${"sql_avg" . $index} ="select avg(`score`) as average from score where sub_competency_id=$tree[$index] and position_id='$row_position[position_id]'";
			${"result_avg" . $index}=mysql_query(${"sql_avg" . $index});
			${"row_avg" . $index}=mysql_fetch_array(${"result_avg" . $index});
			${"avg" . $index}=${"row_avg" . $index}[average];

			${"sql_max" . $index} ="select * from score  where sub_competency_id=$tree[$index] and position_id='$row_position[position_id]' order by  `score` desc limit 1";
			${"result_max" . $index}=mysql_query(${"sql_max" . $index});
			${"row_max" . $index}=mysql_fetch_array(${"result_max" . $index});
			${"max" . $index}=number_format(${"row_max" . $index}[score], 0);
			
		
			
			}

			$len=count($tree)-1;
			for($index=0;$index<count($tree);$index++){ 
			$sql_sub_n = "select * from sub_competency_list where sub_competency_id=$tree[$index]";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);
		?>
		
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 <?php  
							
					echo $row_sub_n[sub_competency_name];
				 ?>
			</td>
			<td style="width:250px;border:0px solid black;">
		
			<?php
			
			if($index==0){
						$height=32;
						for($index1=0;$index1<$len;$index1++){ 
							$index_n=$index1+1;
							$startx=13+26.5*(${"score" . $index1} -1);
							$startx1=13+26.5*(${"score" . $index_n} -1);
							$startx_avg=13+26.5*(${"avg" . $index1} -1);
							$startx1_avg=13+26.5*(${"avg" . $index_n} -1);
							$startx_max=13+26.5*(${"max" . $index1} -1);
							$startx1_max=13+26.5*(${"max" . $index_n} -1);
							

							$height1=$height+60;
							

				
							echo "<v:line from='".$startx.",".$height."' to='".$startx1.",".$height1."' style='position:absolute;z-index:9;' strokecolor='#4F81BD' strokeweight='2px' ></v:line>";
							echo "<v:line from='".$startx_avg.",".$height."'' to='".$startx1_avg.",".$height1."' style='position:absolute;z-index:7;' strokecolor='#A6A6A6' strokeweight='2px' ></v:line>";
							echo "<v:line from='".$startx_max.",".$height."' to='".$startx1_max.",".$height1."' style='position:absolute;z-index:8;' strokecolor='#000000' strokeweight='2px' ></v:line>";

							
							$height=$height1+3;
						
					
						
						}
			}
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=$row_sub_n[sub_competency_id]");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where  sub_competency_id=$row_sub_n[sub_competency_id] and position_id='$row_position[position_id]'";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];



			$sql_max ="select * from score  where sub_competency_id=$row_sub_n[sub_competency_id] and position_id='$row_position[position_id]' order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0); 

			include("table1.php");
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=$row_sub_n[sub_competency_id]");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where  sub_competency_id=$row_sub_n[sub_competency_id] and position_id='$row_position[position_id]'";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
				<?php
				$sql_max ="select * from score  where  sub_competency_id=$row_sub_n[sub_competency_id] and position_id='$row_position[position_id]' order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<?php  }?>
		</tbody>
		</table>
		<div style="border:0px solid black;width:750px;height:35px;background-color:#F2F2F2;font-size:9pt;">
			<div style="float:left;width:100px;height:30px;border:0px solid black;">
       图例:
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:15px;">
				<img src="tu/4.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:15px;margin-left:8px;">
       参试者得分
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:15px;">
				<img src="tu/2.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:15px;margin-left:8px;">
       平均得分
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:15px;">
				<img src="tu/3.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:15px;margin-left:8px;">
       标杆得分
			</div>
		</div>

		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:60px;">
       <?php echo $row_content[title] ?>胜任力总结
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力
			</td>
			<td style="border:0px solid black;width:600px;">
				 等级描述
			</td>
		</tr>
		<?php
			
			$tree = explode(',',$row_content[subcompetency_id]); 
			for($index=0;$index<count($tree);$index++){ 
			$sql_sub_n = "select * from sub_competency_list where sub_competency_id=$tree[$index]";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);
		?>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 <?php echo $row_sub_n[sub_competency_name]?>
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 	<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=$row_sub_n[sub_competency_id]");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld($row_sub_n[sub_competency_id], $row_score[score])
				?>
			</td>
		</tr>
		<?php 
			}
		?>
		</tbody>
		</table>
	</div>
</div>

<div class="central">
	<?php require("head.html") ?>
	<div class="main" style="height:auto;">
		<script language="JavaScript" type="text/javascript">
<!--
if (AC_FL_RunContent == 0 || DetectFlashVer == 0) {
	alert("This page requires AC_RunActiveContent.js.");
} else {
	var hasRightVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
	if(hasRightVersion) { 
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,45,2',
			'width', '750',
			'height', '450',
			'scale', 'noscale',
			'salign', 'TL',
			'bgcolor', 'ffffff',
			'wmode', 'opaque',
			'movie', 'charts',
			'src', 'charts',
			'FlashVars', 'library_path=charts_library&xml_source=tp_s.php?pageid=<?php echo $row_content[page_id]?>&positionid=<?php echo $row_position[position_id]?>', 
			'id', 'my_chart',
			'name', 'my_chart',
			'menu', 'true',
			'allowFullScreen', 'true',
			'allowScriptAccess','sameDomain',
			'quality', 'high',
			'align', 'middle',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'play', 'true',
			'devicefont', 'false'
			); 
	} else { 
		var alternateContent = 'This content requires the Adobe Flash Player. '
		+ '<u><a href=http://www.macromedia.com/go/getflash/>Get Flash</a></u>.';
		document.write(alternateContent); 
	}
}
// -->
		</script>
		<div style="border:0px solid black;width:750px;height:25px;background-color:#F2F2F2;font-size:9pt;">
			<div style="float:left;width:100px;height:25px;border:0px solid black;">
       图例:
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/1.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:25px;border:0px solid black;margin-top:13px;margin-left:8px;">
       参试者得分
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/hong.jpg" width="40"/>
			</div>
			<div style="float:left;width:150px;height:25px;border:0px solid black;margin-top:10px;margin-left:10px;">
       合格线（5分）
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/lv.jpg" width="40"/>
			</div>
			<div style="float:left;width:130px;height:25px;border:0px solid black;margin-top:10px;margin-left:8px;">
       期望线（6分）
			</div>
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:80px;">
       <?php echo $row_content[title] ?>胜任力发展建议
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力
			</td>
			<td style="border:0px solid black;width:600px;">
				 发展建议
			</td>
		</tr>
		<?php
			
			$tree = explode(',',$row_content[subcompetency_id]); 
			for($index=0;$index<count($tree);$index++){ 
			$sql_sub_n = "select * from sub_competency_list where sub_competency_id=$tree[$index]";
			$result_sub_n =mysql_query($sql_sub_n);
			$row_sub_n=mysql_fetch_array($result_sub_n);
		?>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 <?php echo $row_sub_n[sub_competency_name]?>
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=$row_sub_n[sub_competency_id]");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh($row_sub_n[sub_competency_id], $row_score[score]);

				?>
			</td>
		</tr>
		<?php 
			}
		?>
		</tbody>
		</table>
	</div>
</div>


<?php
}


$sql_position = "select * from user_profile where user_id=$_GET[id]";
$result_position =mysql_query($sql_position);
$row_position=mysql_fetch_array($result_position);

$sql_content = "select * from report_attach where position_id=$row_position[position_id]";
$result_content =mysql_query($sql_content);
while($row_content=mysql_fetch_array($result_content))
{


?>
<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<?php if($row_content[page_id]==1) echo '
		<div style="width:750px;height:110px;">
			<table style="margin-top:35px;margin-left:10px;float:left;">
			<tbody>
			<tr>
				<td width="45" height="45" style="border:3px solid black;font-size:16pt;text-align:center;color:000000;">
					 5
				</td>
			</tr>
			</tbody>
			</table>
			<div class="qianyan" style="float:left;width:500px;height:50px;margin-top:50px;margin-left:18px;font-size:14pt;font-weight:bold;text-align:left;color:000;">
       附件：胜任力定义 
			</div>
		</div>';
	
		$tree = explode(',',$row_content[subcompetency_id]); 
		for($index=0;$index<count($tree);$index++){ 
		
		$sql_sub_n = "select * from sub_competency_list where sub_competency_id=$tree[$index]";
		$result_sub_n =mysql_query($sql_sub_n);
		$row_sub_n=mysql_fetch_array($result_sub_n);
		?>

		
		<div class="titledefine" style="margin-top:<?php if($row_content[page_id]==1){ echo '20px';}else{ echo '70px';} ?>;font-size:13pt;">
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
				<?php echo $row_sub_n[sub_competency_name];?>
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;padding-top:20px;">
			<div style="margin-left:10px;float:left;width:20px;height:20px;margin-top:3px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></div>
			<div style="margin-left:18px;float:left;width:700px;"><?php echo $row_sub_n['describe'];?></div>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">

			<?php 
				$tree_attach = explode(';',$row_sub_n[feature]); 
				for($index_t=0;$index_t<count($tree_attach);$index_t++){ 
					echo '<div style="margin-left:10px;float:left;margin-top:10px;width:20px;height:20px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></div>
					<div style="margin-left:18px;float:left;width:700px;margin-top:5px;">'.$tree_attach[$index_t].'</div>
					<br/>
					<br/>';


				}
			?>
		

			
		</div>
		<?php 
		}
?>
		
	</div>
</div>
<?php 

}
?>
<div class="central">
<?php require("head.html") ?>
	<div style="font-size:20pt;width:750px;text-align:center;margin-top:500px;">
		<b>附件二:人格特质与认知能力报告</b>
	</div>
</div>

</body>
</html>
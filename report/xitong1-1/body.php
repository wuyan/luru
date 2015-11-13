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
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div class="shouye_title" >
			<b>上海大众汽车营销能力发展基地测评中心 </b>
		</div>
		<div class="shouye_tu">
			<img src="tu/main.png" alt="" height="141" width="700" border="0"/>
		</div>
		<div class="shouye_title" style="margin-top:70px;font-size:20pt;">
			<b>个人测评报告 </b>
		</div>
		<div class="shouye_all" style="margin-top:120px;">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       品牌:

			</div>
			<div class="shouye_v1">
       &nbsp;<?php 
			$result_addition = mysql_query("select * from user_addition where user_id='$_GET[id]' and user_info_id=4");
			$row_addition=mysql_fetch_array($result_addition);
			echo $row_addition[user_info_name];
	   ?>

			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       部门:
			</div>
			<div class="shouye_v1">
        &nbsp;<?php echo  $row[company] ?>
			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       姓名:

			</div>
			<div class="shouye_v1">
        &nbsp;<?php echo  $row[user_name] ?>
			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       日期:

			</div>
			<div class="shouye_v1">
       &nbsp;<?php  echo date("Y年m月d日",strtotime($row[ceping_date]));?>

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
       4、人格问卷与认知能力报告</div>
			<div class="title_4">呈现参试者的人格特质及推力能力表现</div>

			<div class="title_2">
       5、附件：胜任力定义
			</div>
			<div class="title_4">介绍所测评岗位的胜任力定义及行为特征。 </div>
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
			&emsp;&emsp;上海大众汽车营销能力发展基地测评中心是用来评估参试者岗位的现有胜任力水平，帮助其明确胜任岗位的能力要求以及获得进一步发展的建议。 
			<br/>
			<br/> &emsp;&emsp;个人测评报告是根据参试者参加上海大众汽车营销能力发展基地测评中心的测评结果而生成。本报告包含四个部分: 五项岗位胜任力的整体测评结果分析，每项胜任力各子项能力的测评结果分析，人格及认知能力报告描述.

			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;岗位胜任力的整体测评结果分析
			<br/>&emsp;&emsp;图表中描述了在五项胜任力上，参试者个人的得分，所有参试者的平均分以及标杆参试者的得分。此外，也对于参试者的优势以及待发展的胜任力提供了详细的参考建议。

			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;胜任力各子项能力的测评结果分析&nbsp;&nbsp;
			<br/>&emsp;&emsp;这一部分的图表对于五项胜任力所包含的每项子胜任力依次进行描述，参试者个人的得分，所有参试者的平均分以及标杆参试者的得分，以及岗位所要求的合格分和期望分。同时，对于参试者在每项子胜任力上的得分所属的能力水平以及发展建议也提供了更为详细的参考建议。
			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;人格问卷报告
			<br/>&emsp;&emsp;这份报告是关于参试者在人际风格，思维风格，应对风格，团队角色，领导风格等人格特质。参试者可以看到个人的应答结果，这些表明参试者在上述维度上的倾向。关于岗位所要求进一步了解的一些人格特质，我们也为参试者提供了更为详细的描述。其中，蓝色标出的文字是描述参试者在这些维度上的潜在优势，红色标出的文字是描述参试者在这些维度上有待发展的方面。 
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
			<div style="margin-left:62px;">上海大众汽车营销能力发展基地测评中心主要由以下六个工具组成</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;个人成就记录表 ：参试者在参加测评中心测评前独立填写这份表格，表格内容包括工作经<span style="margin-left:30px;">历，教育培训背景以及工作成就。</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;结构化访谈：测评师团队通过一系列结构化的问题，以面对面交谈的方式，来了解参试者</span>
			<span style="margin-left:30px;">在过去工作中展现的典型行为，以评估参试者所具备的胜任力。</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;情景模拟：由测评师扮演在情景中出现的角色来配合参试者完成模拟，并观察参试者在模</span>
			<span style="margin-left:30px;">拟过程中展现出来的行为，评估参试者所具备的胜任力。</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;情境挑战：由测评师向参试者叙述具有挑战性的情境内容，参试者根据此内容回答如何应</span>
			<span style="margin-left:30px;">对此挑战，测评师根据参试者的回答及展现的行为评估参试者所具备的胜任力</div>
	
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业务分析：参试者通过阅读分析虚拟的业务数据与材料，分析其中的关键事项并针对一系</span>
			<span style="margin-left:30px;">列相关业务问题作出合理的分析与判断</div>


			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;人格问卷和能力测试：通过参试者在问卷测试的表现，来评断其人格特质，推理能力等方</span>
			<span style="margin-left:30px;">面的特点。</div>
			<br/>
			<br/>
			<b>2.<span style="margin-left:50px;">计分方法 </span></b>
			<br/>
			<span style="margin-left:62px;">计分都采用“10分制”方式。测评中心的最终评定结果将综合参试者在不同活动中的表现</span><span style="margin-left:62px;">而生成。</span>
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
			'FlashVars', 'library_path=charts_library&xml_source=overall.php?id=<?php echo $_GET[id]?>', 
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
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=57");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=57";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=57 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=52");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=52";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=52 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=53");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=53";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=53 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=54");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=54";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=54 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=55");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=55";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=55 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=56");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=56";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=56 order by  `score` desc limit 1";
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
				$sql_max ="select * from score  where user_id='$_GET[id]' and sub_competency_id > 30 and sub_competency_id <= 51 and sub_competency_id != 42 and sub_competency_id != 43 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				$sql_best="select * from sub_competency_list where sub_competency_id =$row_max[sub_competency_id]"; 
				$result_best=mysql_query($sql_best);
				$row_best=mysql_fetch_array($result_best);
				echo $row_best[sub_competency_name];

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
				$sql_max ="select * from score where user_id='$_GET[id]' and sub_competency_id > 30 and sub_competency_id <= 51 order by  `score` asc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				$sql_best="select * from sub_competency_list where sub_competency_id =$row_max[sub_competency_id]"; 
				$result_best=mysql_query($sql_best);
				$row_best=mysql_fetch_array($result_best);
				echo $row_best[sub_competency_name];

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
<!---->
<!---->
<div class="central">
	<?php require("head.html") ?>
	<div class="main" style="height:auto;">
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:70px;">
      流程管理测评结果
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
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 管理业务增长
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=31");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=31";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=31 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=32");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=32";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=32 order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=number_format($row_max1[score], 0);

			$result_score2 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=33");
			$row_score2=mysql_fetch_array($result_score2);
			$score2=number_format($row_score2[score], 0);

			$sql_avg2 ="select avg(`score`) as average from score where sub_competency_id=33";
			$result_avg2=mysql_query($sql_avg2);
			$row_avg2=mysql_fetch_array($result_avg2);
			$avg2=$row_avg2[average];

			$sql_max2 ="select * from score  where sub_competency_id=33 order by  `score` desc limit 1";
			$result_max2=mysql_query($sql_max2);
			$row_max2=mysql_fetch_array($result_max2);
			$max2=number_format($row_max2[score], 0);
			?>
				<v:line from="
				<?PHP
						$startx=10+26.8*($score-1);
						echo $startx;

				?>
				,44" to="
				<?PHP
						$startx=10+26.8*($score1-1);
						echo $startx;

				?>
				,122" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg-1);
						echo $startx;

				?>
				
				,44" to="
				<?PHP
						$startx=10+27.2*($avg1-1);
						echo $startx;

				?>
				,122" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max-1);
						echo $startx;

				?>
				,44" to="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>				
				,122" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>



				<v:line from="
				<?PHP
						$startx=10+26.8*($score1-1);
						echo $startx;

				?>
				,130" to="
				<?PHP
						$startx=10+26.8*($score2-1);
						echo $startx;

				?>
				,207" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg1-1);
						echo $startx;

				?>
				
				,130" to="
				<?PHP
						$startx=10+27.2*($avg2-1);
						echo $startx;

				?>
				,207" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>
				,130" to="
				<?PHP
						$startx=10+26.8*($max2-1);
						echo $startx;

				?>				
				,207" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<?php include("table.php");?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=31");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=31";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=31 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 计划与组织
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=32");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=32";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];



			$sql_max ="select * from score  where sub_competency_id=32 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0); 

			include("table.php");
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=32");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=32";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
				<?php
				$sql_max ="select * from score  where sub_competency_id=32 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 管理客户满意度

			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=33");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=33";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=33 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0); 
		
			include("table.php");
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=33");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=33";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=33 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
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
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:80px;">
      流程管理胜任力总结
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 管理业务增长
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 	<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=31");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(31, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 计划与组织
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 	<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=32");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(32, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 管理客户满意度
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 	<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=33");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(33, $row_score[score])
				?>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>
<!---->
<!---->
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
			'FlashVars', 'library_path=charts_library&xml_source=tp_s.php?id=<?php echo $_GET[id]?>', 
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
      流程管理胜任力发展建议
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 管理业务增长
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=31");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(31, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 计划与组织
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=32");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(32, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 管理客户满意度
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=33");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(33, $row_score[score])
				?>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:70px;">
      资源运用测评结果
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
					<td>
						 得分
					</td>
				</tr>
				</tbody>
				</table>
				<table width="106%" height="40" style="text-align:center;color:black;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr height="40">
					<td style="background-color:#F2F2F2;" width="8%">
						 1
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 2
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 3
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 4
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 5
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 6
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 7
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 8
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 9
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
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
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 财务运用
			</td>
			<td style="width:250px;border:0px solid black;">
										<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=34");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=34";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=34 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=35");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=35";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=35 order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=number_format($row_max1[score], 0);


			?>
				<v:line from="
				<?PHP
						$startx=10+27*($score-1);
						echo $startx;

				?>
				,44" to="
				<?PHP
						$startx=10+27*($score1-1);
						echo $startx;

				?>
				,122" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.3*($avg-1);
						echo $startx;

				?>
				
				,44" to="
				<?PHP
						$startx=10+27.3*($avg1-1);
						echo $startx;

				?>
				,122" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max-1);
						echo $startx;

				?>
				,44" to="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>				
				,122" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<?php include("table.php"); ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=34");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=34";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=34 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 资源规划
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=35");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=35";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=35 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);
			?>
			<?php include("table.php"); ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=35");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=35";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=35 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		</tbody>
		</table>
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
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:80px;">
      资源运用胜任力总结
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 财务运用
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=34");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(34, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 资源规划
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=35");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(35, $row_score[score])
				?>
			</td>
		</tr>
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
			'FlashVars', 'library_path=charts_library&xml_source=ur_s.php?id=<?php echo $_GET[id]?>', 
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
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:80px;">
      资源运用胜任力发展建议
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 财务运用
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=34");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(34, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 资源规划
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=35");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(35, $row_score[score])
				?>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:70px;">
      人员激励测评结果
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
					<td>
						 得分
					</td>
				</tr>
				</tbody>
				</table>
				<table width="106%" height="40" style="text-align:center;color:black;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr height="40">
					<td style="background-color:#F2F2F2;" width="8%">
						 1
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 2
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 3
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 4
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 5
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 6
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 7
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 8
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 9
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
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
		<tr style="height:50px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 沟通
			</td>
			<td style="width:250px;border:0px solid black;">
		<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=36");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=36";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=36 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=37");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=37";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=37 order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=number_format($row_max1[score], 0);

			$result_score2 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=38");
			$row_score2=mysql_fetch_array($result_score2);
			$score2=number_format($row_score2[score], 0);

			$sql_avg2 ="select avg(`score`) as average from score where sub_competency_id=38";
			$result_avg2=mysql_query($sql_avg2);
			$row_avg2=mysql_fetch_array($result_avg2);
			$avg2=$row_avg2[average];

			$sql_max2 ="select * from score  where sub_competency_id=38 order by  `score` desc limit 1";
			$result_max2=mysql_query($sql_max2);
			$row_max2=mysql_fetch_array($result_max2);
			$max2=number_format($row_max2[score], 0);
			?>
				<v:line from="
				<?PHP
						$startx=10+26.8*($score-1);
						echo $startx;

				?>
				,44" to="
				<?PHP
						$startx=10+26.8*($score1-1);
						echo $startx;

				?>
				,122" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg-1);
						echo $startx;

				?>
				
				,44" to="
				<?PHP
						$startx=10+27.2*($avg1-1);
						echo $startx;

				?>
				,122" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max-1);
						echo $startx;

				?>
				,44" to="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>				
				,122" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>



				<v:line from="
				<?PHP
						$startx=10+26.8*($score1-1);
						echo $startx;

				?>
				,130" to="
				<?PHP
						$startx=10+26.8*($score2-1);
						echo $startx;

				?>
				,207" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg1-1);
						echo $startx;

				?>
				
				,130" to="
				<?PHP
						$startx=10+27.2*($avg2-1);
						echo $startx;

				?>
				,207" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>
				,130" to="
				<?PHP
						$startx=10+26.8*($max2-1);
						echo $startx;

				?>				
				,207" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<?php include("table.php");?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=36");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=36";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=36 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 人员鼓励
			</td>
			<td style="width:250px;border:0px solid black;">
		<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=37");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=37";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=37 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=37");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=37";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=37 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 人员发展
			</td>
			<td style="width:250px;border:0px solid black;">
		<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=38");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=38";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=38 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
			include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=38");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=38";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=38 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		</tbody>
		</table>
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
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:50px;">
      人员激励胜任力总结
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 沟通
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=36");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(36, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 人员鼓励
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=37");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(37, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 人员发展
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=38");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(38, $row_score[score])
				?>
			</td>
		</tr>
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
			'FlashVars', 'library_path=charts_library&xml_source=ip_s.php?id=<?php echo $_GET[id]?>', 
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
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:50px;">
      人员激励胜任力发展建议
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 沟通
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=36");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(36, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 人员鼓励
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=37");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(37, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 人员发展
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=38");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(38, $row_score[score])
				?>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:70px;">
      团队合作测评结果
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
					<td>
						 得分
					</td>
				</tr>
				</tbody>
				</table>
				<table width="106%" height="40" style="text-align:center;color:black;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr height="40">
					<td style="background-color:#F2F2F2;" width="8%">
						 1
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 2
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 3
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 4
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 5
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 6
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 7
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 8
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 9
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
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
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 支持与协作
			</td>
			<td style="width:250px;border:0px solid black;">
		<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=39");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=39";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=39 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=40");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=40";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=40 order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=number_format($row_max1[score], 0);

			$result_score2 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=41");
			$row_score2=mysql_fetch_array($result_score2);
			$score2=number_format($row_score2[score], 0);

			$sql_avg2 ="select avg(`score`) as average from score where sub_competency_id=41";
			$result_avg2=mysql_query($sql_avg2);
			$row_avg2=mysql_fetch_array($result_avg2);
			$avg2=$row_avg2[average];

			$sql_max2 ="select * from score  where sub_competency_id=41 order by  `score` desc limit 1";
			$result_max2=mysql_query($sql_max2);
			$row_max2=mysql_fetch_array($result_max2);
			$max2=number_format($row_max2[score], 0);
			?>
				<v:line from="
				<?PHP
						$startx=10+26.8*($score-1);
						echo $startx;

				?>
				,44" to="
				<?PHP
						$startx=10+26.8*($score1-1);
						echo $startx;

				?>
				,122" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg-1);
						echo $startx;

				?>
				
				,44" to="
				<?PHP
						$startx=10+27.2*($avg1-1);
						echo $startx;

				?>
				,122" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max-1);
						echo $startx;

				?>
				,44" to="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>				
				,122" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>



				<v:line from="
				<?PHP
						$startx=10+26.8*($score1-1);
						echo $startx;

				?>
				,130" to="
				<?PHP
						$startx=10+26.8*($score2-1);
						echo $startx;

				?>
				,207" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg1-1);
						echo $startx;

				?>
				
				,130" to="
				<?PHP
						$startx=10+27.2*($avg2-1);
						echo $startx;

				?>
				,207" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>
				,130" to="
				<?PHP
						$startx=10+26.8*($max2-1);
						echo $startx;

				?>				
				,207" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<?php include("table.php");?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=39");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=39";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=39 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 冲突管理
			</td>
			<td style="width:250px;border:0px solid black;">
		<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=40");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=40";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=40 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=40");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=40";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=40 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 发展关系
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=41");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=41";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=41 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=41");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=41";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=41 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		</tbody>
		</table>
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
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:80px;">
      团队合作胜任力总结
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 支持与协作
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=39");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(39, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 冲突管理
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=40");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(40, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 发展关系
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=41");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(41, $row_score[score])
				?>
			</td>
		</tr>
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
			'FlashVars', 'library_path=charts_library&xml_source=ts_s.php?id=<?php echo $_GET[id]?>', 
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
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:80px;">
      团队合作胜任力发展建议
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 支持与协作
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				  <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=39");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(39, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 冲突管理
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
			 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=40");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(40, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 发展关系
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=41");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(41, $row_score[score])
				?>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:70px;">
      自我管理测评结果
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
					<td>
						 得分
					</td>
				</tr>
				</tbody>
				</table>
				<table width="106%" height="40" style="text-align:center;color:black;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr height="40">
					<td style="background-color:#F2F2F2;" width="8%">
						 1
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 2
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 3
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 4
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 5
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 6
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 7
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 8
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 9
					</td>
					<td style="background-color:#F2F2F2;" width="8%">
						 10
					</td>
				</tr>
				</tbody>
				</table>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 个人得分<br/>Participan
			</td>
			<td style="width:100px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 平均得分<br/>Average
			</td>
			<td style="width:100px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 标杆得分<br/>Benchmark
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 诚信
			</td>
			<td style="width:250px;border:0px solid black;">
						<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=42");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=42";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=42 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=43");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=43";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=43 order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=number_format($row_max1[score], 0);

			$result_score2 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=44");
			$row_score2=mysql_fetch_array($result_score2);
			$score2=number_format($row_score2[score], 0);

			$sql_avg2 ="select avg(`score`) as average from score where sub_competency_id=44";
			$result_avg2=mysql_query($sql_avg2);
			$row_avg2=mysql_fetch_array($result_avg2);
			$avg2=$row_avg2[average];

			$sql_max2 ="select * from score  where sub_competency_id=44 order by  `score` desc limit 1";
			$result_max2=mysql_query($sql_max2);
			$row_max2=mysql_fetch_array($result_max2);
			$max2=number_format($row_max2[score], 0);

			$result_score3 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=45");
			$row_score3=mysql_fetch_array($result_score3);
			$score3=number_format($row_score3[score], 0);

			$sql_avg3 ="select avg(`score`) as average from score where sub_competency_id=45";
			$result_avg3=mysql_query($sql_avg3);
			$row_avg3=mysql_fetch_array($result_avg3);
			$avg3=$row_avg3[average];

			$sql_max3 ="select * from score  where sub_competency_id=45 order by  `score` desc limit 1";
			$result_max3=mysql_query($sql_max3);
			$row_max3=mysql_fetch_array($result_max3);
			$max3=number_format($row_max3[score], 0);


			$result_score4 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=46");
			$row_score4=mysql_fetch_array($result_score4);
			$score4=number_format($row_score4[score], 0);

			$sql_avg4 ="select avg(`score`) as average from score where sub_competency_id=46";
			$result_avg4=mysql_query($sql_avg4);
			$row_avg4=mysql_fetch_array($result_avg4);
			$avg4=$row_avg4[average];

			$sql_max4 ="select * from score  where sub_competency_id=46 order by  `score` desc limit 1";
			$result_max4=mysql_query($sql_max4);
			$row_max4=mysql_fetch_array($result_max4);
			$max4=number_format($row_max4[score], 0);


			$result_score5 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=47");
			$row_score5=mysql_fetch_array($result_score5);
			$score5=number_format($row_score5[score], 0);

			$sql_avg5 ="select avg(`score`) as average from score where sub_competency_id=47";
			$result_avg5=mysql_query($sql_avg5);
			$row_avg5=mysql_fetch_array($result_avg5);
			$avg5=$row_avg5[average];

			$sql_max5 ="select * from score  where sub_competency_id=47 order by  `score` desc limit 1";
			$result_max5=mysql_query($sql_max5);
			$row_max5=mysql_fetch_array($result_max5);
			$max5=number_format($row_max5[score], 0);



			$result_score6 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=48");
			$row_score6=mysql_fetch_array($result_score6);
			$score6=number_format($row_score6[score], 0);

			$sql_avg6 ="select avg(`score`) as average from score where sub_competency_id=48";
			$result_avg6=mysql_query($sql_avg6);
			$row_avg6=mysql_fetch_array($result_avg6);
			$avg6=$row_avg6[average];

			$sql_max6 ="select * from score  where sub_competency_id=48 order by  `score` desc limit 1";
			$result_max6=mysql_query($sql_max6);
			$row_max6=mysql_fetch_array($result_max6);
			$max6=number_format($row_max6[score], 0);


			
			$result_score7 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=49");
			$row_score7=mysql_fetch_array($result_score7);
			$score7=number_format($row_score7[score], 0);

			$sql_avg7 ="select avg(`score`) as average from score where sub_competency_id=49";
			$result_avg7=mysql_query($sql_avg7);
			$row_avg7=mysql_fetch_array($result_avg7);
			$avg7=$row_avg7[average];

			$sql_max7 ="select * from score  where sub_competency_id=49 order by  `score` desc limit 1";
			$result_max7=mysql_query($sql_max7);
			$row_max7=mysql_fetch_array($result_max7);
			$max7=number_format($row_max7[score], 0);


			
			$result_score8 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=50");
			$row_score8=mysql_fetch_array($result_score8);
			$score8=number_format($row_score8[score], 0);

			$sql_avg8 ="select avg(`score`) as average from score where sub_competency_id=50";
			$result_avg8=mysql_query($sql_avg8);
			$row_avg8=mysql_fetch_array($result_avg8);
			$avg8=$row_avg8[average];

			$sql_max8 ="select * from score  where sub_competency_id=50 order by  `score` desc limit 1";
			$result_max8=mysql_query($sql_max8);
			$row_max8=mysql_fetch_array($result_max8);
			$max8=number_format($row_max8[score], 0);



			
			$result_score9 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=51");
			$row_score9=mysql_fetch_array($result_score9);
			$score9=number_format($row_score9[score], 0);

			$sql_avg9 ="select avg(`score`) as average from score where sub_competency_id=51";
			$result_avg9=mysql_query($sql_avg9);
			$row_avg9=mysql_fetch_array($result_avg9);
			$avg9=$row_avg9[average];

			$sql_max9 ="select * from score  where sub_competency_id=51 order by  `score` desc limit 1";
			$result_max9=mysql_query($sql_max9);
			$row_max9=mysql_fetch_array($result_max9);
			$max9=number_format($row_max9[score], 0);
			?>
				<v:line from="
				<?PHP
						$startx=10+27*($score-1);
						echo $startx;

				?>
				,44" to="
				<?PHP
						$startx=10+27*($score1-1);
						echo $startx;

				?>
				,122" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg-1);
						echo $startx;

				?>
				
				,44" to="
				<?PHP
						$startx=10+27.2*($avg1-1);
						echo $startx;

				?>
				,122" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max-1);
						echo $startx;

				?>
				,44" to="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>				
				,122" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>



				<v:line from="
				<?PHP
						$startx=10+27*($score1-1);
						echo $startx;

				?>
				,130" to="
				<?PHP
						$startx=10+27*($score2-1);
						echo $startx;

				?>
				,207" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg1-1);
						echo $startx;

				?>
				
				,130" to="
				<?PHP
						$startx=10+27.2*($avg2-1);
						echo $startx;

				?>
				,207" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>
				,130" to="
				<?PHP
						$startx=10+26.8*($max2-1);
						echo $startx;

				?>				
				,207" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+27*($score2-1);
						echo $startx;

				?>
				,213" to="
				<?PHP
						$startx=10+27*($score3-1);
						echo $startx;

				?>
				,291" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+27.2*($avg2-1);
						echo $startx;

				?>
				
				,213" to="
				<?PHP
						$startx=10+27.2*($avg3-1);
						echo $startx;

				?>
				,291" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max2-1);
						echo $startx;

				?>
				,213" to="
				<?PHP
						$startx=10+26.8*($max3-1);
						echo $startx;

				?>				
				,291" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>


				<v:line from="
				<?PHP
						$startx=10+27*($score3-1);
						echo $startx;

				?>
				,296" to="
				<?PHP
						$startx=10+27*($score4-1);
						echo $startx;

				?>
				,375" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+27.2*($avg3-1);
						echo $startx;

				?>
				
				,296" to="
				<?PHP
						$startx=10+27.2*($avg4-1);
						echo $startx;

				?>
				,375" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max3-1);
						echo $startx;

				?>
				,296" to="
				<?PHP
						$startx=10+26.8*($max4-1);
						echo $startx;

				?>				
				,375" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+27*($score4-1);
						echo $startx;

				?>
				,379" to="
				<?PHP
						$startx=10+27*($score5-1);
						echo $startx;

				?>
				,459" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+27.2*($avg4-1);
						echo $startx;

				?>
				
				,379" to="
				<?PHP
						$startx=10+27.2*($avg5-1);
						echo $startx;

				?>
				,459" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max4-1);
						echo $startx;

				?>
				,379" to="
				<?PHP
						$startx=10+26.8*($max5-1);
						echo $startx;

				?>				
				,459" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>


				<v:line from="
				<?PHP
						$startx=10+27*($score5-1);
						echo $startx;

				?>
				,463" to="
				<?PHP
						$startx=10+27*($score6-1);
						echo $startx;

				?>
				,543" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+27.2*($avg5-1);
						echo $startx;

				?>
				
				,463" to="
				<?PHP
						$startx=10+27.2*($avg6-1);
						echo $startx;

				?>
				,543" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max5-1);
						echo $startx;

				?>
				,463" to="
				<?PHP
						$startx=10+26.8*($max6-1);
						echo $startx;

				?>				
				,543" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>






				<v:line from="
				<?PHP
						$startx=10+27*($score6-1);
						echo $startx;

				?>
				,547" to="
				<?PHP
						$startx=10+27*($score7-1);
						echo $startx;

				?>
				,627" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+27.2*($avg6-1);
						echo $startx;

				?>
				
				,547" to="
				<?PHP
						$startx=10+27.2*($avg7-1);
						echo $startx;

				?>
				,627" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max6-1);
						echo $startx;

				?>
				,547" to="
				<?PHP
						$startx=10+26.8*($max7-1);
						echo $startx;

				?>				
				,627" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>




				
				<v:line from="
				<?PHP
						$startx=10+27*($score7-1);
						echo $startx;

				?>
				,631" to="
				<?PHP
						$startx=10+27*($score8-1);
						echo $startx;

				?>
				,711" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+27.2*($avg7-1);
						echo $startx;

				?>
				
				,631" to="
				<?PHP
						$startx=10+27.2*($avg8-1);
						echo $startx;

				?>
				,711" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max7-1);
						echo $startx;

				?>
				,631" to="
				<?PHP
						$startx=10+26.8*($max8-1);
						echo $startx;

				?>				
				,711" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>




				<v:line from="
				<?PHP
						$startx=10+27*($score8-1);
						echo $startx;

				?>
				,715" to="
				<?PHP
						$startx=10+27*($score9-1);
						echo $startx;

				?>
				,795" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+27.2*($avg8-1);
						echo $startx;

				?>
				
				,715" to="
				<?PHP
						$startx=10+27.2*($avg9-1);
						echo $startx;

				?>
				,795" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max8-1);
						echo $startx;

				?>
				,715" to="
				<?PHP
						$startx=10+26.8*($max9-1);
						echo $startx;

				?>				
				,795" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<?php include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=42");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=42";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=42 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 忠诚度
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=43");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=43";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=43 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=43");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=43";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=43 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 自我学习与发展
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=44");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=44";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=44 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=44");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=44";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=44 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 时间管理
			</td>
			<td style="width:250px;border:0px solid black;">
		<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=45");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=45";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=45 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=45");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=45";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=45 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 坚韧性
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=46");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=46";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=46 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=46");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=46";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=46 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 责任感
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=47");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=47";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=47 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=47");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=47";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=47 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 高附加值员工

			</td>
			<td style="width:250px;border:0px solid black;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=48");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=48";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=48 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=48");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=48";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=48 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>

		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 主动性
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=49");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=49";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=49 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=49");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=49";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=49 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>

		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 说服力
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=50");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=50";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=50 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=50");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=50";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=50 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 判断力
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=51");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=51";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=51 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=51");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=51";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=51 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		</tbody>
		</table>
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
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:70px;">
      自我管理胜任力总结（1）
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 诚信
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=42");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(42, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 忠诚度
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=43");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(43, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 自我学习与发展
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=44");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(44, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 时间管理
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=45");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(45, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 坚韧性
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=46");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(46, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 责任感
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=47");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(47, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 高附加值员工
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=48");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(48, $row_score[score])
				?>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:70px;">
      自我管理胜任力总结（2）
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 主动性
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=49");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(49, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 说服力
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=50");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(50, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 判断力
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=51");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(51, $row_score[score])
				?>
			</td>
		</tr>
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
			'FlashVars', 'library_path=charts_library&xml_source=ms_s.php?id=<?php echo $_GET[id]?>', 
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
		</div>

		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:50px;">
      自我管理胜任力发展建议（1）
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 自我学习与发展
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=44");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(44, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				时间管理
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=45");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(45, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 坚韧性
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=46");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(46, $row_score[score])
				?>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>
<div class="central">
<?php require("head.html") ?>
	<div class="main" style="height:auto;">
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:70px;">
      自我管理胜任力发展建议（2）
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
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 责任感
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=47");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(47, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 高附加值员工
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=48");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(48, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 主动性
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=49");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(49, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 说服力
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=50");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(50, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 判断力
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=51");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(51, $row_score[score])
				?>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</div>

<div class="central">
<?php require("head.html") ?>
	<div class="main">
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
		</div>
		<div class="titledefine" style="margin-top:20px;font-size:13pt;">
      流程管理胜任力
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       管理业务增长 
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">结合区域市场及现有客户的实际情况，制定科学与差异化的营销及经营方式，推动组织的业务增长与发展
</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">研究目标和潜在客户、竞争对手、及区域的供需情况，寻求新的业务增长点，并分析增长的可行性</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">关注客户生命周期，提高客户体验，实施积极的客户关系管理</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">制定差异化的营销策略，高效推动业务增长与发展</span>

			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       计划与组织
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">为达成目标，制定具体的行动及跟进方案，并合理组织人员、时间、资金等各种资源以确保高效率地实现行动计划及目标
</span>

		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">将笼统的战略和意向，转化成明确的目标，预见障碍并建立预备方案，制定可操作的行动计划</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">根据目标研究行动策略，并进行任务分解，为各种目标设立优先级，并积极关注优先事件</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对所分解的任务按照逻辑关系和效率原则进行组合，确定所需要的资源，并合理地进行资源分配</span>
			<br/>
			<br/>
		</div>
				<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       管理客户满意度
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">定期收集，分析客户满意度信息，不断改进与完善相应的运行效果，持续提升服务质量，以持续满足和超越客户需求
</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">积极研究客户需求，并基于根本原因找出影响客户满意的因素</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够基于分析，通过有效的方法提升客户满意</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">具备客户生命周期管理的意识，持续改进与优化，以满足和超越客户不断提升的期望</span>

			<br/>
			<br/>
		</div>
	</div>
</div>



<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine" style="margin-top:70px;font-size:13pt;">
      资源运用胜任力
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       财务运用 
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过对财务数据的有效分析与测算，为组织策略的制定及执行提供合理的依据与支持</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">具备一定的财务知识，能够进行常用财务指标的计算</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够基于财务指标的有效分析，正确提供组织管理运营的相关建议</span>


			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       资源规划
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够基于工作任务，明确所需的资源，并对资源进行合理的整合配置，以确保任务的高效完成
</span>

		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够对目前资源的使用效率进行合理分析</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">有效整合现有资源，或积极寻求资源支持，力争以最小的资源投入获得最大的效益</span>
			<br/>
			<br/>
		</div>
	</div>
</div>




<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine" style="margin-top:70px;font-size:13pt;">
      人员激励胜任力
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       人员鼓励
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">为达成组织的愿景和目标，有效激发他人的动机与潜能，持续赢得他人的承诺，并能够持续给予支持与肯定
</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">了解激励人心的重要性，并能提出明确的愿景目标与他人分享</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">主动解除个人和团队可能的顾虑，提供相应的资源并移除相应的障碍，以赢得员工的承诺</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够制定较为完整的行动方案，并持续跟进执行情况，提供必要的支持与肯定及时鼓舞团队的士气</span>

			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       沟通
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够明确沟通目标，理解他人的情感、利益与需求，有效地运用沟通的技巧和方法，创造良好的沟通氛围，以达成共识并</span>
			<span style="margin-left:40px;">培养互信
</span>

		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够明确沟通目标，并理解他人的情感、利益与需求，有针对性地进行沟通</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">有效运用提问、聆听等技巧主动进行沟通</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够创建积极的沟通氛围，达成共识</span>
			<br/>
			<br/>
		</div>
				<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       人员发展
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过经验分享、培训、教练辅导等途径和手段发展他人的知识、技能与态度，促动他人自我学习与反思，以适应当前以及</span>
			<span style="margin-left:40px;">未来的工作需要，持续提升绩效表现
</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">有效评估他人短板或需要改变的行为</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">提供人员发展的建议，如经验分享、培训、教练辅导、轮岗等，制定完整的人员发展计划</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">积极地跟进执行的过程，确保实现能力的提升</span>

			<br/>
			<br/>
		</div>
	</div>
</div>



<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine" style="margin-top:70px;font-size:13pt;">
      团队合作胜任力
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       发展关系
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">与他人建立积极的工作关系，并通过有效的方式维系良好的关系或关系网，以促进工作或任务的完成
</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">具备人际敏感度，能主动地了解他人的需求，并提供他人所需的支持与帮助</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">与他人建立融洽的工作和私人关系，并能促进关系的发展</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够赢得他人尊重和信赖，维系与他人的长期良好的合作关系</span>

			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       支持与协作
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能通过业务上的共同目标支持、鼓励部门内、跨部门间的合作，促进业务的高效完成
</span>

		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">理解合作的重要性，能基于共同的目标支持、鼓励部门内部及跨部门间的合作</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">有主动分享相关信息，促进有效沟通与交流，积极地向他人提供配合与支持</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过建立、优化相关工作流程，确保有效地推进合作</span>
			<br/>
			<br/>
		</div>
				<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       冲突管理
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能明确冲突点及其原因，通过有效沟通等方式协商解决冲突的计划与方法，并能够持续跟进，以确保有效解决冲突
</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">分析、辨别冲突点，及其产生的根本原因</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能与冲突各方协商确定解决冲突的计划与方法，并得到各方的认同</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">持续跟进，并能够持续改进优化原有的流程或制度，以有效预防避免冲突的再次发生</span>

			<br/>
			<br/>
		</div>
	</div>
</div>




<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine" style="margin-top:70px;font-size:13pt;">
      自我管理胜任力(1)
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       自我学习与发展
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">展示出很强的自我发展意愿；通过有针对性的方式与途径，丰富知识，提升职业技能，确保自身的持续提升，保持职场竞</span>
			<span style="margin-left:40px;">争力
</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">善于分析自身优势和短板，将个人学习目标与职业生涯规划相结合，并制定相应的学习计划
</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">根据自身情况积极利用多种途径为自己创造学习机会，不断尝试有效的、适合自己的学习方法</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对专业领域的信息保持敏感度和好奇心，对知识有强烈的渴求，不断寻找和尝试新技术以保持竞争力</span>

			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       成为高附加值员工
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">设定富有挑战性的前瞻目标，坚持不懈地追求工作的高绩效，超越他人的期望和工作的需求，持续地为团队创造价值
</span>

		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">愿意设定富有挑战性的前瞻目标，以绩效为导向，并以目标完成作为解决问题或采取行动的驱动力</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">在岗位要求的基础上寻找为组织增值的机会，通过创新、有效的解决方案，主动采取行动以实现增值</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对自身工作拥有主人翁精神，勇于承担责任，在工作中寻求、利用和整合一切可能的资源以克服障碍或挑战更高的目标</span>
			<br/>
			<br/>
		</div>
				<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       时间管理
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">以原则为中心并与自身角色结合，从大量的任务中排定优先次序，制定时间规划，定期监控、评估与调整，以便有效地完</span>
			<span style="margin-left:40px;">成既定目标，并从既有时间中获得最大化结果
</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">以原则为中心对工作任务进行合理规划，评估任务的重要性和紧急性，排定优先次序，分配任务时间</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">自律而有责任感地执行时间规划，定期监控与评估规划执行的情况，有效管理干扰，减少时间浪费</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">有效处理突发情况，并根据实际情况，及时调整原有时间安排，保证工作的连续性与完成率</span>

			<br/>
			<br/>
		</div>
	</div>
</div>



<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine" style="margin-top:70px;font-size:13pt;">
      自我管理胜任力(2)
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       说服力
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">在有效把握他人需求的基础上，巧妙地运用各种说服策略与手段，直接作用于人的情绪、价值观、规则和信念，从而影响</span>
			<span style="margin-left:40px;">人的心态和思想，让他人接受某个想法、计划、活动或产品，并采取行动

</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过对他人行为、偏好和需求有效的观察、分析和评估，对他人的利益和驱动力做出良好的判断
</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">基于他人的需求发展出合适的主张或建议，并说服他人接受这一主张或建议，以满足和超越其需求</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">寻找创新性的说服策略进行影响和说服，解除他人的顾虑与抗拒，影响他人的心态和思想并激发行动</span>

			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       主动性
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">在没有被要求的情况下，发现需求，付出超过工作预期和所属职能层级的努力，自发地采取行动以实现目标
</span>

		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">不需要他人提出要求，能够意识到当前的具体情况（如被忽略的机会、风险隐患等）</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能主动积极地为团队提出建设性意见或警示，全面系统地完善工作目标或计划</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够主动付出超过工作预期和所属职能层级的努力</span>
			<br/>
			<br/>
		</div>
				<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       责任感
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对工作认真负责自觉主动的做好岗位分内的工作，能够为分配给自己的任务担负责任，不断推动自己展开行动以达成自我</span>
			<span style="margin-left:40px;">设定的标准
</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对工作尽心尽责，细致认真，有条理地开展工作，减少和避免工作中的差错</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">自我设定较高的工作质量要求，并对所设定的高要求负责，不断提升工作质量</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">有效处理突发情况，并根据实际情况，及时调整原有时间安排，保证工作的连续性与完成率</span>

			<br/>
			<br/>
		</div>
	</div>
</div>




<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine" style="margin-top:70px;font-size:13pt;">
      自我管理胜任力(3)
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       坚韧性
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">在实现计划目标的过程当中始终坚持不懈，从失败或者错误的挫折中很快恢复斗志并保持决心，并从失败或者错误中吸取</span>
			<span style="margin-left:40px;">教训，继续专注在目标的达成上，坚持完成所从事的任务。
</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">调整自己，从挫折中走出来的能力
</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">关注成果，努力不懈直至任务达成</span>
			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
		判断力
			</div>
		</div>
		<div class="define">
			<div style="margin-left:315px;margin-top:5px;float:left;">
       定义
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:70px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过逻辑地分析和评估事件的行为，而做出客观的抉择
</span>

		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过运用过去的经验、常识和规则，能够快速地确定现状或问题的关键点</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">基于逻辑地分析，做出合理、客观的结论</span>
			<br/>
			<br/>
		</div>
</div>
</div>

</body>
</html>
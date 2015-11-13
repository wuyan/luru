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
			<b>个人测评报告</b>
		</div>
		<div class="shouye_all" style="margin-top:120px;">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       品牌:
			
			</div>
			<div class="shouye_v1">
			  &nbsp;<?php 
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
			&emsp;&emsp;上海大众汽车营销能力发展基地测评中心是用来评估参试者岗位的现有胜任力水平，帮助其明确胜任岗位的能力要求以及获得进一步发展的建议。 
			<br/>
			<br/> &emsp;&emsp;个人测评报告是根据参试者参加上海大众汽车营销能力发展基地测评中心的测评结果而生成。本报告包含三个部分: 五项岗位胜任力的整体测评结果分析，每项胜任力各子项能力的测评结果分析，人格及认知能力报告描述。

			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;岗位胜任力的整体测评结果分析
			<br/>&emsp;&emsp;图表中描述了在五项胜任力上，参试者个人的得分，所有参试者的平均分以及标杆参试者的得分。此外，也对于参试者的优势以及待发展的胜任力提供了详细的参考建议。

			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;胜任力各子项能力的测评结果分析&nbsp;&nbsp;
			<br/>&emsp;&emsp;这一部分的图表对于五项胜任力所包含的每项子胜任力依次进行描述，参试者个人的得分，所有参试者的平均分以及标杆参试者的得分，以及岗位所要求的合格分和期望分。同时，对于参试者在每项子胜任力上的得分所属的能力水平以及发展建议也提供了更为详细的参考建议。
			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;人格问卷报告
			<br/>&emsp;&emsp;这份报告通过人格特质和认知能力测试结果分析，对参试者典型思维方式和人格特质进行说明和描述，希望通过这份报告帮助参试者了解个人人格特质与行为表现方面的特点，并结合岗位或工作需要不断进行思考。
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
			<div style="margin-left:62px;">上海大众汽车营销能力发展基地测评中心主要由以下五个工具组成</div>
			<div style="margin-left:35px;margin-top:15px;width:665px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;个人成就记录表 ：参试者在参加测评中心测评前独立填写这份表格，表格内容包括工<span style="margin-left:30px;">作经历，教育培训背景以及工作成就。</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/><span style="margin-left:20px;"></span>结构化访谈：测评师团队通过一系列结构化的问题，以面对面交谈的方式，来了解参试者</span>
			<span style="margin-left:30px;">在过去工作中展现的典型行为，以评估参试者所具备的胜任力。</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;案例分析：参试者通过阅读分析虚拟的业务数据与材料，回答相关案例问题作出合理的分<span style="margin-left:30px;">析与判断。</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业务简报汇报：参试者通过阅读一系列的虚拟的业务材料，整理简报汇报的提纲，以书面<span style="margin-left:30px;">及口头的方式汇报给测评师团队模拟的管理层。</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;人格问卷与认知能力测试：通过参试者在问卷测试的表现，来评断其人格特质，推理能力</span>
			<span style="margin-left:30px;">等方面的特点。</div>
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
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=1 and position_id=17");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=1 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where position_id='17' and competency_id=1 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=2 and position_id=17");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=2 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where competency_id=2  and position_id='17'  order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=3 and position_id=17");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=3 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where competency_id=3  and position_id='17'  order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=4 and position_id=17");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=4 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where competency_id=4  and position_id='17'  order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=5 and position_id=17");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=5 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where competency_id=5  and position_id='17'  order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score_competency where user_id='$row[user_id]' and competency_id=6 and position_id=17");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=6 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_competency where competency_id=6  and position_id='17'  order by  `score` desc limit 1";
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
				$sql_max ="select * from score  where user_id='$row[user_id]' and position_id='17' order by  `score` desc limit 1";
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
				$sql_max ="select * from score where user_id='$row[user_id]' and position_id='17' order by  `score` asc limit 1";
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
<!---->
<!---->
<div class="central">
	<?php require("head.html") ?>
	<div class="main" style="height:auto;">
		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:70px;">
      流程管理与资源运用测评结果
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
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 计划与控制
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=59");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=59 and position_id='17'";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=59 and position_id='17' order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=42");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=42 and position_id='17'";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=42  and position_id='17' order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=number_format($row_max1[score], 0);

			$result_score2 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=4");
			$row_score2=mysql_fetch_array($result_score2);
			$score2=number_format($row_score2[score], 0);

			$sql_avg2 ="select avg(`score`) as average from score where sub_competency_id=4 and position_id='17'";
			$result_avg2=mysql_query($sql_avg2);
			$row_avg2=mysql_fetch_array($result_avg2);
			$avg2=$row_avg2[average];

			$sql_max2 ="select * from score  where sub_competency_id=4 and position_id='17' order by  `score` desc limit 1";
			$result_max2=mysql_query($sql_max2);
			$row_max2=mysql_fetch_array($result_max2);
			$max2=number_format($row_max2[score], 0);


			$result_score3 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=44");
			$row_score3=mysql_fetch_array($result_score3);
			$score3=number_format($row_score3[score], 0);

			$sql_avg3 ="select avg(`score`) as average from score where sub_competency_id=44 and position_id='17'";
			$result_avg3=mysql_query($sql_avg3);
			$row_avg3=mysql_fetch_array($result_avg3);
			$avg3=$row_avg3[average];

			$sql_max3 ="select * from score  where sub_competency_id=44 and position_id='17' order by  `score` desc limit 1";
			$result_max3=mysql_query($sql_max3);
			$row_max3=mysql_fetch_array($result_max3);
			$max3=number_format($row_max3[score], 0);


			$result_score4 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=60");
			$row_score4=mysql_fetch_array($result_score4);
			$score4=number_format($row_score4[score], 0);

			$sql_avg4 ="select avg(`score`) as average from score where sub_competency_id=60 and position_id='17'";
			$result_avg4=mysql_query($sql_avg4);
			$row_avg4=mysql_fetch_array($result_avg4);
			$avg4=$row_avg4[average];

			$sql_max4 ="select * from score  where sub_competency_id=60 and position_id='17' order by  `score` desc limit 1";
			$result_max4=mysql_query($sql_max4);
			$row_max4=mysql_fetch_array($result_max4);
			$max4=number_format($row_max4[score], 0);
			


			?>
				<v:line from="
				<?PHP
						$startx=13+26.5*($score-1);
						echo $startx;

				?>
				,30" to="
				<?PHP
						$startx=13+26.5*($score1-1);
						echo $startx;

				?>
				,94" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=13+26.8*($avg-1);
						echo $startx;

				?>
				
				,30" to="
				<?PHP
						$startx=13+26.8*($avg1-1);
						echo $startx;

				?>
				,94" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max-1);
						echo $startx;

				?>
				,30" to="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>				
				,94" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>



				<v:line from="
				<?PHP
						$startx=13+26.5*($score1-1);
						echo $startx;

				?>
				,98" to="
				<?PHP
						$startx=13+26.5*($score2-1);
						echo $startx;

				?>
				,162" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg1-1);
						echo $startx;

				?>
				
				,98" to="
				<?PHP
						$startx=10+27.2*($avg2-1);
						echo $startx;

				?>
				,162" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>
				,98" to="
				<?PHP
						$startx=10+26.8*($max2-1);
						echo $startx;

				?>				
				,162" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>



				<v:line from="
				<?PHP
						$startx=13+26.5*($score2-1);
						echo $startx;

				?>
				,162" to="
				<?PHP
						$startx=13+26.5*($score3-1);
						echo $startx;

				?>
				,225" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg2-1);
						echo $startx;

				?>
				
				,162" to="
				<?PHP
						$startx=10+27.2*($avg3-1);
						echo $startx;

				?>
				,225" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max2-1);
						echo $startx;

				?>
				,162" to="
				<?PHP
						$startx=10+26.8*($max3-1);
						echo $startx;

				?>				
				,225" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>



				<v:line from="
				<?PHP
						$startx=13+26.5*($score3-1);
						echo $startx;

				?>
				,228" to="
				<?PHP
						$startx=13+26.5*($score4-1);
						echo $startx;

				?>
				,282" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.8*($avg3-1);
						echo $startx;

				?>
				
				,228" to="
				<?PHP
						$startx=10+27.8*($avg4-1);
						echo $startx;

				?>
				,282" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max3-1);
						echo $startx;

				?>
				,228" to="
				<?PHP
						$startx=10+26.8*($max4-1);
						echo $startx;

				?>				
				,282" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<?php include("table1.php");?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=59");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=59 and position_id='17'";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=59 and position_id='17' order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 简报技能
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=42");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where  sub_competency_id=42 and position_id='17'";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];



			$sql_max ="select * from score  where sub_competency_id=42 and position_id='17' order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0); 

			include("table1.php");
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=42");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where  sub_competency_id=42 and position_id='17'";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
				<?php
				$sql_max ="select * from score  where  sub_competency_id=42 and position_id='17' order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 发展内部客户满意

			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=4");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=4 and position_id='17'";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where  sub_competency_id=4 and position_id='17' order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0); 
		
			include("table1.php");
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=4");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where  sub_competency_id=4 and position_id='17'";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where  sub_competency_id=4 and position_id='17' and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 分析
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=44");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=44 and position_id='17'";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where  sub_competency_id=44 and position_id='17' order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0); 
		
			include("table1.php");
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=44");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where  sub_competency_id=44 and position_id='17'";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where  sub_competency_id=44 and position_id='17' and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 资源组织
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=60");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=60 and position_id='17'";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where  sub_competency_id=60 and position_id='17' order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0); 
		
			include("table1.php");
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=60");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where  sub_competency_id=60 and position_id='17'";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where  sub_competency_id=60 and position_id='17' and position_id=17 order by  `score` desc limit 1";
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

		<div style="width:750px;border:0px solid black;text-align:center;font-size:13pt;margin-top:60px;">
      流程管理与资源运用胜任力总结
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
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 计划与控制
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 	<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=59");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(59, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 简报技能
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 	<?php 
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=42");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(42, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 发展内部客户满意
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 	<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=4");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(4, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 分析
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 	<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=44");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(44, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 资源组织
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 	<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=60");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(60, $row_score[score])
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
			'FlashVars', 'library_path=charts_library&xml_source=tp_s.php?id=<?php echo $row[user_id]?>', 
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
      流程管理与资源运用胜任力发展建议
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
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 计划与控制
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=59");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(59, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 简报技能
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=42");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(42, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 发展内部客户满意
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=4 ");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(4, $row_score[score]);
				?>
			</td>
		</tr>
				<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 分析
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=44");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(44, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 资源组织
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=60");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(60, $row_score[score]);
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
      人员激励与团队合作测评结果
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
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 沟通
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=45");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=45 and position_id=17";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=45 and position_id=17 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=61");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=61 and position_id=17";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=61 and position_id=17 order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=number_format($row_max1[score], 0);



			$result_score2 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=62");
			$row_score2=mysql_fetch_array($result_score2);
			$score2=number_format($row_score2[score], 0);

			$sql_avg2 ="select avg(`score`) as average from score where sub_competency_id=62 and position_id='17'";
			$result_avg2=mysql_query($sql_avg2);
			$row_avg2=mysql_fetch_array($result_avg2);
			$avg2=$row_avg2[average];

			$sql_max2 ="select * from score  where sub_competency_id=62 and position_id='17' order by  `score` desc limit 1";
			$result_max2=mysql_query($sql_max2);
			$row_max2=mysql_fetch_array($result_max2);
			$max2=number_format($row_max2[score], 0);


			$result_score3 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=63");
			$row_score3=mysql_fetch_array($result_score3);
			$score3=number_format($row_score3[score], 0);

			$sql_avg3 ="select avg(`score`) as average from score where sub_competency_id=63 and position_id='17'";
			$result_avg3=mysql_query($sql_avg3);
			$row_avg3=mysql_fetch_array($result_avg3);
			$avg3=$row_avg3[average];

			$sql_max3 ="select * from score  where sub_competency_id=63 and position_id='17' order by  `score` desc limit 1";
			$result_max3=mysql_query($sql_max3);
			$row_max3=mysql_fetch_array($result_max3);
			$max3=number_format($row_max3[score], 0);
			?>
			
				<v:line from="
				<?PHP
						$startx=13+26.5*($score-1);
						echo $startx;

				?>
				,30" to="
				<?PHP
						$startx=13+26.5*($score1-1);
						echo $startx;

				?>
				,94" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=13+26.8*($avg-1);
						echo $startx;

				?>
				
				,30" to="
				<?PHP
						$startx=13+26.8*($avg1-1);
						echo $startx;

				?>
				,94" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max-1);
						echo $startx;

				?>
				,30" to="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>				
				,94" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>



				<v:line from="
				<?PHP
						$startx=13+26.5*($score1-1);
						echo $startx;

				?>
				,98" to="
				<?PHP
						$startx=13+26.5*($score2-1);
						echo $startx;

				?>
				,162" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg1-1);
						echo $startx;

				?>
				
				,98" to="
				<?PHP
						$startx=10+27.2*($avg2-1);
						echo $startx;

				?>
				,162" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max1-1);
						echo $startx;

				?>
				,98" to="
				<?PHP
						$startx=10+26.8*($max2-1);
						echo $startx;

				?>				
				,162" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>



				<v:line from="
				<?PHP
						$startx=13+26.5*($score2-1);
						echo $startx;

				?>
				,162" to="
				<?PHP
						$startx=13+26.5*($score3-1);
						echo $startx;

				?>
				,225" style="position:absolute;z-index:9;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.2*($avg2-1);
						echo $startx;

				?>
				
				,162" to="
				<?PHP
						$startx=10+27.2*($avg3-1);
						echo $startx;

				?>
				,225" style="position:absolute;z-index:7;" strokecolor="#A6A6A6" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>

				<v:line from="
				<?PHP
						$startx=10+26.8*($max2-1);
						echo $startx;

				?>
				,162" to="
				<?PHP
						$startx=10+26.8*($max3-1);
						echo $startx;

				?>				
				,225" style="position:absolute;z-index:8;" strokecolor="#000000" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>



				<?php include("table1.php"); ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=45");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=45 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=45 and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 鼓励人员
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=61");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=61 and position_id=17";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=61 and position_id=17 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);
			?>
			<?php include("table1.php"); ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=61");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=61 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=61 and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 支持与协作
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=62");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=62 and position_id=17";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=62 and position_id=17 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);
			?>
			<?php include("table1.php"); ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=62");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=62 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=62 and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 冲突管理
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=63");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=63 and position_id=17";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=63 and position_id=17 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);
			?>
			<?php include("table1.php"); ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=63");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=63 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=63 and position_id=17 order by  `score` desc limit 1";
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
				<img src="tu/4.jpg" width="20"/>
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
      人员激励与团队合作胜任力总结
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
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 沟通
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=45");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(45, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 鼓励人员
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=61");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(61, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 支持与协作
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=62");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(62, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 冲突管理
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=63");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(63, $row_score[score])
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
			'FlashVars', 'library_path=charts_library&xml_source=ur_s.php?id=<?php echo $row[user_id]?>', 
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
      人员激励与团队合作胜任力发展建议
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
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 沟通
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=45");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(45, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 鼓励人员
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=61");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(61, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 支持与协作
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=62");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(62, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 冲突管理
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=63");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(63, $row_score[score])
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
				 自我学习与发展
			</td>
			<td style="width:250px;border:0px solid black;">
						<?php
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=29 and position_id=17");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=29 and position_id=17";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=29 and position_id=17 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=25 and position_id=17");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=25 and position_id=17";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=25  and position_id=17 order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=number_format($row_max1[score], 0);

			$result_score2 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=24 and position_id=17");
			$row_score2=mysql_fetch_array($result_score2);
			$score2=number_format($row_score2[score], 0);

			$sql_avg2 ="select avg(`score`) as average from score where sub_competency_id=24 and position_id=17";
			$result_avg2=mysql_query($sql_avg2);
			$row_avg2=mysql_fetch_array($result_avg2);
			$avg2=$row_avg2[average];

			$sql_max2 ="select * from score  where sub_competency_id=24 and position_id=17 order by  `score` desc limit 1";
			$result_max2=mysql_query($sql_max2);
			$row_max2=mysql_fetch_array($result_max2);
			$max2=number_format($row_max2[score], 0);

			$result_score3 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=27 and position_id=17");
			$row_score3=mysql_fetch_array($result_score3);
			$score3=number_format($row_score3[score], 0);

			$sql_avg3 ="select avg(`score`) as average from score where sub_competency_id=27 and position_id=17";
			$result_avg3=mysql_query($sql_avg3);
			$row_avg3=mysql_fetch_array($result_avg3);
			$avg3=$row_avg3[average];

			$sql_max3 ="select * from score  where sub_competency_id=27 and position_id=17 order by  `score` desc limit 1";
			$result_max3=mysql_query($sql_max3);
			$row_max3=mysql_fetch_array($result_max3);
			$max3=number_format($row_max3[score], 0);


			$result_score4 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=28 and position_id=17");
			$row_score4=mysql_fetch_array($result_score4);
			$score4=number_format($row_score4[score], 0);

			$sql_avg4 ="select avg(`score`) as average from score where sub_competency_id=28 and position_id=17";
			$result_avg4=mysql_query($sql_avg4);
			$row_avg4=mysql_fetch_array($result_avg4);
			$avg4=$row_avg4[average];

			$sql_max4 ="select * from score  where sub_competency_id=28 and position_id=17 order by  `score` desc limit 1";
			$result_max4=mysql_query($sql_max4);
			$row_max4=mysql_fetch_array($result_max4);
			$max4=number_format($row_max4[score], 0);


			$result_score5 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=26 and position_id=17");
			$row_score5=mysql_fetch_array($result_score5);
			$score5=number_format($row_score5[score], 0);

			$sql_avg5 ="select avg(`score`) as average from score where sub_competency_id=26 and position_id=17";
			$result_avg5=mysql_query($sql_avg5);
			$row_avg5=mysql_fetch_array($result_avg5);
			$avg5=$row_avg5[average];

			$sql_max5 ="select * from score  where sub_competency_id=26 and position_id=17 order by  `score` desc limit 1";
			$result_max5=mysql_query($sql_max5);
			$row_max5=mysql_fetch_array($result_max5);
			$max5=number_format($row_max5[score], 0);



			$result_score6 = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=40 and position_id=17");
			$row_score6=mysql_fetch_array($result_score6);
			$score6=number_format($row_score6[score], 0);

			$sql_avg6 ="select avg(`score`) as average from score where sub_competency_id=40 and position_id=17";
			$result_avg6=mysql_query($sql_avg6);
			$row_avg6=mysql_fetch_array($result_avg6);
			$avg6=$row_avg6[average];

			$sql_max6 ="select * from score  where sub_competency_id=40 and position_id=17 order by  `score` desc limit 1";
			$result_max6=mysql_query($sql_max6);
			$row_max6=mysql_fetch_array($result_max6);
			$max6=number_format($row_max6[score], 0);



			?>
				<v:line from="
				<?PHP
						$startx=13+26.5*($score-1);
						echo $startx;

				?>
				,44" to="
				<?PHP
						$startx=13+26.5*($score1-1);
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
						$startx=13+26.5*($score1-1);
						echo $startx;

				?>
				,130" to="
				<?PHP
						$startx=13+26.5*($score2-1);
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
						$startx=13+26.5*($score2-1);
						echo $startx;

				?>
				,213" to="
				<?PHP
						$startx=13+26.5*($score3-1);
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
						$startx=13+26.5*($score3-1);
						echo $startx;

				?>
				,296" to="
				<?PHP
						$startx=13+26.5*($score4-1);
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
						$startx=13+26.5*($score4-1);
						echo $startx;

				?>
				,379" to="
				<?PHP
						$startx=13+26.5*($score5-1);
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
						$startx=13+26.5*($score5-1);
						echo $startx;

				?>
				,463" to="
				<?PHP
						$startx=13+26.5*($score6-1);
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
				

				<?php include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and position_id=17 and sub_competency_id=29");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=29 and position_id=17 ";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=29 and position_id=17  order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=25");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=25 and position_id=17";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=25 and position_id=17 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=25");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=25 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=25 and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 高附加值的员工
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=24");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=24 and position_id=17";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=24 and position_id=17 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=24");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=24 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=24  and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 稳定性
			</td>
			<td style="width:250px;border:0px solid black;">
		<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=27");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=27 and position_id=17";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=27  and position_id=17 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=27");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=27 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=27 and position_id=17 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=28");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=28 and position_id=17";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=28  and position_id=17 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=28");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=28 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=28 and position_id=17 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=26");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=26 and position_id=17";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=26 and position_id=17 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max); 
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=26");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=26 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=26 and position_id=17 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 注重细节
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=40");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=40 and position_id=17";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=40 and position_id=17 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=40");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=40 and position_id=17";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=40 and position_id=17 order by  `score` desc limit 1";
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
				<img src="tu/4.jpg" width="20"/>
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
      自我管理胜任力总结
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
				 自我学习与发展
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=29");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(29, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 时间管理
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 	
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=25");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(25, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 高附加值的员工
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=24");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(24, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 稳定性
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=27");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(27, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 坚韧性
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=28");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(28, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 责任感
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=26");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(26, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 注重细节
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=40");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(40, $row_score[score]);
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
			'FlashVars', 'library_path=charts_library&xml_source=ms_s.php?id=<?php echo $row[user_id]?>', 
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
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=29");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(29, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				时间管理
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=25");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(25, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 高附加值的员工
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=24");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(24, $row_score[score]);
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
				 稳定性
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 

					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=27");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(27, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 坚韧性
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 

	
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=28");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(28, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 责任感
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					
					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=26");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(26, $row_score[score]);
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 注重细节
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 

					$result_score = mysql_query("select * from score where user_id='$row[user_id]' and sub_competency_id=40");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(40, $row_score[score]);
				?>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>


<div class="central">
<?php require("head.html") ?>
	<div style="font-size:20pt;width:750px;text-align:center;margin-top:500px;">
		<b>附件一：胜任力定义</b>
	</div>
</div>
<div class="central">
<?php require("head.html") ?>
	<div class="main">

		<div class="titledefine" style="margin-top:70px;font-size:13pt;">
      流程管理胜任力
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       计划与控制
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
			<span style="margin-left:18px;">基于目标制定具体的行动计划方案，进行持续的跟踪跟进与反馈，通过有效的问题解决的方法及时解决执行中的偏差与问题，确保任务的达成

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
			<span style="margin-left:18px;">将笼统的任务目标进行有效分解，并明确其中的关键点</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">制定具体的行动计划，预见障碍并建立预备方案</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">持续跟踪跟进并提供定期的反馈，在产生偏差时能确定根本原因，有效的进行问题解决确保执行效果</span>

			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       简报技能
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
			<span style="margin-left:18px;">能够基于清晰的逻辑，以及各类资料与信息之间的内在关系，有效地对材料进行整理、提炼以及总结，并能对内容进行清</span><span style="margin-left:40px;">晰地汇报。
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
			<span style="margin-left:18px;">基于清晰的逻辑将复杂的材料进行结构化的整理与归纳总结</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对整理的内容进行有结构、有优先次序地汇报</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够关注汇报对象的反馈，根据具体情况对汇报进行合理的调整</span>
			<br/>
			<br/>
		</div>
				<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       发展内部客户满意
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
			<span style="margin-left:18px;">基于对内外部客户需求的理解，发展出针对性的方法有效地促进与上下游部门的无缝衔接，以内部客户满意来推动整体服务质量的提升
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
			<span style="margin-left:18px;">理解内外部客户满意度之间的关系，能够有效管理内部服务质量</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">使用明确的方法收集和分析内部客户需求，并在分析的基础上满足其需求</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过工作流程与工具优化等方式持续提升内部管理服务水平，确保流程的无缝衔接，在各职能部门之间建立一种强有力的伙伴关系</span>

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
       分析 
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
			<span style="margin-left:18px;">能够基于需要完成的工作任务进行清晰准确地逻辑及数量关系的分析与判断</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">运用系统全面的方法将复杂问题或任务分解为若干个关键点</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">明确完成任务所需相关资源及其合理结构</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">运用不同的分析技巧如归纳、演绎、推理等找到多种解决方案，并评估各方案价值</span>


			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       资源组织
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
			<span style="margin-left:18px;">能够基于工作任务，明确所需的各类资源并对各类资源进行合理的组织配置，以确保资源的高效利用

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
			<span style="margin-left:18px;">能够基于任务目标，明确所需的各类资源如人员、资金、时间等</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对目前各类资源使用效率进行合理分析，按照逻辑关系和效率原则进行组合</span>
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
			<span style="margin-left:18px;">能够耐心聆听他人的意见和想法，通过有效的方式与他人沟通，确保沟通双方能够准确理解对方期望表达的信息</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">重视且乐于沟通，过程中能够条理清晰、逻辑连贯的表达思路，让对方有效的理解所述内容</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">关注思想互动和交流，耐心、认真聆听，换位思考，促进相互理解，达到预期的沟通效果</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">会用有效的沟通方法或相应策略确保积极沟通氛围，让对方准确理解并达成共识</span>


			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       鼓励人员
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
			<span style="margin-left:18px;">能通过业务上的共同目标支持、鼓励部门内、跨部门间的合作，促进业务的高效完成</span>			
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
			<span style="margin-left:18px;">主动分享相关信息，促进有效沟通与交流，积极地向他人提供配合与支持</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过建立、优化相关工作流程，确保有效地推进合作</span>


			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
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
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
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
			<span style="margin-left:18px;">通过问题解决、在职学习、自我反思与总结、向他人学习等有针对性的方式与途径，丰富知识，提升职业技能；展示出很强的自我发展意愿，确保自身的持续提升，保持职场竞争力

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
			<span style="margin-left:18px;">根据自身情况积极利用多种途径为自己创造学习机会，不断尝试新的、有效的学习方法
</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对专业领域的信息保持敏感度和好奇心，对知识有强烈的渴求，不断寻找和尝试新技术以保持竞争力</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">善于分析自身优势和短板，将个人学习目标与职业生涯规划相结合，并制定相应的学习计划</span>

			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
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
			<span style="margin-left:18px;">以原则为中心并与自身角色结合，从大量的任务中排定优先次序，制定时间规划，定期监控、评估与调整，以便有效地完成既定目标，并从既有时间中获得最大化结果</span>

		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">以原则为中心对工作任务进行合理规划，评估任务的重要性和紧急性，排定优先次序，分配任务时间 </span>
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
			<span style="margin-left:18px;">自觉主动的做好岗位分内分外的职务，能够为分配给自己的任务担负责任，为自己采取的各项行动负责
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
			<span style="margin-left:18px;">在本职工作上尽职尽责，以公司发展的利益为己任，对于分配的任务和自身的行为担负责任</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">时刻展现出责任心，并在工作中勇于担当责任或承认错误</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">以身作则，用行动带动其他员工一起担负组织目标任务，并在过程中以更高的组织使命感去负责他人的行为结果</span>

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
      高附加值员工
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
			<span style="margin-left:18px;">对自身工作拥有主人翁精神和强烈的责任感，在工作中寻求、利用和整合一切可能的资源以克服障碍或挑战更高的目标</span>

			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:13pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       稳定性
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
			<span style="margin-left:18px;">在压力或变化的环境下，仍然能够保持平稳的情绪，确保高效率高质量的工作


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
			<span style="margin-left:18px;">面对压力的情境，能够控制个人的情绪，保持心态平和稳定</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够冷静地处理突发或有压力的问题</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够在压力情境下保持清晰地思考，确保高效率高质量地达成任务目标</span>
			<br/>
			<br/>
		</div>
				<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:30px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
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
			<span style="margin-left:18px;">在实现计划目标的过程当中始终坚持不懈，从失败或者错误的挫折中很快恢复斗志并保持决心，并从失败或者错误中吸取教训，继续专注在目标的达成上，坚持完成所从事的任务

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
			<span style="margin-left:18px;">调整自己，从挫折中走出来的能力</span>

			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">关注成果，努力不懈直至任务达成</span>


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
       注重细节
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
			<span style="margin-left:18px;">对待工作认真细致，能够在把握全局重点的同时，全面地注意各方面的必要细节</span>			
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       行为特征 
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对自己的工作负责，关注重要细节</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对行动方案及结果进行详细周密的考虑，同时也关注全局</span>
			<br/>
			<br/>
		</div>

</div>
</div>

<div class="central">
<?php require("head.html") ?>
	<div style="font-size:20pt;width:750px;text-align:center;margin-top:500px;">
		<b>附件二:人格特质与认知能力报告</b>
	</div>
</div>

</body>
</html>
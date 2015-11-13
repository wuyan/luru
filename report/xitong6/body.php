<?php
include('conn.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN"
"http://www.w3.org/TR/html4/loose.dtd">
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
			<b>经<span style="margin-left:40px;">销</span><span style="margin-left:40px;">商</span><span style="margin-left:40px;">测</span><span style="margin-left:40px;">评</span><span style="margin-left:40px;">中</span><span style="margin-left:40px;">心 </b>
		</div>
		<div class="shouye_tu">
			<img src="tu/main.png" alt="" height="141" width="700" border="0"/>
		</div>
		<div class="shouye_title" style="margin-top:70px;font-size:20pt;">
			<b>个&nbsp;&nbsp;人&nbsp;&nbsp;测&nbsp;&nbsp;评&nbsp;&nbsp;报&nbsp;&nbsp;告 </b>
		</div>
		<div class="shouye_all" style="margin-top:30px;">
			<div class="intro" style="float:left;margin-left:150px;font-size:13pt;color:000000;width:130px;text-align:left;height:35px;margin-top:10px;">
       姓名:

			</div>
			<div class="shouye_v1">
       &nbsp;<?php 
		$sql_name = "select * from  user_basic where user_id =$row[user_id] and user_info_id=5";
		$result_name =mysql_query($sql_name);
		$row_name=mysql_fetch_array($result_name);
		echo $row_name[user_info_value];
	   ?>

			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:150px;font-size:13pt;color:000000;width:130px;text-align:left;height:35px;margin-top:10px;">
       岗位:
			</div>
			<div class="shouye_v1">
        &nbsp;<?php 
		$sql_name = "select * from  user_basic where user_id =$row[user_id] and user_info_id=4";
		$result_name =mysql_query($sql_name);
		$row_name=mysql_fetch_array($result_name);
		echo $row_name[user_info_value];
		
		
		?>
			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:150px;font-size:13pt;color:000000;width:130px;text-align:left;height:35px;margin-top:10px;">
       网络代码:

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
			<div class="intro" style="float:left;margin-left:150px;font-size:13pt;color:000000;width:130px;text-align:left;height:35px;margin-top:10px;">
       经销商名称:

			</div>
			<div class="shouye_v1">
       &nbsp;<?php 
	   	$sql_name = "select * from  user_basic where user_id =$row[user_id] and user_info_id=2";
		$result_name =mysql_query($sql_name);
		$row_name=mysql_fetch_array($result_name);
		echo $row_name[user_info_value];
	   
	   ?>

			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:150px;font-size:13pt;color:000000;width:130px;text-align:left;height:35px;margin-top:10px;">
       销售服务中心:

			</div>
			<div class="shouye_v1">
       &nbsp;<?php  
	   	   	$sql_name = "select * from  user_basic where user_id =$row[user_id] and user_info_id=3";
		$result_name =mysql_query($sql_name);
		$row_name=mysql_fetch_array($result_name);
		echo $row_name[user_info_value];
	   
	   
	   ?>

			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:150px;font-size:13pt;color:000000;width:130px;text-align:left;height:35px;margin-top:10px;">
       测评日期:

			</div>
			<div class="shouye_v1">
       &nbsp;<?php  
	   	$sql_name = "select * from  user_basic where user_id =$row[user_id] and user_info_id=11";
		$result_name =mysql_query($sql_name);
		$row_name=mysql_fetch_array($result_name);
		echo $row_name[user_info_value];
	   
	   
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
			&emsp;&emsp;上海大众汽车经销商测评中心是用来评估参试者岗位的现有胜任力水平，帮助其明确胜任岗位的能力要求以及获得进一步发展的建议。
			<br/>
			<br/> &emsp;&emsp;个人测评报告是根据参试者参加上海大众汽车经销商测评中心的测评结果而生成。本报告包含三个部分: 五项岗位胜任力的整体测评结果分析，每项胜任力各子项能力的测评结果分析，人格问卷报告描述。(what is this suppose to say?)

			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;岗位胜任力的整体测评结果分析   (Do we want to use the composite score?)    
			<br/>&emsp;&emsp;图表中描述了在五项胜任力上，参试者个人的得分，所有参试者的平均分以及标杆参试者的得分。此外，也对于参试者的优势以及待发展的胜任力提供了详细的参考建议。(representative of best and worst)

			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;胜任力各子项能力的测评结果分析&nbsp;&nbsp;
			<br/>&emsp;&emsp;这一部分的图表对于五项胜任力所包含的每项子胜任力依次进行描述，将参试者个人的得分与平均分、标杆参试者的得分进行比较，并标注了岗位所要求的合格分和期望分。(individual score relative to group average and benchmark)同时，对于参试者在每项子胜任力上的得分所属的能力水平以及发展建议也提供了更为详细的参考建议，以帮助参试者发挥自身优势，提升短板。(recommendation for you to consider how to leverage on your strength and narrow your gap)

			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;人格特质与认知能力报告
			<br/>&emsp;&emsp;作为胜任力测评报告的补充，人格特质与认知能力报告展现了参试者的人格特质与行为特征与常模的匹配程度，红色代表“匹配度低”，黄色代表“部分匹配”，绿色代表“匹配度高” 。</br>&emsp;&emsp;In addition to the competency score and recommendation, this part of the report indicates your personality and behavior relative to the norm; red represent mismatch, yellow represents somewhat match, green represent good matching.

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
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;个人成就记录表 ：参试者在参加测评中心测评前独立填写这份表格，表格内容包括工作经<span style="margin-left:30px;">历，教育培训背景以及工作成就。</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;结构化访谈：测评师团队通过一系列结构化的问题，以面对面交谈的方式，来了解参试者</span>
			<span style="margin-left:30px;">在过去工作中展现的典型行为，以评估参试者所具备的胜任力。</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;情景模拟：由测评师扮演在情景中出现的角色来配合参试者完成模拟，并观察参试者在模</span>
			<span style="margin-left:30px;">拟过程中展现出来的行为，评估参试者所具备的胜任力。</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;案例分析：参试者需要分析案例所提供的虚拟的业务信息与数据并回答相应的题目，来了<span style="margin-left:30px;">解参试者在分析这些案例和应对问题时所展现的思路、采取的措施和行动方案，以评估参</span>
			<span style="margin-left:30px;">试者所具备的胜任力。</div>
			<div style="margin-left:35px;margin-top:15px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;人格问卷和能力测试：通过参试者在问卷测试的表现，来评断其人格特质，认知能力等方</span>
			<span style="margin-left:30px;">面的特点。</div>
			<br/>
			<br/>
			<b>2.<span style="margin-left:50px;">计分方法 </span></b>
			<br/>
			<span style="margin-left:62px;">计分都采用“10分制”方式。测评中心的最终评定结果将综合参试者在不同活动中的表现</span><span style="margin-left:62px;">而生成。</span>
			<br/>
			<span style="margin-left:62px;">Average of sub competencies represent the average score of each of the 5 competencies; </span><span style="margin-left:62px;">MP, UR, IP, TP & MS. Average of the 5 competencies will be the final composite score of <span style="margin-left:62px;">the competency assessment. PSI assessment result is for reference only.</span>

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
			$result_score = mysql_query("select * from score_total where user_id='$_GET[id]'");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_total where position_id='1'";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score_total where position_id='1' order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score_competency where user_id='$_GET[id]' and competency_id=1");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where  competency_id=1 and position_id=1";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from  score_competency where competency_id=1 and position_id=1 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score_competency where user_id='$_GET[id]' and competency_id=2");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=2 and position_id=1";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from  score_competency where competency_id=2 and position_id=1 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score_competency where user_id='$_GET[id]' and competency_id=3");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=3 and position_id=1";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from  score_competency where  competency_id=3 and position_id=1 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score_competency where user_id='$_GET[id]' and competency_id=4");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where  competency_id=4 and position_id=1";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from  score_competency where  competency_id=4 and position_id=1 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score_competency where user_id='$_GET[id]' and competency_id=5");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score_competency where competency_id=5 and position_id=1";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from  score_competency where competency_id=5 and position_id=1 order by  `score` desc limit 1";
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
/*				$sql_max ="select * from score  where user_id='$_GET[id]' and position_id='2' order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				$sql_best="select * from report_list where report_id ='$row_max[report_id]'"; 
				$result_best=mysql_query($sql_best);
				$row_best=mysql_fetch_array($result_best);
				$sql_des="select * from sub_competency_list where sub_competency_id ='$row_best[sub_competency_id]'";
				$result_des=mysql_query($sql_des);
				$row_des=mysql_fetch_array($result_des);
				echo $row_des[sub_competency_name];
*/

			?>
			</td>
			<td style="border:0px solid black;width:500px;text-align:left;">
				 <?php //echo  competency_ld($row_best[sub_competency_id], $row_max[score])?>
			</td>
		</tr>
		<tr style="height:150px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:100px;">
				 有待提升项
			</td>
			<td style="border:0px solid black;width:150px;">
				<?php
/*				$sql_max ="select * from score where user_id='$_GET[id]' and position_id='2' order by  `score` asc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				$sql_best="select * from report_list where report_id ='$row_max[report_id]'"; 
				$result_best=mysql_query($sql_best);
				$row_best=mysql_fetch_array($result_best);
				$sql_des="select * from sub_competency_list where sub_competency_id ='$row_best[sub_competency_id]'";
				$result_des=mysql_query($sql_des);
				$row_des=mysql_fetch_array($result_des);
				echo $row_des[sub_competency_name];
*/
			?>
			</td>
			<td style="border:0px solid black;width:500px;text-align:left;">
				<?php //echo  competency_ld($row_best[sub_competency_id], $row_max[score])?>
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
				<table width="287" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr style="height:38px;background-color:#4F81BD;color:ffffff;">
					<td >
						 得分
					</td>
				</tr>
				</tbody>
				</table>
				<table width="287" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
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
			$sub_competency=array('管理整体业绩','发展内部客户满意度','管理客户满意度','管理客户关系','管理执行');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr>
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 <?php  echo $sub_competency[$i]?>
			</td>
			<td style="width:250px;border:0px solid black;">
		

				<?php 
				$height=60;
				include("table.php");?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id='49'");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">

			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">

			</td>
		</tr>
		<?php
			}
		?>

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
      流程管理胜任力总结
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
			$sub_competency=array('管理整体业绩','发展内部客户满意度','管理客户满意度','管理客户关系','管理执行');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr style="height:75px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 <?php  echo $sub_competency[$i]?>
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<?php
			}
		?>



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

		<?php 
			$sub_competency=array('管理整体业绩','发展内部客户满意度','管理客户满意度','管理客户关系','管理执行');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr style="height:75px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 <?php  echo $sub_competency[$i]?>
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

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
				<table width="287" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr style="height:38px;background-color:#4F81BD;color:ffffff;">
					<td>
						 得分
					</td>
				</tr>
				</tbody>
				</table>
				<table width="287" height="40" style="text-align:center;color:black;font-size:10pt;" cellpadding="0" cellspacing="0">
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

		<?php 
			$sub_competency=array('运用财务指标','运用市场资源','提高工作效率');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 <?php echo $sub_competency[$i]?>
			</td>
			<td style="width:250px;border:0px solid black;">

				<?php 
				$height=80;
				include("table.php"); ?>
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
		<?php } ?>
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

		<?php 
			$sub_competency=array('运用财务指标','运用市场资源','提高工作效率');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				  <?php echo $sub_competency[$i]?>
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 

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
		<?php 
			$sub_competency=array('运用财务指标','运用市场资源','提高工作效率');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 <?php echo $sub_competency[$i]?>
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<?php } ?>
		</tbody>
		</table>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main" style="height:auto;">
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
				<table width="287" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr style="height:38px;background-color:#4F81BD;color:ffffff;">
					<td >
						 得分
					</td>
				</tr>
				</tbody>
				</table>
				<table width="287" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
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
			$sub_competency=array('激发个人与团队','绩效管理','培训/辅导/发展他人','促进双向沟通','发展肯定机制');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr>
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 <?php echo $sub_competency[$i]?>
			</td>
			<td style="width:250px;border:0px solid black;">
		

				<?php 
				$height=60;
				include("table.php");?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			 /*
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and report_id='80'");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			*/
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">

			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">

			</td>
		</tr>
		<?php }?>
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
      人员激励胜任力总结
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
			$sub_competency=array('激发个人与团队','绩效管理','培训/辅导/发展他人','促进双向沟通','发展肯定机制');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr style="height:75px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 <?php echo $sub_competency[$i]?>
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<?php
			}
		?>

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
		<?php 
			$sub_competency=array('激发个人与团队','绩效管理','培训/辅导/发展他人','促进双向沟通','发展肯定机制');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr style="height:75px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 <?php echo $sub_competency[$i]?>
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

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
				<table width="287" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr style="height:38px;background-color:#4F81BD;color:ffffff;">
					<td >
						 得分
					</td>
				</tr>
				</tbody>
				</table>
				<table width="287" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
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
			$sub_competency=array('推动内部工作小组','推动跨部门合作','推动外部合作','提高团队凝聚力');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr>
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 <?php echo $sub_competency[$i]?>
			</td>
			<td style="width:250px;border:0px solid black;">
		

				<?php 
				$height=70;
				include("table.php");?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			 /*
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and report_id='80'");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			*/
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">

			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">

			</td>
		</tr>
		<?php } ?>
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
      团队合作胜任力总结
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
			$sub_competency=array('推动内部工作小组','推动跨部门合作','推动外部合作','提高团队凝聚力');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 <?php echo $sub_competency[$i]?>
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<?php
			}
		?>
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
		<?php 
			$sub_competency=array('推动内部工作小组','推动跨部门合作','推动外部合作','提高团队凝聚力');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr style="height:80px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				  <?php echo $sub_competency[$i]?>
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<?php } ?>
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
				<table width="287" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr style="height:38px;background-color:#4F81BD;color:ffffff;">
					<td>
						 得分
					</td>
				</tr>
				</tbody>
				</table>
				<table width="287" height="40" style="text-align:center;color:black;font-size:10pt;" cellpadding="0" cellspacing="0">
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

		<?php 
			$sub_competency=array('高附加值的员工','自我学习和发展','战略思考力','时间管理','团队精神','影响力','责任感','稳定性','坚韧性');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 <?php echo $sub_competency[$i]?>
			</td>
			<td style="width:250px;border:0px solid black;">
					

				<?php 
				$height=80;
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">

			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">

			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">

			</td>
		</tr>
		<?php 
			}
		?>
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
		<?php 
			$sub_competency=array('高附加值的员工','自我学习和发展','战略思考力','时间管理','团队精神','影响力','责任感','稳定性','坚韧性');
			for($i=0;$i<count($sub_competency);$i++){
		?>
		<tr style="height:100px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 <?php echo $sub_competency[$i]?>    
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

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
		<tr style="height:100px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 高附加值的员工    
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<tr style="height:100px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				自我学习和发展
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<tr style="height:100px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 战略思考力
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<tr style="height:100px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 时间管理
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
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
		<tr style="height:100px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 团队精神
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<tr style="height:100px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 影响力
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<tr style="height:100px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 责任感
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<tr style="height:100px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 稳定性

			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		<tr style="height:100px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 坚韧性
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">

			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>



<div class="central">
<?php require("head.html") ?>
	<div style="font-size:22pt;width:750px;text-align:center;margin-top:500px;">
		<b>人格特质与认知能力报告</b>
	</div>
</div>







</body>
</html>
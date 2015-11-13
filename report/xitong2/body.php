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
			<b>上海大众汽车营销能力发展基地测评中心<br/> SVW CDC Assessment Center </b>
		</div>
		<div class="shouye_tu">
			<img src="tu/main.png" alt="" height="141" width="700" border="0"/>
		</div>
		<div class="shouye_title" style="margin-top:70px;font-size:20pt;">
			<b>个人测评报告 <br/> Individual Assessment Report </b>
		</div>
		<div class="shouye_all" style="margin-top:120px;">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       品牌:
				<br/> Brand：
			</div>
			<div class="shouye_v1">
       &nbsp;<?php 
			$result_addition = mysql_query("select * from user_addition where user_id='$_GET[id]' and user_info_id=5");
			$row_addition=mysql_fetch_array($result_addition);
			if($row_addition[user_info_name]=="VW"){
			echo "大众品牌";
			}
			if($row_addition[user_info_name]=="SKODA"){
			echo "斯柯达品牌";
			}
	   ?>
				<br/>&nbsp;<?php 
			echo $row_addition[user_info_name];
			?>
			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       部门:
				<br/>Position：
			</div>
			<div class="shouye_v1">
        &nbsp;<?php echo  $row[company] ?>
				<br/>&nbsp;<?php 
			$result_addition = mysql_query("select * from user_addition where user_id='$_GET[id]' and user_info_id=3");
			$row_addition=mysql_fetch_array($result_addition);
			echo $row_addition[user_info_name];
			?>
			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       姓名:
				<br/>Name：
			</div>
			<div class="shouye_v1">
        &nbsp;<?php echo  $row[user_name] ?>
			</div>
		</div>
		<div class="shouye_all">
			<div class="intro" style="float:left;margin-left:180px;font-size:13pt;color:000000;width:100px;text-align:left;">
       日期:
				<br/>Date：
			</div>
			<div class="shouye_v1">
       &nbsp;<?php  echo date("Y年m月d日",strtotime($row[ceping_date]));?>
				<br/>&nbsp;<?php  echo date("F m, Y",strtotime($row[ceping_date]));?>
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
			<br/>Contents
		</div>
		<div class="text">
			<br/>
			<br/>
			<div class="title_2">1、前言&nbsp;&nbsp;Introduction</div>
			<div class="title_4">介绍测评目的和测评报告阅读指南。</br>
			Introduce the purpose of the assessment and the guideline for reading the report. </div>
			<div class="title_2">
       2、测评方法与计分方法&nbsp;&nbsp;Assessment Tools and Rating Method
				<br/>
			</div>
			<div class="title_4">介绍测评过程中采用的工具、计分方法。</br>
			Introduce the assessment tools and rating method.</div>

			<div class="title_2">
       3、测评结果剖析&nbsp;&nbsp;Analysis of Assessment Result
			</div>
			<div class="title_4">呈现参试者岗位胜任力水平的整体表现和个人优劣势项，各项子胜任力测评结果以及能力等级和发展建议</br>
			Outline the results of participant’s aggregate competency and subcompetencies, strength & weakness and recommendations </div>
			<div class="title_2">
       4、人格问卷与高级推力能力报告&nbsp;&nbsp;Personality and Cognitive Report
			</div>
			<div class="title_4">呈现参试者的人格特质及推力能力表现</br>
				Present the result of the individual’s personality, behavioral and cognitive</div>

			<div class="title_2">
       5、附件：胜任力定义&nbsp;&nbsp;Appendix: Definition of Competency
			</div>
			<div class="title_4">介绍所测评岗位的胜任力定义及行为特征。</br>
			Introduce definition and characteristics of the leadership competency 
			assessed. </div>
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
			<div class="qianyan" style="float:left;width:500px;height:50px;margin-top:40px;margin-left:10px;font-size:14pt;font-weight:bold;text-align:left;color:000;">
       前言
				<br/>Introduction
			</div>
		</div>
		<div class="text_2" style="line-height:30px;margin-top:10px;">
			&emsp;&emsp;上海大众汽车营销能力发展基地测评中心是用来评估参试者岗位的现有胜任力水平，帮助其明确胜任岗位的能力要求以及获得进一步发展的建议。 
			<br/> &emsp;&emsp;The objective of the Assessment Center is to assess the competency of the participant based on the competency model of the job function, determine the participant’s competency level required for the job and provide the basis to determine individual subsequent development .
			<br/>
			<br/> &emsp;&emsp;个人测评报告是根据参试者参加上海大众汽车营销能力发展基地测评中心的测评结果而生成。本报告包含四个部分: 五项岗位胜任力的整体测评结果分析，每项胜任力各子项能力的测评结果分析，人格问卷报告描述，高级推理能力测验分数解析。
			<br/> &emsp;&emsp;This individual assessment report is generated based on the result of your assessment of the Assessment Center. The report includes four sections as follows: the analysis of assessment results of five competency and its associated sub-competencies, personality, behavioral test report, and the profile of the Graduate Reasoning Test 1 (GRT1）scores. 
			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;岗位胜任力的整体测评结果分析&nbsp;&nbsp;Analysis of Assessment Results of Five Competency
			<br/>&emsp;&emsp;图表中描述了在五项胜任力上，参试者个人的得分，所有参试者的平均分以及标杆参试者的得分。此外，也对于参试者的优势以及待发展的胜任力提供了详细的参考建议。
			<br/>&emsp;&emsp;The assessment result is presented in graphical form showing individual’s scores of the five competency with reference to average and highest score of the population assessed. 
			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;胜任力各子项能力的测评结果分析&nbsp;&nbsp;Analysis of Assessment Results of Sub-Competency
			<br/>&emsp;&emsp;这一部分的图表对于五项胜任力所包含的每项子胜任力依次进行描述，参试者个人的得分，所有参试者的平均分以及标杆参试者的得分，以及岗位所要求的合格分和期望分。同时，对于参试者在每项子胜任力上的得分所属的能力水平以及发展建议也提供了更为详细的参考建议。
			<br/>&emsp;&emsp;Similarly, for each sub-competency，individual’s score is also presented comparing with the average and highest score of the population assessed. Recommendation is provided as suggestion for further development. 
			<br/>
			<br/>
		</div>
		<br/>
		<br/>
		<br/>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div class="text_2" style="line-height:30px;margin-top:70px;">
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;人格问卷报告&nbsp;&nbsp;Personality Test Report
			<br/>&emsp;&emsp;这份报告是通过15FQ+ 测试所生成的关于参试者在人际风格，思维风格，应对风格，团队角色，领导风格等人格特质。从15FQ+的剖析图上，参试者可以看到个人的应答结果，这些表明参试者在上述维度上的倾向。关于岗位所要求进一步了解的一些人格特质，我们也为参试者提供了更为详细的描述。其中，蓝色标出的文字是描述参试者在这些维度上的潜在优势，红色标出的文字是描述参试者在这些维度上有待发展的方面。 
			<br/>&emsp;&emsp;This report is generated from measures of 15 FQ+ questionnaire, which contains a numbers of measures about personality characters, including interpersonal style, thinking style, coping style, team roles, leading style etc. From the 15 FQ + profile, participant can see his/her aptitude on these dimensions. In the analysis, the description marked in “BLUE” suggest your strengths and those marked in “RED” suggest the dimensions require further development. 
			<br/>
			<br/>
			<img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高级推理能力测验&nbsp;&nbsp;Graduate Reasoning Test 1 (GRT1）
			<br/>&emsp;&emsp;这个测验结果呈现参试者在文字推理，数字推理以及逻辑推理三方面的能力表现。这个报告包含了对于每个能力维度的定义，参试者个人成绩相对于所选常模群体的整体成绩上的表现，以及对参试者在这个能力等级上的描述建议。
			<br/>&emsp;&emsp;The GRT1 test provides the participant’s capability on verbal reasoning, numerical reasoning, and abstract reasoning. The outcome presented include description, result comparing with norm and recommendation. 
			<br/>
			<br/>
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
			<div class="qianyan" style="float:left;width:500px;height:50px;margin-top:40px;margin-left:10px;font-size:14pt;font-weight:bold;text-align:left;color:000;">
       测评方法与计分方法 
				<br/>Assessment Tools and Rating Method
			</div>
		</div>
		<div class="text_2" style="line-height:30px;margin-top:10px;">
			&emsp;&emsp;在测评中心中，参试者以公平公正的方式参与一系列测评活动，并由专业的测评师团队观察参试者在各活动中的表现。
			<br/>&emsp;&emsp;During the assessment, participants have participated in a serious of assessment activities and been observed by group of trained assessors under a impartial and objective environment. 
			<br/>
			<br/>
			<b>1.<span style="margin-left:50px;">测评工具&nbsp;&nbsp;Assessment Tools</span></b>
			<br/>
			<span style="margin-left:62px;">上海大众汽车营销能力发展基地测评中心主要由以下五个工具组成</span>
			<br/>
			<span style="margin-left:62px;">The SVW CDC Assessment Center consists the following five assessment tools:</span>
			<br/>
			<span style="margin-left:35px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;个人成就记录表 ：参试者在参加测评中心测评前独立填写这份表格，表格内容包括工作经<span style="margin-left:64px;">历，教育培训背景以及工作成就。</span>
			<br/>
			<span style="margin-left:64px;">Personal Achievement Record：This is completed by the participant before attending <span style="margin-left:64px;">assessment ,including experience, education &amp; training and work achievement.</span>
			<br/>
			<span style="margin-left:35px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;结构化访谈：测评师团队通过一系列结构化的问题，以面对面交谈的方式，来了解参试者<span style="margin-left:64px;">在过去工作中展现的典型行为，以评估参试者所具备的胜任力。</span>
			<br/>
			<span style="margin-left:62px;">Structured Interview：The interview is conducted by the assessor through a series of <span style="margin-left:64px;">structured questions to assess his/her demonstrated competency from his/her typical <span style="margin-left:64px;">behaviors in the past experience.</span>
			<br/>
			<span style="margin-left:35px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;情景模拟：由测评师扮演在情景中出现的角色来配合参试者完成模拟，并观察参试者在模<span style="margin-left:64px;">拟过程中展现出来的行为，评估参试者所具备的胜任力。</span>
			<br/>
			<span style="margin-left:64px;">Simulation: The assessor  role play with the participants based on a predetermined <span style="margin-left:64px;">scenario and observe the individual’s behaviors and competency in reacting to scenario. </span>
			<br/>
				<span style="margin-left:35px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商业分析与简报：参试者通过阅读一系列的虚拟的商业材料，分析其中的关键事项及作出<span style="margin-left:64px;">重要的商业运营决策，以书面及口头的方式汇报给测评师团队模拟的决策者，为其提供决<span style="margin-left:64px;">策参考。</span>
			<br/>
			<span style="margin-left:64px;">Business Analysis and Briefing: A business case is presented to the participant to analyze <span style="margin-left:64px;">and formulate strategy, solution and action plan and present in both written and oral <span style="margin-left:64px;">presentation.</span>
			<br/>
			<span style="margin-left:35px;"><img src="tu/imagescaerphhp1.jpg" width="6" height="7" border="0" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;人格问卷和能力测试：通过参试者在问卷测试的表现，来评断其人格特质，推理能力等方<span style="margin-left:64px;">面的特点。</span>
			<br/>
			<span style="margin-left:64px;">Personality and Cognitive test: The assessor assesses the participant’s <span style="margin-left:64px;">personality,behavioral and Cognitive through participants answering a series of <span style="margin-left:64px;">questionnaires. </span>
			<br/>
		</div>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div class="text_2" style="line-height:30px;margin-top:70px;">
			<b>2.<span style="margin-left:50px;">计分方法&nbsp;&nbsp;Rating Methods </span></b>
			<br/>
			<span style="margin-left:62px;">结构化访谈，情景模拟，商业分析与简报的计分都采用“10分制”方式。测评中心的最终<span style="margin-left:62px;">评定结果将综合参试者在不同活动中的表现而生成。</span>
			<br/>
			<span style="margin-left:62px;">With a combination of Assessment methodology including structure interview, simulation, <span style="margin-left:62px;">business analysis and briefing etc, the participant’s competency level is determined based  <span style="margin-left:62px;">on a1-10 scale. </span>
			<br/>
		</div>
	</div>
</div>
<!---->
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
			<div class="qianyan" style="float:left;width:500px;height:50px;margin-top:40px;margin-left:10px;font-size:14pt;font-weight:bold;text-align:left;color:000;">
       测评结果剖析 
				<br/>Analysis of Assessment Result
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
			<div style="float:left;width:100px;height:30px;border:0px solid black;">
       图例Legend:
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:10px;">
				<img src="tu/1.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       参试者得分
				<br/>Participant’s Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:10px;">
				<img src="tu/2.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       平均得分
				<br/>Average Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:10px;">
				<img src="tu/5.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       标杆得分
				<br/>Benchmark’s Score
			</div>
		</div>
		<table style="width:750px;border:0px solid black;cellpadding=2;cellspacing=0;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:30px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:183px;">
				 类别<br/>Category
			</td>
			<td style="border:0px solid black;width:183px;">
				 参试者得分<br/>Participant Score
			</td>
			<td style="border:0px solid black;width:183px;">
				 平均得分<br/>Average Score
			</td>
			<td style="border:0px solid black;width:183px;">
				 标杆得分<br/>Benchmark Score
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#D9D9D9;">
			<td style="border:0px solid black;width:183px;">
				 胜任力总平均分<br/>Composite Score
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=78");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=78";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=78 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);

			?>
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:183px;">
				 流程管理<br/>Managing Process
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=73");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=73";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=73 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);

			?>
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:183px;">
				 资源运用<br/>Utilizing Resource
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=74");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=74";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=74 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);

			?>
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:183px;">
				 人员激励<br/>Inspiring People
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=75");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=75";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=75 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:183px;">
				 团队合作<br/>Teaming &amp; Partnering
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=76");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=76";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=76 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:30px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:183px;">
				 自我管理<br/>Managing Self
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=77");
			$row_score=mysql_fetch_array($result_score);
			echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php 
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=77";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="border:0px solid black;width:183px;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=77 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		</tbody>
		</table>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:25px;">
      个人优劣势项
			<br/> Individual Strength &amp; Weakness
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:30px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:100px;">
			</td>
			<td style="border:0px solid black;width:150px;">
				 胜任力<br/>Competency
			</td>
			<td style="border:0px solid black;width:500px;">
				 描述<br/>Description
			</td>
		</tr>
		<tr style="height:150px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:100px;">
				 个人优势项<br/>Strength
			</td>
			<td style="border:0px solid black;width:150px;">
			<?php
				$sql_max ="select * from score  where user_id='$_GET[id]' and sub_competency_id >= 58 and sub_competency_id <= 72 order by  `score` desc limit 1";
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
				 有待提升项<br/>Weakness
			</td>
			<td style="border:0px solid black;width:150px;">
			<?php
				$sql_max ="select * from score where user_id='$_GET[id]' and sub_competency_id >= 58 and sub_competency_id <= 72 order by  `score` asc limit 1";
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
		</tbody>
		</table>
	</div>
</div>
<!---->
<!---->
<div class="central">
	<?php require("head.html") ?>
	<div class="main" style="height:auto;">
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:70px;">
      流程管理测评结果
			<br/> Assessment Result of Managing Process
		</div>
		<table style="width:750px;border:0px solid black;text-align:center;font-size:10pt;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="width:250px;border:0px solid black;text-align:center;">
				<table width="106%" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr style="height:38px;background-color:#4F81BD;color:ffffff;">
					<td >
						 得分Score
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
				 个人得分<br/>Participant
			</td>
			<td style="width:100px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 平均得分<br/>Average
			</td>
			<td style="width:100px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 标杆得分<br/>Benchmark Score
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 管理执行与优先次序<br/>Prioritize & Manage Execution
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=58");
			$row_score=mysql_fetch_array($result_score);
			$score=$row_score[score];

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=58";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=58 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=$row_max[score];


			$result_score1 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=59");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=$row_score1[score];

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=59";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=59 order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=$row_max1[score];

			$result_score2 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=60");
			$row_score2=mysql_fetch_array($result_score2);
			$score2=$row_score2[score];

			$sql_avg2 ="select avg(`score`) as average from score where sub_competency_id=60";
			$result_avg2=mysql_query($sql_avg2);
			$row_avg2=mysql_fetch_array($result_avg2);
			$avg2=$row_avg2[average];

			$sql_max2 ="select * from score  where sub_competency_id=60 order by  `score` desc limit 1";
			$result_max2=mysql_query($sql_max2);
			$row_max2=mysql_fetch_array($result_max2);
			$max2=$row_max2[score];
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




				<?php include("table.php");?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=58");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=58";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=58 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 发展内部客户满意<br/>Develop Internal Customer Satisfaction 
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=59");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=59";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];



			$sql_max ="select * from score  where sub_competency_id=59 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0); 

			include("table.php");
			?>

			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=59");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=59";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=59 order by  `score` desc limit 1";
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
       图例Legend:
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/4.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       参试者得分
				<br/>Participant’s Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/2.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       平均得分
				<br/>Average Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/3.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       标杆得分
				<br/>Benchmark Score
			</div>
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:80px;">
      流程管理胜任力总结
			<br/> Performance of Managing Process
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 等级描述<br/>Level Description
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 管理执行与优先次序<br/>Prioritize & Manage Execution
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=58");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(58, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 发展内部客户满意<br/>Develop Internal Customer Satisfaction
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=59");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(59, $row_score[score])
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
		<div style="border:0px solid black;width:750px;height:35px;background-color:#F2F2F2;font-size:9pt;">
			<div style="float:left;width:100px;height:30px;border:0px solid black;">
       图例Legend:
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/1.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       参试者得分
				<br/>Participant’s Score
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/hong.jpg" width="40"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:10px;">
       合格线（5分）
				<br/>Qualified Score（5）
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/lv.jpg" width="40"/>
			</div>
			<div style="float:left;width:130px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       期望线（6分）
				<br/>Expectation Score（6）
			</div>
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:80px;">
      流程管理胜任力发展建议
			<br/> Recommendations for Managing Process
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 发展建议<br/>Development recommendations
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 管理执行与优先次序<br/>Prioritize & Manage Execution
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=58");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(58, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 发展内部客户满意<br/>Develop Internal Customer Satisfaction
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=59");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(59, $row_score[score])
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
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:70px;">
      资源运用测评结果
			<br/> Assessment Result of Utilizing Resource
		</div>
		<table style="width:750px;border:0px solid black;text-align:center;font-size:10pt;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="width:250px;border:0px solid black;text-align:center;">
				<table width="106%" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr style="height:38px;background-color:#4F81BD;color:ffffff;">
					<td>
						 得分Score
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
				 个人得分<br/>Participant
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
				 提高工作效率<br/>Manage Productivity 
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=60");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=60";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=60 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=61");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=61";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=61 order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=number_format($row_max1[score], 0);


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


				<?php	include("table.php");?>



			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=60");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=60";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=60 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 分析<br/>Analysis
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=61");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=61";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=61 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

			include("table.php");
			?>
					
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=61");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=61";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=61 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		</tbody>
		</table>
		<div class="imageexample">
			<div style="float:left;width:100px;height:30px;border:0px solid black;">
       图例Legend:
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/4.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       参试者得分
				<br/>Participant’s Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/2.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       平均得分
				<br/>Average Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/3.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       标杆得分
				<br/>Benchmark Score
			</div>
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:80px;">
      资源运用胜任力总结
			<br/> Performance of Utilizing Resource
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 等级描述<br/>Level Description
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 提高工作效率<br/>Manage Productivity
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=60");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(60, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 分析<br/>Analysis
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=61");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(61, $row_score[score])
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
			<div style="float:left;width:100px;height:30px;border:0px solid black;">
       图例Legend:
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/1.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       参试者得分
				<br/>Participant’s Score
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/hong.jpg" width="40"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:10px;">
       合格线（5分）
				<br/>Qualified Score（5）
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/lv.jpg" width="40"/>
			</div>
			<div style="float:left;width:130px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       期望线（6分）
				<br/>Expectation Score（6）
			</div>
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:80px;">
      资源运用胜任力发展建议
			<br/> Recommendations for Utilizing Resource
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 发展建议<br/>Development recommendations
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 提高工作效率<br/>Manage Productivity
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=60");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(60, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 分析<br/>Analysis
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=61");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(61, $row_score[score])
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
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:70px;">
      人员激励测评结果
			<br/> Assessment Result of Inspiring People
		</div>
		<table style="width:750px;border:0px solid black;text-align:center;font-size:10pt;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="width:250px;border:0px solid black;text-align:center;">
				<table width="106%" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr style="height:38px;background-color:#4F81BD;color:ffffff;">
					<td>
						 得分Score
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
				 个人得分<br/>Participant
			</td>
			<td style="width:100px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 平均得分<br/>Average
			</td>
			<td style="width:100px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 标杆得分<br/>Benchmark
			</td>
		</tr>
		<tr style="height:50px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 激发个人与团队<br/>Inspire Individual &amp; Team
			</td>
			<td style="width:250px;border:0px solid black;">
						<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=62");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=62";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=62 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=63");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=63";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=63 order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=number_format($row_max1[score], 0);

			$result_score2 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=64");
			$row_score2=mysql_fetch_array($result_score2);
			$score2=number_format($row_score2[score], 0);

			$sql_avg2 ="select avg(`score`) as average from score where sub_competency_id=64";
			$result_avg2=mysql_query($sql_avg2);
			$row_avg2=mysql_fetch_array($result_avg2);
			$avg2=$row_avg2[average];

			$sql_max2 ="select * from score  where sub_competency_id=64 order by  `score` desc limit 1";
			$result_max2=mysql_query($sql_max2);
			$row_max2=mysql_fetch_array($result_max2);
			$max2=number_format($row_max2[score], 0);


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
				,122" style="position:absolute;z-index:8;" strokecolor="#4F81BD" strokeweight="2px" >
				<!--CSS样式-->
				</v:line>
				<v:line from="
				<?PHP
						$startx=10+27.4*($avg-1);
						echo $startx;

				?>
				
				,44" to="
				<?PHP
						$startx=10+27.4*($avg1-1);
						echo $startx;

				?>
				,122" style="position:absolute;z-index:8;" strokecolor="#A6A6A6" strokeweight="2px" >
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
				,207" style="position:absolute;z-index:8;" strokecolor="#4F81BD" strokeweight="2px" >
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
				,207" style="position:absolute;z-index:8;" strokecolor="#A6A6A6" strokeweight="2px" >
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





				<?php include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=62");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=62";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=62 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 促进双向沟通<br/>Promote 2 way Communication
			</td>
			<td style="width:250px;border:0px solid black;">
				<?php
				$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=63");
				$row_score=mysql_fetch_array($result_score);
				$score=number_format($row_score[score], 0);

				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=63";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				$avg=$row_avg[average];

				$sql_max ="select * from score  where sub_competency_id=63 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				$max=number_format($row_max[score], 0);

				include("table.php");
				?>
				
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=63");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=63";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=63 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:60px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 教练辅导<br/>Coaching
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
				$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=64");
				$row_score=mysql_fetch_array($result_score);
				$score=number_format($row_score[score], 0);

				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=64";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				$avg=$row_avg[average];


				$sql_max ="select * from score  where sub_competency_id=64 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				$max=number_format($row_max[score], 0);
				

				include("table.php");
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=64");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=64";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=64 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		</tbody>
		</table>
		<div class="imageexample">
			<div style="float:left;width:100px;height:30px;border:0px solid black;">
       图例Legend:
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/4.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       参试者得分
				<br/>Participant’s Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/2.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       平均得分
				<br/>Average Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/3.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       标杆得分
				<br/>Benchmark Score
			</div>
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:50px;">
      人员激励胜任力总结
			<br/> Performance of Inspiring People
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 等级描述<br/>Level Description
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 激发个人与团队<br/>Inspire Individual &amp; Team
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=62");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(62, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 促进双向沟通<br/>Promote 2 way Communication
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=63");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(63, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 教练辅导<br/>Coaching 
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=64");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(64, $row_score[score])
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
			<div style="float:left;width:100px;height:30px;border:0px solid black;">
       图例Legend:
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/1.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       参试者得分
				<br/>Participant’s Score
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/hong.jpg" width="40"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:10px;">
       合格线（5分）
				<br/>Qualified Score（5）
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/lv.jpg" width="40"/>
			</div>
			<div style="float:left;width:130px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       期望线（6分）
				<br/>Expectation Score（6）
			</div>
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:50px;">
      人员激励胜任力发展建议
			<br/> Recommendations for Inspiring People
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 发展建议<br/>Development recommendations
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 激发个人与团队<br/>Inspire Individual &amp; Team
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=62");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(62, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 促进双向沟通<br/>Promote 2 way Communication
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=63");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(63, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 教练辅导<br/>Coaching
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				 <?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=64");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(64, $row_score[score])
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
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:70px;">
      团队合作测评结果
			<br/> Assessment Result of Teaming &amp; Partnering
		</div>
		<table style="width:750px;border:0px solid black;text-align:center;font-size:10pt;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="width:250px;border:0px solid black;text-align:center;">
				<table width="106%" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr style="height:38px;background-color:#4F81BD;color:ffffff;">
					<td>
						 得分Score
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
				 个人得分<br/>Participant
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
				 跨部门协作<br/>Cross-Functional Cooperation
			</td>
			<td style="width:250px;border:0px solid black;">
										<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=65");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=65";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=65 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=66");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=66";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=66 order by  `score` desc limit 1";
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
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=65");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=65";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=65 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 发展关系<br/>Develop & Maintain Relationship
			</td>
			<td style="width:250px;border:0px solid black;">
			<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=66");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=66";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=66 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);
			?>
			<?php include("table.php"); ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=66");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=66";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=66 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		</tbody>
		</table>
		<div class="imageexample">
			<div style="float:left;width:100px;height:30px;border:0px solid black;">
       图例Legend:
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/4.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       参试者得分
				<br/>Participant’s Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/2.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       平均得分
				<br/>Average Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/3.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       标杆得分
				<br/>Benchmark Score
			</div>
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:40px;">
      团队合作胜任力总结
			<br/> Performance of Teaming & Partnering
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 等级描述<br/>Level Description
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 跨部门协作<br/>Cross-Functional Cooperation
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=65");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(65, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 发展关系<br/>Develop & Maintain Relationship
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=66");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(66, $row_score[score])
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
			<div style="float:left;width:100px;height:30px;border:0px solid black;">
       图例Legend:
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/1.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       参试者得分
				<br/>Participant’s Score
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/hong.jpg" width="40"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:10px;">
       合格线（5分）
				<br/>Qualified Score（5）
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/lv.jpg" width="40"/>
			</div>
			<div style="float:left;width:130px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       期望线（6分）
				<br/>Expectation Score（6）
			</div>
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:80px;">
      团队合作胜任力发展建议
			<br/> Recommendations for Teaming &amp; Partnering
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 发展建议<br/>Development recommendations
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 跨部门协作<br/>Cross-Functional Cooperation
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=65");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(65, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 发展关系<br/>Develop & Maintain Relationship
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=66");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(66, $row_score[score])
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
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:70px;">
      自我管理测评结果
			<br/> Assessment Result of Managing Self
		</div>
		<table style="width:750px;border:0px solid black;text-align:center;font-size:10pt;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="width:250px;border:0px solid black;text-align:center;">
				<table width="106%" height="40" style="text-align:center;font-size:10pt;" cellpadding="0" cellspacing="0">
				<tbody>
				<tr style="height:38px;background-color:#4F81BD;color:ffffff;">
					<td>
						 得分Score
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
				 个人得分<br/>Participant
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
				 成为高附加值的员工<br/>Become a Value Add Staff
			</td>
			<td style="width:250px;border:0px solid black;">
						<?php
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=67");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=67";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=67 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);


			$result_score1 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=68");
			$row_score1=mysql_fetch_array($result_score1);
			$score1=number_format($row_score1[score], 0);

			$sql_avg1 ="select avg(`score`) as average from score where sub_competency_id=68";
			$result_avg1=mysql_query($sql_avg1);
			$row_avg1=mysql_fetch_array($result_avg1);
			$avg1=$row_avg1[average];

			$sql_max1 ="select * from score  where sub_competency_id=68 order by  `score` desc limit 1";
			$result_max1=mysql_query($sql_max1);
			$row_max1=mysql_fetch_array($result_max1);
			$max1=number_format($row_max1[score], 0);

			$result_score2 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=70");
			$row_score2=mysql_fetch_array($result_score2);
			$score2=number_format($row_score2[score], 0);

			$sql_avg2 ="select avg(`score`) as average from score where sub_competency_id=70";
			$result_avg2=mysql_query($sql_avg2);
			$row_avg2=mysql_fetch_array($result_avg2);
			$avg2=$row_avg2[average];

			$sql_max2 ="select * from score  where sub_competency_id=70 order by  `score` desc limit 1";
			$result_max2=mysql_query($sql_max2);
			$row_max2=mysql_fetch_array($result_max2);
			$max2=number_format($row_max2[score], 0);

			$result_score3 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=69");
			$row_score3=mysql_fetch_array($result_score3);
			$score3=number_format($row_score3[score], 0);

			$sql_avg3 ="select avg(`score`) as average from score where sub_competency_id=69";
			$result_avg3=mysql_query($sql_avg3);
			$row_avg3=mysql_fetch_array($result_avg3);
			$avg3=$row_avg3[average];

			$sql_max3 ="select * from score  where sub_competency_id=69 order by  `score` desc limit 1";
			$result_max3=mysql_query($sql_max3);
			$row_max3=mysql_fetch_array($result_max3);
			$max3=number_format($row_max3[score], 0);


			$result_score4 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=71");
			$row_score4=mysql_fetch_array($result_score4);
			$score4=number_format($row_score4[score], 0);

			$sql_avg4 ="select avg(`score`) as average from score where sub_competency_id=71";
			$result_avg4=mysql_query($sql_avg4);
			$row_avg4=mysql_fetch_array($result_avg4);
			$avg4=$row_avg4[average];

			$sql_max4 ="select * from score  where sub_competency_id=71 order by  `score` desc limit 1";
			$result_max4=mysql_query($sql_max4);
			$row_max4=mysql_fetch_array($result_max4);
			$max4=number_format($row_max4[score], 0);


			$result_score5 = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=72");
			$row_score5=mysql_fetch_array($result_score5);
			$score5=number_format($row_score5[score], 0);

			$sql_avg5 ="select avg(`score`) as average from score where sub_competency_id=72";
			$result_avg5=mysql_query($sql_avg5);
			$row_avg5=mysql_fetch_array($result_avg5);
			$avg5=$row_avg5[average];

			$sql_max5 ="select * from score  where sub_competency_id=72 order by  `score` desc limit 1";
			$result_max5=mysql_query($sql_max5);
			$row_max5=mysql_fetch_array($result_max5);
			$max5=number_format($row_max5[score], 0);
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

				<?php include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=67");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=67";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=67 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 自我学习和发展<br/>Self Learning &amp; Dev.
			</td>
			<td style="width:250px;border:0px solid black;">


				<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=68");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=68";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=68 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=68");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=68";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=68 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 决断力<br/>Decisiveness
			</td>
			<td style="width:250px;border:0px solid black;">
				<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=70");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=70";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=70 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);

				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=70");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=70";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=70 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 影响力<br/>Impact
			</td>
			<td style="width:250px;border:0px solid black;">
					<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=69");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=69";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=69 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);
					include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=69");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=69";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=69 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 坚韧性<br/>Tenacity
			</td>
			<td style="width:250px;border:0px solid black;">
				<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=71");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=71";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=71 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=71");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=71";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=71 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		<tr style="height:80px;">
			<td style="width:150px;border:0px solid black;background-color:#F2F2F2;">
				 乐观积极<br/>Optimistic and Positive
			</td>
			<td style="width:250px;border:0px solid black;">
				<?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=72");
			$row_score=mysql_fetch_array($result_score);
			$score=number_format($row_score[score], 0);

			$sql_avg ="select avg(`score`) as average from score where sub_competency_id=72";
			$result_avg=mysql_query($sql_avg);
			$row_avg=mysql_fetch_array($result_avg);
			$avg=$row_avg[average];

			$sql_max ="select * from score  where sub_competency_id=72 order by  `score` desc limit 1";
			$result_max=mysql_query($sql_max);
			$row_max=mysql_fetch_array($result_max);
			$max=number_format($row_max[score], 0);
				
				include("table.php") ?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			 <?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=72");
			$row_score=mysql_fetch_array($result_score);
		 	echo number_format($row_score[score], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_avg ="select avg(`score`) as average from score where sub_competency_id=72";
				$result_avg=mysql_query($sql_avg);
				$row_avg=mysql_fetch_array($result_avg);
				echo number_format($row_avg[average], 1);
			?>
			</td>
			<td style="width:100px;border:0px solid black;background-color:#F2F2F2;">
			<?php
				$sql_max ="select * from score  where sub_competency_id=72 order by  `score` desc limit 1";
				$result_max=mysql_query($sql_max);
				$row_max=mysql_fetch_array($result_max);
				echo number_format($row_max[score], 1);
			?>
			</td>
		</tr>
		</tbody>
		</table>
		<div class="imageexample">
			<div style="float:left;width:100px;height:30px;border:0px solid black;">
       图例Legend:
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/4.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       参试者得分
				<br/>Participant’s Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/2.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       平均得分
				<br/>Average Score
			</div>
			<div style="float:left;width:30px;height:30px;border:0px solid black;margin-left:18px;margin-top:5px;">
				<img src="tu/3.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       标杆得分
				<br/>Benchmark Score
			</div>
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:80px;">
      自我管理胜任力总结（1）
			<br/> Performance of Managing Self (1)
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 等级描述<br/>Level Description
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 成为高附加值的员工<br/>Become a Value Add Staff
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=67");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(67, $row_score[score])
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
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:70px;">
      自我管理胜任力总结（2）
			<br/> Performance of Managing Self (2)
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 等级描述<br/>Level Description
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 自我学习和发展<br/>Self Learning &amp; Dev.
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=68");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(68, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 决断力<br/>Decisiveness
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=70");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(70, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 影响力<br/>Impact
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=69");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(69, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 坚韧性<br/>Tenacity
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=71");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(71, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 乐观积极<br/>Optimistic and Positive
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=72");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_ld(72, $row_score[score])
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
			<div style="float:left;width:100px;height:30px;border:0px solid black;">
       图例Legend:
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/1.jpg" width="20"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       参试者得分
				<br/>Participant’s Score
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/hong.jpg" width="40"/>
			</div>
			<div style="float:left;width:150px;height:30px;border:0px solid black;margin-top:5px;margin-left:10px;">
       合格线（5分）
				<br/>Qualified Score（5）
			</div>
			<div style="float:left;width:30px;border:0px solid black;margin-left:17px;margin-top:10px;">
				<img src="tu/lv.jpg" width="40"/>
			</div>
			<div style="float:left;width:130px;height:30px;border:0px solid black;margin-top:5px;margin-left:8px;">
       期望线（6分）
				<br/>Expectation Score（6）
			</div>
		</div>
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:50px;">
      自我管理胜任力发展建议（1）
			<br/> Recommendations for Managing Self (1)
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 发展建议<br/>Development recommendations
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 成为高附加值的员工<br/>Become a Value Add Staff
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=67");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(67, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 自我学习和发展<br/>Self Learning &amp; Dev.
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=68");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(68, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 决断力<br/>Decisiveness
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=70");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(70, $row_score[score])
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
		<div style="width:750px;border:0px solid black;text-align:center;font-size:11pt;margin-top:70px;">
      自我管理胜任力发展建议（2）
			<br/> Recommendations for Managing Self (2)
		</div>
		<table style="width:750px;border:0px solid black;font-size:10pt;text-align:center;margin-top:10px;" cellpadding="0" cellspacing="2">
		<tbody>
		<tr style="height:50px;border:0px solid black;background-color:#4F81BD;color:ffffff;">
			<td style="border:0px solid black;width:150px;">
				 子胜任力<br/>Sub-Competency
			</td>
			<td style="border:0px solid black;width:600px;">
				 发展建议<br/>Development recommendations
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 影响力<br/>Impact
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=69");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(69, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 坚韧性<br/>Tenacity
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=71");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(71, $row_score[score])
				?>
			</td>
		</tr>
		<tr style="height:120px;border:0px solid black;background-color:#F2F2F2;">
			<td style="border:0px solid black;width:150px;">
				 乐观积极<br/>Optimistic and Positive
			</td>
			<td style="border:0px solid black;width:600px;text-align:left;">
				<?php 
					$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=72");
					$row_score=mysql_fetch_array($result_score);
					echo  competency_zh(72, $row_score[score])
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
			<div class="qianyan" style="float:left;width:500px;height:50px;margin-top:40px;margin-left:18px;font-size:14pt;font-weight:bold;text-align:left;color:000;">
       附件：胜任力定义 
				<br/>Appendix: Definition of Competency
			</div>
		</div>
		<div class="titledefine" style="margin-top:30px;">
      流程管理胜任力
			<br/> Managing Process
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       管理执行和优先次序 Manage Execution & Prioritization 
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">结合战略方向安排工作的优先次序，制定工作计划，组织资源与人员，确保高效率与高质量地达成行动计划并取得成果
</span>
			<br/>
			<span style="margin-left:35px;">Plan and prioritize based on organizational strategy, organize resources effectively and efficiently to achieve business </span><span style="margin-left:35px;">goals</span>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">基于组织战略，制定工作计划，并排定相应的优先次序，明确自己的工作或活动与最终目标及整体计划之间的关系
</span>
			<br/>
			<span style="margin-left:35px;">Plan and prioritize based on organizational strategy, and ensure clarity on the relationship between working objectives </span><span style="margin-left:35px;">and ultimate goals
</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对工作进行分工，安排资源并将合适的人放在合适的位置上，明确职责分配</span>
			<br/>
			<span style="margin-left:35px;">Divide the work properly, arrange resources and put right people in the right place, clarify responsibilities according to the </span><span style="margin-left:35px;">objective</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">运用合适的流程以有效地支持行动计划的实施，注重执行过程的监督与反馈，阶段性地检视进展以发现并解决问题，及时</span><span style="margin-left:35px;">做出调整和追加资源，确保每一任务模块都能及时与高效的完成</span>
			<br/>
			<span style="margin-left:35px;">Use appropriate process to support action plan implementation, give particular attention to execution feedback, </span><span style="margin-left:35px;">periodically review progress to find and solve problems, and make necessary adjustments and add resources when </span><span style="margin-left:35px;">needed to make sure each task module could finish timely and effectively
</span>
			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:70px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       发展内部客户满意 Develop Internal Customer Satisfaction 
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">营造一个员工满意的环境，以提升员工责任感和成就感，并促使员工更好地配合，以产出内部客户满意来提高整体的服务</span><span style="margin-left:35px;">质量</span>
			<br/>
			<span style="margin-left:35px;">Develop a workplace environment with high employee satisfaction to raise employees’ sense of responsibility and </span><span style="margin-left:35px;">achievement, enable them to work corporately in an effort to achieve internal customer satisfaction</span>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">在“服务利润链”的基础上，深刻理解内外部客户满意度之间的关系，能够有效管理内部服务质量</span>
			<br/>
			<span style="margin-left:35px;">Understand the relationship between internal customer satisfaction and external customer satisfaction profoundly based </span><span style="margin-left:35px;">on the “service-profit chain” and are able to manage internal service quality </span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过工作再设计、流程与工具优化、雇员甄选和发展、雇员奖励与认可等方式持续提升内部管理服务水平</span>
			<br/>
			<span style="margin-left:35px;">Improve internal management service quality continuously through job re-design, process &amp; tool optimization, employee </span><span style="margin-left:35px;">selection and development, and employee rewards and recognition, etc. </span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">使用明确的方法收集和分析员工需求，并在分析的基础上满足员工的需求</span>
			<br/>
			<span style="margin-left:35px;">Use explicit methods to collect and analyze employees’ needs and meet employees’ needs based on the analysis<br/><br/><span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span><span style="margin-left:18px;">确保公司客户服务流程的无缝衔接，在各职能部门之间建立一种强有力的伙伴关系</span><br/></span>
			<span style="margin-left:35px;">Develop a seamless customer service process and build a strong partnership among all functions across the whole </span><span style="margin-left:35px;">organization <br/><br/></span>
			<br/>
			<br/>

		</div>
	</div>
</div>
<div class="central">
	<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine">
      资源运用胜任力
			<br/> Utilizing Resource
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       提高工作效率 Manage Productivity
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">有效运用资源，提升劳动力的使用效率，以减少冗余，并实现高绩效</span>
			<br/>
			<span style="margin-left:35px;">Utilize resource effectively, optimize the efficiency of labor force to reduce redundancy and reach high performance.</span>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">明晰达成任务或解决问题所需的资源、流程和劳动力，并进行相应的衡量</span>
			<br/>
			<span style="margin-left:35px;">Clarify and measure resources, process or labor force needed to finish tasks or solve problems</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">结合目标要求和考虑相关具体情境来进行资源的整合和配置，以减少资源的冗余和浪费</span>
			<br/>
			<span style="margin-left:35px;">Integrate and allocate resources by considering the target requirement and specific situation to reduce redundancy and </span><span style="margin-left:35px;">waste</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">优化流程、提升技术，并赢得、发展和应用人力资源，以实现组织效率的最大化</span>
			<br/>
			<span style="margin-left:35px;">Optimize the process and elevate technology; engage, develop and deploy human resources to maximize organizational </span><span style="margin-left:35px;">efficiency </span>
			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:70px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       分析 Analysis
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够基于需要完成的工作任务进行清晰准确地逻辑及数量关系的分析与判断</span>
			<br/>
			<span style="margin-left:35px;">Make accurate analysis and judgment for the assigned the tasks, based on the logical and quantitative relations</span>
			<br/>
			<br/>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">运用系统全面的方法将复杂问题或任务分解为若干个关键点</span>
			<br/>
			<span style="margin-left:35px;">Undertakes a complex task by breaking it down into manageable  parts in a systematic way</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">明确完成任务所需相关资源及其合理结构</span>
			<br/>
			<span style="margin-left:35px;">Identify the structure and priority of resources which are required for completing the task</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">运用不同的分析技巧如归纳、演绎、推理等找到多种解决方案，并评估各方案价值</span>
			<br/>
			<span style="margin-left:35px;">Using different analysis skills such as induction, deduction and reasoning to find multiple solutions then assess the value </span><span style="margin-left:35px;">of them</span>
			<br/>
			<br/>
		</div>
	</div>
</div>
<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine">
      人员激励胜任力（1）
			<br/> Inspiring People (1)
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       激发个人与团队 Inspire Individual &amp; Team
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">为达成组织的愿景和目标，有效激发他人的动机与潜能，持续赢得他人的承诺，并与团队成员之间建立一种绩效合伙人的</span><span style="margin-left:35px;">关系</span>
			<br/>
			<span style="margin-left:35px;">Inspire team members’ motives and potentials toward established vision and goals, continuously gain others’ </span><span style="margin-left:35px;">commitment and create a partnership for </span><span style="margin-left:35px;">performance.</span>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">了解激励人心的重要性，并能提出明确的愿景与员工进行分享</span>
			<br/>
			<span style="margin-left:35px;">Understand the importance of inspiring people’s heart and are able to share explicit vision with employees</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">主动解除个人和团队可能的顾虑，提供相应的资源并移除相应的障碍，以赢得员工的承诺</span>
			<br/>
			<span style="margin-left:35px;">Dispel possible concerns of individual and team, provide corresponding resources and remove corresponding obstacles </span><span style="margin-left:35px;">to gain commitment</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过参与式管理与员工共同制定较为完整的行动方案，使员工切实参与到企业发展中来，从而获得强烈的主人翁精神</span>
			<br/>
			<span style="margin-left:35px;">Enable individual and team through working out action plans together with employees in a participative management </span><span style="margin-left:35px;">approach, shaping a culture of ownership</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">持续跟进员工的工作，提供必要的反馈或指导，及时鼓舞团队的士气, 并以各种形式认可员工的工作</span>
			<br/>
			<span style="margin-left:35px;">Continuously review individual and team’s performance, provide necessary feedback or coaching, energize team spirit </span><span style="margin-left:35px;">timely and recognize them through various methods and mechanism</span>
			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:70px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       教练辅导 Coaching
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过提问、聆听、反馈等技巧，帮助员工改善其自身短板，以实现工作绩效的持续提升</span>
			<br/>
			<span style="margin-left:35px;">Develop individual gap through questioning, listening and feedback, driving continuous improvement on employee’s </span><span style="margin-left:35px;">performance
</span>
			<br/>
			<br/>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过有效地提问、聆听技巧，引导员工认识到自身的短板</span>
			<br/>
			<span style="margin-left:35px;">Guide the employee recognize their gap through effective questioning , listening and feedback</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">在工作中给予员工反馈，并提供帮助员工实现目标的方法或建议</span>
			<br/>
			<span style="margin-left:35px;">Provide the feedback , method and advices to the employee to help them achieve the goal.</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">积极地跟进员工执行的过程，帮助员工实现个人的提升</span>
			<br/>
			<span style="margin-left:35px;">Monitor the implementation, promote capability development effectively  </span>
			<br/>
			<br/>
		</div>
	</div>
</div>
<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine">
      人员激励胜任力（2）
			<br/> Inspiring People (2)
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       促进双向沟通 Promote 2 way Communication
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">运用有效的沟通技巧和机制，鼓励员工的积极参与，提高员工的主动性和责任感，营造员工的归属感</span>
			<br/>
			<span style="margin-left:35px;">Use effective approach and mechanism to encourage employees’ involvement and improve their initiative and sense of </span><span style="margin-left:35px;">responsibility</span>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">主动与员工沟通并提供反馈</span>
			<br/>
			<span style="margin-left:35px;">Proactively communicate and offer feedback</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">运用有效的提问和聆听技巧，鼓励员工参与反馈</span>
			<br/>
			<span style="margin-left:35px;">Use effective questioning and listening skill to encourage employee’s feedback participation</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">利用多种正式和非正式的沟通渠道建立明确的组织双向沟通机制</span>
			<br/>
			<span style="margin-left:35px;">Develop specific two-way communication mechanism, applying a variety of formal and informal communication channels</span>
			<br/>
			<br/>
		</div>
	</div>
</div>
<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine">
      团队合作
			<br/> Teaming &amp; Partnering
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       跨部门协作 Cross-Functional Cooperation
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能通过业务上的共同目标支持、鼓励跨部门合作，促进跨部门之间的持续合作</span>
			<br/>
			<span style="margin-left:35px;">Support and encourage cross-functional cooperation through the common goal of business  to promote continuous </span><span style="margin-left:35px;">collaboration.</span>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">明晰个人、职能或组织为了达成共同目标所需的权利和责任</span>
			<br/>
			<span style="margin-left:35px;">Demonstrate a good understanding of interests and responsibilities required to achieve mutual goals among different </span><span style="margin-left:35px;">department or function</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">主动分享相关信息，促进跨部门之间的有效沟通与交流，并能灵活地处理合作中的问题或冲突，获取他人的配合和协助
</span>
			<br/>
			<span style="margin-left:35px;">Sharing information proactively, promote effective cross-functional communication and resolve problems and conflicts in </span><span style="margin-left:35px;">a flexible manner to gain supports from others</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">成功地管理维系多方关系，确保跨部门的持续合作</span>
			<br/>
			<span style="margin-left:35px;">Manage the relationship among all parties successfully to ensure the continuous collaboration</span>
			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:70px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       发展关系 Develop & Maintain Relationship
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">与他人建立积极的工作关系，并通过有效的方式维系良好的关系或关系网，以促进工作或任务的完成</span>
			<br/>
			<span style="margin-left:35px;">Develop and maintain positive relationship network, obtain and apply information and resources that enabling a better </span><span style="margin-left:35px;">support to the performance.</span>
			<br/>
			<br/>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">具备人际敏感度，能准确判断他人的需求，并提供他人所需的支持与帮助</span>
			<br/>
			<span style="margin-left:35px;">With interpersonal sensitivity, accurately observe others’ need and provide support and help</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">与他人建立融洽的工作和私人关系，并能促进关系的发展</span>
			<br/>
			<span style="margin-left:35px;">Establish a rapport with others, and promote the development of the relationship network</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够赢得他人尊重和信赖，维系与他人的长期良好的合作关系</span>
			<br/>
			<span style="margin-left:35px;">Win others’ respect and reliance, maintain a positive and long-term cooperation with others</span>
			<br/>
			<br/>
		</div>
	</div>
</div>
<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div  class="titledefine">
      自我管理（1）
			<br/> Managing Self (1)
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       成为高附加值员工 Become a Value Add Staff
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">设定富有挑战性的前瞻目标，坚持不懈地追求工作的高绩效，超越他人的期望和工作的需求，持续地为团队创造价值</span>
			<br/>
			<span style="margin-left:35px;">Develop challenging goals, strive for superior performance in order to provide value-add to the organization</span>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">愿意设定富有挑战性的前瞻目标，以绩效为导向，并以目标完成作为解决问题或采取行动的驱动力</span>
			<br/>
			<span style="margin-left:35px;">Take initiative in setting prospective challenging goals, are performance-oriented and keep the goals clear in mind for </span><span style="margin-left:35px;">problem-solving and action taking</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">在岗位要求的基础上寻找为组织增值的机会，通过创新、有效的解决方案，主动采取行动以实现增值</span>
			<br/>
			<span style="margin-left:35px;">Seek value-added opportunities based on job requirement, provide creative ideas and effective problem solving solutions </span><span style="margin-left:35px;">and proactively take action to achieve value-add</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对自身工作拥有主人翁精神，勇于承担责任，在工作中寻求、利用和整合一切可能的资源以克服障碍或挑战更高的目标</span>
			<br/>
			<span style="margin-left:35px;">Have ownership and strong responsibility for the job, seek, utilize, and integrate all possible resources in working against </span><span style="margin-left:35px;">obstacles and challenging tougher goals</span>
			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:70px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       自我学习与发展 Self Learning &amp; Development
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">展示出很强的自我发展意愿；通过有针对性的方式与途径，丰富知识，提升职业技能，确保自身的持续提升，保持职场竞</span><span style="margin-left:35px;">争力</span>
			<br/>
			<span style="margin-left:35px;">Display strong willingness to learn and develop; increase knowledge and improve expertise through pertinent ways and </span><span style="margin-left:35px;">channels to ensure continuous improvement and workplace competitiveness</span>
			<br/>
			<br/>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">善于分析自身优势和短板，将个人学习目标与职业生涯规划相结合，并制定相应的学习计划</span>
			<br/>
			<span style="margin-left:35px;">Are good at analyzing self strengths and weaknesses, fuse personal learning objective and career development into a </span><span style="margin-left:35px;">cohesive whole clearly, and formulate personal learning plans accordingly </span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">根据自身情况积极利用多种途径为自己创造学习机会，不断尝试有效的、适合自己的学习方法</span>
			<br/>
			<span style="margin-left:35px;">Create learning opportunities using a variety of avenue and try to find effective and suited learning methods continuously</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对专业领域的信息保持敏感度和好奇心，对知识有强烈的渴求，不断寻找和尝试新技术以保持竞争力</span>
			<br/>
			<span style="margin-left:35px;">Keep curiosity and sensitivity on the information update in areas of expertise, and are keen on the knowledge and </span><span style="margin-left:35px;">know-how in these areas; try to experiment new technologies and approaches to stay competitive in the workplace and </span><span style="margin-left:35px;">the industry</span>
			<br/>
			<br/>
		</div>
	</div>
</div>
<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine">
      自我管理（2）
			<br/> Managing Self (2)
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       决断力 Decisiveness
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">在不确定因素或压力存在的情形下，能及时作出正确决定，及时采取行动或指定解决方案</span>
			<br/>
			<span style="margin-left:35px;">Make right decision, takes timely actions or generates solutions on the right occasion even under uncertainty or pressure</span>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">愿意作出决定或给出清晰的建议</span>
			<br/>
			<span style="margin-left:35px;">Are willing to make decisions or give clear suggestions</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">从收集到的信息得出正确结论和理性决策</span>
			<br/>
			<span style="margin-left:35px;">Draw the right conclusion and make rational decision from information collected </span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">在压力下能冷静思考并提出解决方案，在面对冲突和挑战时毫不犹豫地给出自己的意见或果断采取行动</span>
			<br/>
			<span style="margin-left:35px;">Think calmly and bring up solutions under pressures and do not hesitate to express own ideas or take actions assertively </span><span style="margin-left:35px;">when facing conflicts and challenges</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">对自己的决策充满自信的同时全面地考虑到决策风险和后续影响，不会轻易被新信息所动摇</span>
			<br/>
			<span style="margin-left:35px;">Keep self-assured with own decision and consider the decision risk or impact in the meanwhile, not easily puzzled by </span><span style="margin-left:35px;">new information</span>
			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:70px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       影响力 Impact
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">能够赢得别人的关注，尊敬与信任，并能够运用有效策略以影响他人的思想和行为</span>
			<br/>
			<span style="margin-left:35px;">Gain attention, respect and trust from people and influence other’s thoughts and behaviors</span>
			<br/>
			<br/>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">展示出专业的礼仪和形象与自信，创造积极的第一印象</span>
			<br/>
			<span style="margin-left:35px;">Demonstrate appropriate etiquette and confidence to create a positive first impression </span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">清晰、准确地传递和解释信息，通过专业水准和专业知识获得他人的关注与尊敬</span>
			<br/>
			<span style="margin-left:35px;">Convey and explain information using ways of communication in an accurate manner and acquire attention and respect </span><span style="margin-left:35px;">through professionalism </span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">通过展示对他人利益的关切赢得他人的信任</span>
			<br/>
			<span style="margin-left:35px;">Gain trust through displaying concerns about other’s benefits and needs</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">发展和运用有效策略以影响他人，赢得需要的支持和协助</span>
			<br/>
			<span style="margin-left:35px;">Gain buy-in and support applying appropriate influencing strategies to impact people</span>
			<br/>
			<br/>
		</div>
	</div>
</div>
<div class="central">
<?php require("head.html") ?>
	<div class="main">
		<div class="titledefine">
      自我管理（3）
			<br/> Managing Self (3)
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:10px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       坚韧性 Tenacity
			</div>
		</div>
		<div class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">在实现计划目标的过程当中始终坚持不懈，从失败或者错误的挫折中很快恢复斗志并保持决心，并从失败或者错误中吸取</span><span style="margin-left:35px;">教训，继续专注在目标的达成上，坚持完成所从事的任务。</span>
			<br/>
			<span style="margin-left:35px;">Ability to persevere with a goal or an issue until the matter is settled or the goal is no longer reasonably attainable. Ability </span><span style="margin-left:35px;">to recover from failures and continue to focus on the achievement of the goals, adhere to the completion of the tasks </span><span style="margin-left:35px;">undertaken.</span>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">调整自己，从挫折中走出来的能力</span>
			<br/>
			<span style="margin-left:35px;">Ability to recover from failures.</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">关注成果，努力不懈直至任务达成</span>
			<br/>
			<span style="margin-left:35px;"> Focus on achievement. Commitment to completion of tasks.</span>
			<br/>
			<br/>
		</div>
		<div style="width:750px;border:0px solid black;font-size:10pt;margin-top:70px;background-color:#4F81BD;color:ffffff;font-size:10pt;height:35px;">
			<div style="margin-left:18px;margin-top:10px;float:left;">
       乐观积极 Optimistic and Positive
			</div>
		</div>
		<div  class="define">
			<div style="margin-left:300px;margin-top:5px;float:left;">
       定义 Definition
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">在任何情况下都相信自己，在困难下仍然能够保持乐观积极的心态</span>
			<br/>
			<span style="margin-left:35px;">Always stay confident, still be optimistic under difficult situations.</span>
			<br/>
			<br/>
		</div>
		<div class="define">
			<div style="margin-left:260px;margin-top:5px;float:left;">
       行为特征 Behavioral Indicator
			</div>
		</div>
		<div style="width:750px;border:px solid black;font-size:10pt;margin-top:0px;background-color:#F2F2F2;color:000000;font-size:10pt;height:100px;">
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">自信，对未来充满信心</span>
			<br/>
			<span style="margin-left:35px;">Confident about oneself and the future</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">即便在困难的情况下，仍然保持乐观积极的心态，并相信困难能够被克服</span>
			<br/>
			<span style="margin-left:35px;">Being confident and optimistic in face of difficulty, believes any difficulty can be overcome</span>
			<br/>
			<br/>
			<span style="margin-left:10px;"><img src="tu/dian.jpg" width="5" height="5" border="0" alt=""/></span>
			<span style="margin-left:18px;">倾向于正面地看待、思考问题</span>
			<br/>
			<span style="margin-left:35px;">Tends to regard and think with positive attitude.</span>
			<br/>
			<br/>
		</div>
	</div>
</div>
</body>
</html>



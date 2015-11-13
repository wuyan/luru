<?php 	include("conn.php"); ?>
<chart>
	<axis_category   size='12'  />
	<axis_value  min='0' size='11'  steps='5' max='10'  />
	
	<chart_border  top_thickness='0' bottom_thickness='2' left_thickness='1' right_thickness='0' />
	   <chart_data>
      <row>
         <null/>
         	<string>成为高附加值的员工&#x0A;Become a Value &#x0A;Add Staff</string>
			<string>自我学习和发展&#x0A;Self Learning &#x0A;& Dev.</string>
			<string>决断力&#x0A;Decisiveness</string>
			<string>影响力&#x0A;Impact</string>
			<string>坚韧性&#x0A;Tenacity</string>
			<string>积极乐观&#x0A;Optimistic and &#x0A;Positive </string>
      </row>
      <row>
         <string>Region A</string>
     	    <number><?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=67");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
			<number><?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=68");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
			<number><?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=70");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
			<number><?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=69");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
			<number><?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=71");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
			<number><?php 
			$result_score = mysql_query("select * from score where user_id='$_GET[id]' and sub_competency_id=72");
			$row_score=mysql_fetch_array($result_score);
			echo $row_score[score];
			?></number>
      </row>
   </chart_data>
	<chart_grid_h alpha='50' thickness='1' type='dashed' />
	<chart_label color='ffffff'  size='14' position='middle' />
	
	<chart_rect    x='50' y='150' width='650' height='250' />





	<draw>
		<text  alpha='100' size='15' x='300' y='50' width='300' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom'  shadow1='shadow1'  bevel='bevel2'  >自我管理胜任力得分</text>
		<text  alpha='100' size='15' x='298' y='70' width='300' height='10' h_aligh='center' font="arial"  color='000000'  v_align='borrom'>Score of Managing Self.</text>
		<rect layer='background' x='0' y='0' width='750' height='450' fill_color='ffffff' />
		 <line 
         
           x1='52' 
           y1='250' 
           x2='700'  
           y2='250' 
           line_color='00B050' 
           line_alpha='100'
           line_thickness='3'
           />


	
			<line 
         
           x1='52' 
           y1='275' 
           x2='700'  
           y2='275' 
           line_color='FF0000' 
           line_alpha='100'
           line_thickness='3'
           />
		   <text  alpha='80' size='12' x='45' y='405' width='150' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >成为高附加值的员工</text>
		   <text  alpha='80' size='12' x='170' y='405' width='150' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >自我学习和发展</text>
		   <text  alpha='80' size='12' x='300' y='405' width='150' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >决断力</text>
		   <text  alpha='80' size='12' x='410' y='405' width='150' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >影响力</text>
			<text  alpha='80' size='12' x='520' y='405' width='150' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >坚韧性</text>
			<text  alpha='80' size='12' x='620' y='405' width='150' height='10' h_aligh='center' font="楷体"  color='000000'  v_align='borrom' >积极乐观</text>
	

	</draw>

	
	<legend layout='hide'  />

	<series_color>
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>	
		<color>95B3D7</color>
		<color>95B3D7</color>	
		<color>95B3D7</color>	
	</series_color>
	<series set_gap='60' bar_gap='70' transfer='true' />
	
</chart>

 
